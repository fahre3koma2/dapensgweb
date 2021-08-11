<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\webprofil\HomeController as ProfilHomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AkutansiController;
use App\Http\Controllers\TataKelolaController;
use App\Http\Controllers\KearsipanController;
use App\Http\Controllers\KepesertaanController;
use App\Http\Controllers\HukumController;
use App\Http\Controllers\InventasiController;

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
    return view('webprofil.index');
});

Route::get('/about', [ProfilHomeController::class, 'about'])->name('about');
Route::get('/manajemen', [ProfilHomeController::class, 'manajemen'])->name('manajemen');
Route::get('/penghargaan', [ProfilHomeController::class, 'penghargaan'])->name('penghargaan');
Route::get('/struktur', [ProfilHomeController::class, 'struktur'])->name('struktur');
Route::get('/kontak', [ProfilHomeController::class, 'kontak'])->name('kontak');


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('/user', UserController::class);
    Route::resource('/akutansi', AkutansiController::class);
    Route::resource('/inventasi', InventasiController::class);
    Route::resource('/kepesertaan', KepesertaanController::class);
    Route::resource('/kearsipan', KearsipanController::class);
    Route::resource('/tatakelola', TataKelolaController::class);
    Route::resource('/hukum', HukumController::class);
});
