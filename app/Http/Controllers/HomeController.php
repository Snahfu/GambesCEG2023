<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user() != null) {
            if (Auth::user()->role == 'pemain') {
                return redirect()->route('pemain.HomePage');
            } else if (Auth::user()->role == 'penpos' || Auth::user()->role == 'si') {
                return redirect()->route('penpos.HomePenpos');
            }
        } else {
            return view('auth.login');
        }
    }
}
