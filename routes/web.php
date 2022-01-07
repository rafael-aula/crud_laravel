<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;




//Rotas de criação
Route::get('/produtos/novo', [ProdutosController::class,'create'])->name('principal');
Route::post('/produtos/novo', [ProdutosController::class,'store'])->name('registrar_produto');



//Rotas de vizualização
Route::get('/produto/ver', [ProdutosController::class,'index'])->name('lista');



//Rotas de edição
Route::get('/produto/editar/{id}',[ProdutosController::class,'edit']);
Route::post('/produto/editar/{id}', [ProdutosController::class,'update'])->name('alterar_produto');



//Rotas de exclução
Route::get('/produto/excluir/{id}',[ProdutosController::class,'delete']);
Route::post('/produto/excluir/{id}',[ProdutosController::class,'destroy'])->name('excluir_produto');