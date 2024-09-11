<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $produtos = Produtos::all();
        return view('admin.dash-produtos');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validacao = $request->validate([
            // "categoria_id"=>["required"],
            // "subcategoria_id"=>["required"],
            "nome_produto"=>["required","string"],
            "preco"=>["required"]
            // "imagem"=>["required","extensions:jpg,png"],
            // "check"=>["required"]
        ]);
        // dd($validacao);
        Produtos::create($validacao);
        
        return view('admin.dash-produtos')->with('Produto Cadastro com sucesso!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
