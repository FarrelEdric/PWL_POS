<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use App\Models\User;
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
Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index'])->name('index');
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::get('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('ubah_simpan');
Route::post('/user/hapus/{id}', [UserController::class, 'hapus'])->name('hapus');

Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/update/{id}', [KategoriController::class, 'ubah'])->name('update_kategori');
Route::put('/kategori/update', [KategoriController::class, 'ubah_simpan']);
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('delete_kategori');
Route::resource('m_user',POSController::class);