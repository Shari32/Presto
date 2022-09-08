<?php

use App\Http\Controllers\AdController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;

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

// ROTTE PUBLIC
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/category/{category}', [PublicController::class, 'show'])->name('categoryShow');

//ROTTE PER GLI ANNUNCI
Route::get('/ad/create',[AdController::class,'create'])->middleware('auth')->name('ad.create');
Route::get('/ad/show/{ad}', [AdController::class, 'show'])->name('ad.show');
Route::get('/ad/index', [AdController::class,'index'])->name('ad.index');

// ROTTE PER IL REVISORE
// home revisore
Route::get('/revisor/home', [RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');
// accept annuncio
Route::patch('/accetta/ad/{ad}', [RevisorController::class, 'acceptAd'])->middleware('isRevisor')->name('revisor.accept_ad');
// reject annuncio
Route::patch('/rifiuta/ad/{ad}', [RevisorController::class, 'rejectAd'])->middleware('isRevisor')->name('revisor.reject_ad');

// ROTTE PER DIVENTARE REVISORE
// richiesta diventare revisore (solo a un utente loggato)

Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
// rendere utente revisore
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

Route::get('/ricerca/annuncio', [PublicController::class, 'searchAds'])->name('ads.search');

