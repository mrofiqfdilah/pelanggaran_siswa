<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DatajenisController;
use App\Http\Controllers\DatakelasController;
use App\Http\Controllers\DatapelanggaranController;
use App\Http\Controllers\DatasiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halaman_masuk', [AuthController::class, 'halaman_masuk'])->name('halaman_masuk');

Route::get('/halaman_daftar', [AuthController::class, 'halaman_daftar'])->name('halaman_daftar');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', [UserController::class, 'home'])->name('home');


// USERS DATA MANAGEMENT
Route::resource('/datasiswa', DatasiswaController::class);

// JENIS DATA MANAGEMENT
Route::resource('/datajenis', DatajenisController::class);

// KELAS DATA MANAGEMENT
Route::resource('/datakelas', DatakelasController::class);

// PELANGGARAN DATA MANAGEMENT
Route::resource('/datapelanggaran', DatapelanggaranController::class);

Route::get('/dashboard',[DatapelanggaranController::class, 'dashboard'])->name('dashboard');
