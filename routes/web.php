<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::get('/user', [App\Http\Controllers\UserController::class, 'user'])->name('user.user');
Route::get('/user/cari', [App\Http\Controllers\UserController::class, 'cari'])->name('user.cari');
Route::get('/user/tambah', [App\Http\Controllers\UserController::class, 'tambah'])->name('user.tambah');
Route::post('/user/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
Route::get('/user/hapus/{id}', [App\Http\Controllers\UserController::class, 'hapus'])->name('user.hapus');
