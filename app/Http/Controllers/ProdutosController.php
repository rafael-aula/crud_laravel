<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
 
    public function index()
    {
        //
    }


    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        Produto::create([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);

        return "Produto Criado com Sucesso!";
    }

 
    public function show($id)
    {
        $produto = Produto::findOrfail($id);
        return view('produtos.show', ['produto' => $produto]); 
    }

 
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
