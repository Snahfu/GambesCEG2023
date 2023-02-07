<?php

namespace App\Http\Controllers;

use App\Models\PenposTeam;
use Illuminate\Http\Request;

class PenposTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posbattle.history', [
            "namapos" => "Truth or Dare",
            "penposteams" => PenposTeam::latest('jam')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PenposTeam  $penposTeam
     * @return \Illuminate\Http\Response
     */
    public function show(PenposTeam $penposTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PenposTeam  $penposTeam
     * @return \Illuminate\Http\Response
     */
    public function edit(PenposTeam $penposTeam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PenposTeam  $penposTeam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PenposTeam $penposTeam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PenposTeam  $penposTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenposTeam $penposTeam)
    {
        //
    }
}
