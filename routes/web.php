<?php

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
use App\Http\Controllers\ProfileController;

Route::get('/profile', [ProfileController::class, 'profile']);

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\UserController;
use App\Http\Controllers\MataKuliahController; // TAMBAHKAN INI

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

// TAMBAHKAN ROUTE UNTUK MATA KULIAH
Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah.index');
Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah', [MataKuliahController::class, 'store'])->name('matakuliah.store');

Route::get('/profile/{nama}/{npm}/{kelas}', [ProfileController::class, 'profile']);
