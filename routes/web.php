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
        Route::get('/HomePage', [TeamController::class, 'index'])->name('HomePage');
        // Halaman Buy
        Route::get('/buy', [TeamController::class, 'gotoBuy'])->name('buymenu');
        // Halaman Sell
        Route::get('/sell', [TeamController::class, 'gotoSell'])->name('sellmenu');
        // function buat dap
        Route::post('/penposDetail', [TeamController::class, 'getPenposDetail'])->name('penposDetail');
        // Beli Kartu
        Route::post('/buycard', [TeamController::class, 'buyKartu'])->name('buycard');
        // Jual Kartu
        Route::post('/sellcard', [TeamController::class, 'sellKartu'])->name('sellcard');
        // History Pemain
        Route::get('/historypemain', [TeamController::class, 'history'])->name('historypemain');
    }
);

Route::group(
    //panggilnya penpos/HomePenpos etc
    ['prefix' => 'penpos', 'as' => 'penpos.', 'middleware' => 'role:penpos'],
    function () {
        // Halaman default penpos
        Route::get('/HomePenpos', [PenposController::class, 'index'])->name("HomePenpos");
        // Function insert hasil game
        Route::post('/insertHasilGame', [PenposController::class, 'insertHasilGame'])->name("insertHasil");
        // Function untuk ubah status pos permainan
        Route::post('/UpdateStatus', [PenposController::class, 'updateStatusPos'])->name('PenposUpdate');
        
        // Halaman history masing masing pos 
        Route::get('/historybattle', [PenposTeamController::class, 'index'])->name('historybattle');
        
        //Buat ngetes halaman clue.blade.php (udh selesai boleh diganti)
        Route::view('/clue', 'penpos.clue')->name("clue");
        // Function buat dapetin kartu dari pemain yang dipilih
        Route::post('/getTeamKartu', [PenposController::class, 'getTeamInventory'])->name('getTeamKartu');
        // Function buat cek kombinasi
        Route::post('/checkKombinasi', [PenposController::class, 'checkCombination'])->name('checkKombinasi');
    }
);

Route::view('/posbattle2', 'penpos/index2');