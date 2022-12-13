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
    return view('index');
})->name('index');

Route::post('/cifra/sete' , [\App\Http\Controllers\AlphabetController::class, 'cifraCezar7'])->name('cifra-7');
Route::get('/cifra/sete/form', [\App\Http\Controllers\AlphabetController::class, 'cifraCezar7View'])->name('cifra-7-form');
Route::get('/quebrando/cifra', [\App\Http\Controllers\AlphabetController::class, 'quebrandoCifraView'])->name('quebrando-cifra-form');
Route::post('/quebrando/cifra/tentativa', [\App\Http\Controllers\AlphabetController::class, 'quebrandoCifra'])->name('quebrando-cifra-tentativa');
Route::post('/cifra/mod', [\App\Http\Controllers\AlphabetController::class, 'cifraCesarMod'])->name('cifra-mod');
Route::get('/cifra/mod/form', [\App\Http\Controllers\AlphabetController::class, 'cifraCesarModView'])->name('cifra-mod-form');
