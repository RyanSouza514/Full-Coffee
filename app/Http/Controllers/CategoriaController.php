<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria; 

class CategoriaController extends Controller{
   
    public function index()
    {
        $categorias = Categoria::all();
        return view('admin.dash-categorias', ['categorias' => $categorias]);
    }

    public function create()
    {
        // return view('dashboard'); // same view as index, but with an empty form
    }

    public function store(Request $request)
    {
        $validacao = $request->validate([
            "nome_categoria"=>["required","string"]     
        ]);

        Categoria::create($validacao);
        
        return redirect()->route('Categorias.index')->with('save-success', 'Categoria cadastrada com sucesso!');
    }
    public function storeCategoriaProduto(Request $request)
    {
        $validacao = $request->validate([
            "nome_categoria"=>["required","string"]     
        ]);

        Categoria::create($validacao);
        
        return redirect()->route('Produtos.index')->with('save-success', 'Categoria cadastrada com sucesso!');
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cat = Categoria::findOrFail($id);       
        return view('Categorias.edit' ,["cat" => $cat]);
    }

    public function update(Request $request, $id)
    {
        $validacao = $request->all();
        
        Categoria::where('id',  $validacao["id"])->update([
            "nome_categoria"=>  $validacao['nome_categoria']
        ]);

        return redirect()->route('Categorias.index')->with('save-success', 'Categoria atualizada com sucesso!');
    }

    
    public function destroy($id)
    {
        // echo "<script>alert('Deseja excluir a postagem?);</script>";

        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return redirect()->route('Categorias.index')
        ->with('deleted-success', 'Categoria deleteda com successo');

        
    }
}
