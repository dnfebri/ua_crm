<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\FilekaryawanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PageController;
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

Route::get('/welcome', function () {
   return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {

   Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');

   Route::prefix('club')->name('club.')->group(function () {
      Route::get('', [ClubController::class, 'index'])->name('index');
      Route::get('/create', [ClubController::class, 'create'])->name('create');
      // Route::get('/{club}', [ClubController::class, 'show'])->name('show');
      Route::get('/{club}', [ClubController::class, 'edit'])->name('show');
      Route::post('', [ClubController::class, 'store'])->name('store');
      Route::put('/{club}', [ClubController::class, 'update'])->name('update');
      Route::delete('/{club}/delete', [ClubController::class, 'destroy'])->name('delete');
   });

   Route::prefix('divisi')->name('divisi.')->group(function () {
      Route::get('', [DivisiController::class, 'index'])->name('index');
      // Route::get('/create', [DivisiController::class, 'create'])->name('create');
      // Route::get('/{divisi}', [DivisiController::class, 'show'])->name('show');
      // Route::get('/{divisi}/edit', [DivisiController::class, 'edit'])->name('edit');
      Route::post('', [DivisiController::class, 'store'])->name('store');
      // Route::put('/{divisi}', [DivisiController::class, 'update'])->name('update');
      Route::delete('/{divisi}/delete', [DivisiController::class, 'destroy'])->name('delete');
   });

   Route::prefix('jabatan')->name('jabatan.')->group(function () {
      Route::get('', [JabatanController::class, 'index'])->name('index');
      // Route::get('/create', [JabatanController::class, 'create'])->name('create');
      // Route::get('/{jabatan}', [JabatanController::class, 'show'])->name('show');
      // Route::get('/{jabatan}/edit', [JabatanController::class, 'edit'])->name('edit');
      Route::post('', [JabatanController::class, 'store'])->name('store');
      // Route::put('/{jabatan}', [JabatanController::class, 'update'])->name('update');
      Route::delete('/{jabatan}/delete', [JabatanController::class, 'destroy'])->name('delete');
   });

   Route::prefix('filekaryawan')->name('filekaryawan.')->group(function () {
      Route::get('', function () {
         return redirect()->route('karyawan.index');
      });
      Route::get('{filekaryawan}', [FilekaryawanController::class, 'create'])->name('create');
      Route::post('/store', [FilekaryawanController::class, 'store'])->name('store');
      Route::get('{filekaryawan}/edit', [FilekaryawanController::class, 'edit'])->name('edit');

      // Proses Update akan dibuat menimpa file yang lama dan nama data di database tidak berubah
      Route::put('/{filekaryawan}', [FilekaryawanController::class, 'update'])->name('update');
   });

   Route::resource('karyawan', KaryawanController::class);
});
