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

class PenposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penposId = Auth::id();
        $teams = $this->getTeams($penposId);
        $penposData = Penpos::find($penposId); // get penpos data
        if ($penposData->tipe == "Battle")
            return view('penpos.index', compact('teams', 'penposData'));
        else if ($penposData->tipe == "Jasa")
            return view('penpos.posjasa', compact('teams', 'penposData'));
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
    public function insertHasilGame(Request $request)
    {
        // memasukan hasil game ke database
        $penposId = Auth::id(); //Sementara idnya 1, belum buat login+auth
        if (Penpos::find($penposId)->tipe == "Battle") {
            for ($i = 0; $i < count($request["team"]); $i++) {
                $data = array(
                    "penpos_id" => $penposId,
                    "teams_id" => $request["team"][$i],
                    "hasil" => "Team " . $request["team"][$i] . " " . $request["hasil"][$i] . " Melawan Team " . $request["lawan"][$i],
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
        $penposId = Auth::id();
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
}
