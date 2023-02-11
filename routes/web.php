<?php

use App\Http\Controllers\PenposController;
use App\Http\Controllers\PenposTeamController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/HomePenpos', [PenposController::class, 'index'])->name("HomePenpos");
Route::post('/insertHasilGame', [PenposController::class, 'insertHasilGame'])->name("insertHasil");

//Menampilkan semua pos permainan
Route::get('/HomePage', [PenposController::class, 'getAllPos']);

//Mengedit status pos permainan
Route::post('/UpdateStatus', [PenposController::class, 'updateStatusPos'])->name('PenposUpdate');

//Untuk testing front-end (sudah selesai silahkan diubah jika perlu)
Route::view('/posbattle', 'posbattle.index')->name("posbattle");
Route::view('/map', 'map.index')->name("map");

//Menampilkan history battle 
Route::get('/historybattle', [PenposTeamController::class, 'index'])->name('historybattle');

// Route::view('/historybattle', 'posbattle.history')->name("historybattle");
Auth::routes();

Route::get('/home', [App\Http\Controllers\LoginController::class, 'index'])->name('home');

Route::view('/singlepos', 'SinglePos.single')->name("singlepos");
Route::view('/posjasa', 'SinglePos.posjasa')->name("posjasa");
