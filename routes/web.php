<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\BebidasController;
use Illuminate\Support\Facades\Route;

//Chamar o metodo index de controller home  ///leva ate a home
Route::get('/{id?}', [HomeController::class, 'index'])->where('id', '[0-9]+');
Route::post('/', [HomeController::class, 'index']);

Route::get('/carrinho', [CarrinhoController::class, 'index']);

// Route::get('/events/{id}', [EventsController::class, 'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
