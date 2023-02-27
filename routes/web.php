<?php

use App\Http\Controllers\ProfilLulusanController;
use App\Http\Controllers\UserController;
use App\Models\ProfilLulusan;
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
    return view('main.home', [
        'title' => "Home",
    ]);
})->name('home');

Route::get('/admin/profil_lulusan', [ProfilLulusanController::class, 'index']);

Route::get('/login', [UserController::class, 'index'])->middleware('guest');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::get('logout', [UserController::class, 'logout']);

Route::post('store-user', [UserController::class, 'store']);

Route::post('login', [UserController::class, 'login']);

Route::post('profil-lulusan', [ProfilLulusanController::class, 'store']);

Route::delete('profil-lulusan/{profil_lulusan:kode_pl}', [ProfilLulusanController::class, 'destroy']);
