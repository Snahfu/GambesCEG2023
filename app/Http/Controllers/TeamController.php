<?php

namespace App\Http\Controllers;

use App\Models\Penpos;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // Ambil id team yg login
        $pemainId = Auth::user()->teams_id;
        // Ambil team
        $pemain = Team::find($pemainId);
        // Ambil semua toko kartu milik team yg login
        $tokoKartus = $pemain->toko_kartu->all();
        dd($tokoKartus);
        // Ke halaman view
        return view('pemain.buy', [
            "tokoKartus" => $tokoKartus
        ]);
    }

    // mengarahkan ke halaman jual
    public function gotoSell()
    {
        // Ambil id team yg login
        $pemainId = Auth::user()->teams_id;
        // Ambil team
        $pemain = Team::find($pemainId);
        // Ambil semua toko kartu milik team yg login
        $inventoryKartus = $pemain->inventory_kartu->all();
        // Ke halaman view
        return view('pemain.sell', [
            "inventoryKartus" => $inventoryKartus
        ]);
    }

    //Method mengambil semua post permainan dan mengarah ke halaman default pemain
    public function getAllPos()
    {
        return view('pemain.map', [
            "pos" => Penpos::all()
        ]);
    }

    // Beli kartu
    public function buyKartu(Request $request)
    {
        $status = "success";
        $msg = "Berhasil membeli kartu!";
        // Ambil id team yg login
        $pemainId = Auth::user()->teams_id;
        
        // GUARD CHECKING
        if(!$pemainId)
        {
            $status = "error";
            $msg = "Belum login!";
        }
        
        // Ambil team
        $pemain = Team::find($pemainId);
        // GUARD CHECKING
        if(!$pemain)
        {
            $status = "error";
            $msg = "Data Pemain tidak ada! Segera hubungi panitia";
        }

        // Ambil data kartu milik team yg mau dibeli
        $kartuBeli = $pemain->toko_kartu->where('kartus_id', $request['id'])->first();
        dd($kartuBeli);
        // UBAH DATA KARTU
        $kartuBeli->stock = 0;
        // simpan
        $kartuBeli->save();

        // KURANGI KOIN PEMAIN
        $pemain->coin = $pemain->coin - 100;
        // simpan
        $pemain->save();

        // TAMBAHKAN KARTU BELIAN KE INVENTORY
        $pemain->inventory_kartu()->attach($request['id'], [
            'sold' => "Belum",
        ]);

        // Return msg
        return response()->json(array(
            'status' => $status,
            'msg' => $msg,
        ), 200);
    }

    // Jual kartu 
    public function sellKartu(Request $request)
    {
        $status = "success";
        $msg = "Berhasil membeli kartu!";
        // Ambil id team yg login
        $pemainId = Auth::user()->teams_id;
        
        // GUARD CHECKING
        if(!$pemainId)
        {
            $status = "error";
            $msg = "Belum login!";
        }
        
        // Ambil team
        $pemain = Team::find($pemainId);
        // GUARD CHECKING
        if(!$pemain)
        {
            $status = "error";
            $msg = "Data Pemain tidak ada! Segera hubungi panitia";
        }

        // Ambil data kartu milik team yg mau dibeli
        $kartuBeli = $pemain->toko_kartu->where('kartus_id', $request['id'])->first();
        dd($kartuBeli);
        // UBAH DATA KARTU
        $kartuBeli->stock = 0;
        // simpan
        $kartuBeli->save();

        // KURANGI KOIN PEMAIN
        $pemain->coin = $pemain->coin - 100;
        // simpan
        $pemain->save();

        // TAMBAHKAN KARTU BELIAN KE INVENTORY
        $pemain->inventory_kartu()->attach($request['id'], [
            'sold' => "Belum",
        ]);

        // Return msg
        return response()->json(array(
            'status' => $status,
            'msg' => $msg,
        ), 200);
    }
}
