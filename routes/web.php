<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenposController;
use App\Http\Controllers\PenposTeamController;
use App\Http\Controllers\TeamController;
use App\Models\Penpos;
use App\Models\PenposTeam;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// LOGIN AWAL AWAL
Route::get('/', [HomeController::class, 'index'])->name('home');
// MENGGUNAKAN ROUTING MILIK AUTH LARAVEL
Auth::routes();

Route::group(
    //panggilnya pemain/HomePage etc
    ['prefix' => 'pemain', 'as' => 'pemain.', 'middleware' => 'role:pemain'],
    function () {
        // Default page dari pemain HomePage
        Route::get('/HomePage', [TeamController::class, 'getAllPos'])->name('HomePage');
        // Halaman Buy
        Route::get('/buy', [TeamController::class, 'gotoBuy'])->name('buymenu');
        // Halaman Sell
        Route::get('/sell', [TeamController::class, 'gotoSell'])->name('sellmenu');
    }
);

Route::group(
    //panggilnya penpos/HomePenpos etc
    ['prefix' => 'penpos','as' => 'penpos.', 'middleware' => 'role:penpos'],
    function () {
        // Halaman default penpos
        Route::get('/HomePenpos', [PenposController::class, 'index'])->name("HomePenpos");
        // Function insert hasil game
        Route::post('/insertHasilGame', [PenposController::class, 'insertHasilGame'])->name("insertHasil");
        // Function untuk ubah status pos permainan
        Route::post('/UpdateStatus', [PenposController::class, 'updateStatusPos'])->name('PenposUpdate');
        
        // Halaman history masing masing pos 
        Route::get('/historybattle', [PenposTeamController::class, 'index'])->name('historybattle');
    }
);
