<?php

namespace App\Http\Controllers;

use App\Models\Penpos;
use App\Models\PenposTeam;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PenposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penposId = 1; //Sementara idnya 1, belum buat login+auth
        $teams = $this->getTeams($penposId);
        $penposData = Penpos::find($penposId); // get penpos data
        return view('penpos', compact('teams', 'penposData'));
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
        $penposId = 1; //Sementara idnya 1, belum buat login+auth
        $teamId = $request["teamId"];
        $hasilGame = $request["hasilGame"];
        foreach ($teamId as $id) {
            $data = array(
                "penpos_id" => $penposId,
                "teams_id" => $id,
                "hasil" => $hasilGame
            );
            DB::table("penpos_teams")->insert($data);
        }
        return Redirect::route("HomePenpos");
    }
}
