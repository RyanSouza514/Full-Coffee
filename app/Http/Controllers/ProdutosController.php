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
        $produtos = Produtos::all();
        // dd($produtos);
        return view('admin.dash-produtos', ['produtos' => $produtos]);
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

        if(isset($request->all()['check'])){
            $produtoAtivo = true;
        }else{
            $produtoAtivo = false;
        }
        
        $request->all()['preco'] = number_format($request->all()['preco'], 2);
        
        $validacao = $request->validate([
            "categoria_id"=>["required"],
            "subcategoria_id"=>["required"],    
            "nome_produto"=>["required","string"],
            "preco"=>["required"],
            "imagem"=>["required","extensions:jpg,png"],           
        ]);
        
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImagem = $request['imagem'];
            $resquestImageName = $requestImagem->getClientOriginalName();
            $requestImageExtension = $requestImagem->extension();

            $newImageName = md5(uniqid() . $resquestImageName) . '.' . $requestImageExtension;

            $requestImagem->move(public_path('img/cardapio/'), $newImageName);

            $validacao['imagem'] = $newImageName;
        }
        
        $validacao['check'] = $produtoAtivo;

        Produtos::create($validacao);
        
        return redirect(route('Produtos.index'))->with('sucesso', 'Produto Cadastro com sucesso!');
        
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
