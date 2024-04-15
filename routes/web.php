<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatematicaController;
use App\Http\Controllers\CienciasnaturaleController;
use App\Http\Controllers\CienciassocialeController;
use App\Http\Controllers\EspanolController;
use App\Http\Controllers\IngleController;
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
    return view('homepage');
});

Route::resource('/matematica','App\Http\Controllers\MatematicaController');
Route::resource('/ingle','App\Http\Controllers\IngleController');
Route::resource('/espanol','App\Http\Controllers\EspanolController');
Route::resource('/cienciassociale','App\Http\Controllers\CienciassocialeController');
Route::resource('/cienciasnaturale','App\Http\Controllers\CienciasnaturaleController');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
