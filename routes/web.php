<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\DivisiController;
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
      // Route::delete('/{divisi}/delete', [DivisiController::class, 'destroy'])->name('delete');
   });
});
