<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ContaController;
Route::get('/', function(){
    return view('welcome');
});

Route::get('/conta', [ContaController::class, 'index'])->name('conta.index');
Route::get('/conta/create', [ContaController::class, 'create'])->name('conta.create');
Route::post('/conta/store', [ContaController::class, 'store'])->name('conta.store');
Route::get('/conta/show', [ContaController::class, 'show'])->name('conta.show');
Route::get('/conta/edit', [ContaController::class, 'edit'])->name('conta.edit');
Route::put('/conta/update', [ContaController::class, 'update'])->name('conta.update');
Route::delete('/conta/destroy', [ContaController::class, 'destroy'])->name('conta.destroy');


