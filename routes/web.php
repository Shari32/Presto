<?php

use App\Http\Controllers\AdController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/category/{category}', [PublicController::class, 'show'])->name('categoryShow');
//ROTTA CON FORM PER AGGIUNGERE UN ANNUNCIO 

Route::get('/ad/create',[AdController::class,'create'])->middleware('auth')->name('ad.create');
Route::get('/ad/show/{ad}', [AdController::class, 'show'])->name('ad.show');
