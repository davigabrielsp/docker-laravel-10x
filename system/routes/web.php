<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ContaController;

Route::get('/', function(){
    return view('welcome');
});


Route::prefix('/conta')->group(function(){
    Route::get('/lista', [ContaController::class, 'index'])->name('conta.index');
    Route::get('/create', [ContaController::class, 'create'])->name('conta.create');
    Route::post('/store', [ContaController::class, 'store'])->name('conta.store');
    Route::get('/show/{id}', [ContaController::class, 'show'])->name('conta.show');
    Route::get('/edit/{id}', [ContaController::class, 'edit'])->name('conta.edit');
    Route::put('/update/{id}', [ContaController::class, 'update'])->name('conta.update');
    Route::delete('/destroy/{id}', [ContaController::class, 'destroy'])->name('conta.destroy');    
});



