<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
 
    public function index()
    {
        $produtos = Produto::all();

        return view('produtos.show', [
            'produtos' => $produtos,
        ]);
        
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

        return view('produtos.create');
    }

 
    /*public function show($id)
    {
        $produto = Produto::findOrfail($id);
        return view('produtos.show', ['produto' => $produto]); 
    }*/

 
    public function edit($id)
    {
        $produto = Produto::findOrfail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }

  
    public function update(Request $request, $id)
    {
        $produto = Produto::findOrfail($id);

        $produto->update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
        return redirect('/produto/ver');
    }

  
    /*public function delete($id)
    {
        $produto = Produto::findOrfail($id);
        return view ('produtos.delete', ['produto' => $produto]);
    }*/


    public function destroy($id)
    {
        Produto::findOrfail($id)->delete();

        return redirect('/produto/ver')->with('msg', 'Produto excluido com sucesso!');
    }



}
