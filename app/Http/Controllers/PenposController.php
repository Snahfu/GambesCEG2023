<?php

namespace App\Http\Controllers;

use App\Models\Penpos;
use App\Models\PenposTeam;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Events\penposStatus;
use App\Models\Clue;
use App\Models\Kartu;

class PenposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penposId = Auth::user()->penpos_id;
        $teams = $this->getTeams($penposId);
        $penposData = Penpos::find($penposId); // get penpos data
        if ($penposData->tipe == "Battle")
            return view('penpos.index2', compact('teams', 'penposData'));
        else if ($penposData->tipe == "Jasa")
            return view('penpos.posjasa', compact('teams', 'penposData'));
        else if ($penposData->tipe == "Penukar")
            return view('penpos.clue', compact('teams', 'penposData'));
        else return view('penpos.single', compact('teams', 'penposData'));
    }

    public function getTeams($penposId)
    {
        // get all team that haven't played yet
        $teams = DB::table('teams')->whereNotIn('id', function ($query) use ($penposId) {
            $query->select('teams_id')->from('penpos_teams')->where('penpos_id', $penposId);
        })->get();
        return $teams;
    }

    public function leaderboard()
    {
        $leaderboard = Team::orderBy('coin')->get();
        return view('penpos.leaderboard', compact('leaderboard'));
    }

    public function insertHasilGame(Request $request)
    {
        // dd($request);
        // memasukan hasil game ke database
        $penposId = Auth::user()->penpos_id; //Sementara idnya 1, belum buat login+auth
        if (Penpos::find($penposId)->tipe == "Battle") {
            // Memasukan data ke database   
            for ($i = 0; $i < count($request["team"]); $i++) {
                $hasil = "";
                if ($request["kondisi"] == "Menang" && $request["pemenang"] == $request["team"][$i]) {
                    $pemenang = $request["pemenang"];

                    // Mendapatkan id team yang bukan pemenang
                    $filteredTeams = array_filter($request["team"], function ($team) use ($pemenang) {
                        return $team != $pemenang;
                    });

                    // Merangkai hasil pemenang
                    $hasil = "Team " . Team::find($pemenang)->nama . " menang melawan Team ";
                    foreach ($filteredTeams as $team) {
                        $hasil .= Team::find($team)->nama . " dan Team ";
                    }
                    $hasil = substr($hasil, 0, -10);
                } else if ($request["kondisi"] == "Seri") {
                    $tempTeam = $request["team"][$i];
                    $filteredTeams = array_filter($request["team"], function ($team) use ($tempTeam) {
                        return $team != $tempTeam;
                    });
                    // Merangkai hasil seri
                    $hasil = "Team " . Team::find($tempTeam)->nama . " seri melawan Team ";
                    foreach ($filteredTeams as $team) {
                        $hasil .= Team::find($team)->nama . " dan Team ";
                    }

                    $hasil = substr($hasil, 0, -10);
                } else {
                    $hasil .= "Team " . Team::find($request["team"][$i])->nama . " kalah melawan Team " . Team::find($request["pemenang"])->nama;
                }
                $data = array(
                    "penpos_id" => $penposId,
                    "teams_id" => $request["team"][$i],
                    "hasil" => $hasil,
                    "koin" => $request["koin"][$i]
                );
                DB::table("penpos_teams")->insert($data);
            }
        } else if (Penpos::find($penposId)->tipe == "Jasa") {
            $data = array(
                "penpos_id" => $penposId,
                "teams_id" => $request["team"][0],
                "hasil" => "Team " . $request["team"][0] . " " . $request["hasil"][0],
                "koin" => $request["koin"][0]
            );
            DB::table("penpos_teams")->insert($data);
            // Tambahkan kartu
            $pemain = Team::find($request["team"][0]);
            // ID penpos = ID Kartu
            $pemain->inventory_kartu()->attach($penposId, [
                'sold' => "Belum",
            ]);
        } else {
            $data = array(
                "penpos_id" => $penposId,
                "teams_id" => $request["team"][0],
                "hasil" => "Team " . $request["team"][0] . " " . $request["hasil"][0],
                "koin" => $request["koin"][0]
            );
            DB::table("penpos_teams")->insert($data);
        }

        $this->updateCoin($request);

        return Redirect::route("penpos.HomePenpos");
    }

    public function updateStatusPos(Request $request)
    {
        //id penpos sementara yang akan diupdate yaitu 1
        $penposId = Auth::user()->penpos_id;
        $selectedPos = Penpos::find($penposId);

        // Make sure you've got the Page model
        if ($selectedPos) {
            $selectedPos->status = $request['status'];
            $selectedPos->save();
        }

        $penposStatus = ['penpos' => $selectedPos];
        event(new penposStatus($penposStatus));

        return response()->json(['result' => 'Success Update Status', "success" => true]);
        // return view('/HomePenpos');
    }

    public function updateCoin(Request $request)
    {
        for ($i = 0; $i < count($request["team"]); $i++) {
            $query = DB::table('teams')->where('id', $request["team"][$i]);
            $query->increment('coin', $request["koin"][$i]);
        }
    }


    public function getTeamInventory(Request $request)
    {
        $status = "success";
        $msg = "berhasil";
        // Ambil id team yg login
        $pemainId = $request["id"];
        // Ambil team
        $pemain = Team::find($pemainId);
        if (!$pemain) {
            $status = "error";
            $msg = "error tidak menemukan pemain";
            return response()->json(array(
                'status' => $status,
                'msg' => $msg,
            ), 200);
        }
        // Ambil semua toko kartu milik team yg login
        $inventoryKartus = $pemain->inventory_kartu->where('pivot.sold', "Belum")->all();
        // Ke halaman view
        // dd($inventoryKartus);
        return response()->json(array(
            'status' => $status,
            'msg' => $msg,
            'inventoryKartus' => $inventoryKartus,
        ), 200);
    }

    public function checkCombination(Request $request)
    {
        // Deklarasi Variable kebutuhan
        $validasi1 = "error";
        $status = "success";
        $msg = "Ditemukan Clue";
        $duaDimensiArrayKombinasi = array();
        // Ambil id dari blade
        $pemainId = $request["id"];
        // Ambil team
        $pemain = Team::find($pemainId);
        // Ambil semua kombinasi
        $allCombination = Clue::select('combinasi')->orderBy('id')->get();
        // Masukan ke array dua dimensi untuk melakukan pengecekan
        foreach ($allCombination as $combinasi) {
            $duaDimensiArrayKombinasi[] = explode(",", $combinasi['combinasi']);
        }
        // Ambil kombinasi milik user
        $combinationUser = $request['kombinasi'];
        // Cek ada atau tidak
        if (!$combinationUser) {
            $status = "error";
            $msg = "error tidak menemukan pemain";
            return response()->json(array(
                'status' => $status,
                'msg' => $msg,
            ), 200);
        }
        // Ubah ke array
        $arrayCombinationUser = explode(",", $combinationUser);
        // Cek apakah kombinasi user ada di database?
        $counter = 0;
        $kombinasiKe = 0;
        // Sort Array dulu
        sort($arrayCombinationUser);

        foreach ($duaDimensiArrayKombinasi as $kombinasi) {
            $counter += 1;
            if ($arrayCombinationUser == $kombinasi) {
                $validasi1 = "ok";
                $kombinasiKe = $counter;
            }
        }
        // Klo tidak ada kombinasi return error
        if ($validasi1 == "error") {
            // Gagal
            $status = "error";
            $msg = "Kombinasi yang dimasukan masih salah silahkan coba lagi!";
            return response()->json(array(
                'status' => $status,
                'msg' => $msg,
            ), 200);
        }

        $clueData = Clue::where('id', $kombinasiKe)->first();
        // Dipisah
        $idKartuInputUser = $request['idkombinasi'];
        $arrayIdKartu =  explode(",", $idKartuInputUser);
        // PROSES MENJUALKAN KARTU
        foreach ($arrayIdKartu as $value) {
            // Ambil kartunya
            $kartuJual = $pemain->inventory_kartu->where('pivot.id', $value)->first();
            // Ubah data kartunya
            $pemain->inventory_kartu()->wherePivot('id', $kartuJual->pivot->id)->updateExistingPivot($kartuJual->pivot->kartus_id, ['sold' => "Terjual"], false);
        }
        // PROSES MENAMBAHKAN CLUE KE INVENTORY
        $pemain->inventory_clue()->attach($clueData->id);
        $msg = "Team berhasil menemukan Clue " . $clueData->id;
        return response()->json(array(
            'status' => $status,
            'msg' => $msg,
        ), 200);
    }
}
