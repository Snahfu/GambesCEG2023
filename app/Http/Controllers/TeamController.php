<?php

namespace App\Http\Controllers;

use App\Models\Penpos;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // mengarahkan ke halaman beli
    public function gotoBuy()
    {
        return view('pemain.buy');
    }

    // mengarahkan ke halaman jual
    public function gotoSell()
    {
        return view('pemain.sell');
    }

    //Method mengambil semua post permainan dan mengarah ke halaman default pemain
    public function getAllPos()
    {
        return view('pemain.map', [
            "pos" => Penpos::all()
        ]);
    }
}
