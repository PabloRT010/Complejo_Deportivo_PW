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

Route::get('/','App\Http\Controllers\Inicio_Controller@index')->name('inicio');
Route::get('/acceso','App\Http\Controllers\Inicio_Controller@acceso')->name('login');
Route::get('/registro','App\Http\Controllers\Inicio_Controller@registro')->name('registro');
Route::get('/cliente','App\Http\Controllers\Inicio_Controller@cliente')->name('cliente');
Route::get('/mantenedor','App\Http\Controllers\Inicio_Controller@mantenedor')->name('mantenedor');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
