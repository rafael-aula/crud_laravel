<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

Route::get('/', [ProdutosController::class,'create']);
Route::get('/{id}', [ProdutosController::class,'show']);
Route::post('/', [ProdutosController::class,'store'])->name('registrar_produto');
