<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all(); 
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo'    => 'required|max:30|unique:produtos,codigo',
            'descricao' => 'required|max:60',
        ]);

        Produto::create($request->only('codigo', 'descricao'));
        return redirect()->route('produtos.index');
    }

    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'codigo'    => "required|max:30|unique:produtos,codigo,{$produto->id}",
            'descricao' => 'required|max:60',
        ]);

        $produto->update($request->only('codigo', 'descricao'));
        return redirect()->route('produtos.index');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete(); 
        return redirect()->route('produtos.index');
    }
}
