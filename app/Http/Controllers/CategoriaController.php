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


    public function show($id)
    {
        // $categorias = Categoria::find($id);
        // return view('dashboard', compact('categoria'));
    }

    public function edit($id)
    {
        // $categorias = Categoria::find($id);
        // return view('dashboard', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'categoria' => 'required|string|max:255',
        // ]);

        // $categoria = Categoria::find($id);
        // $categoria->name = $request->input('categoria');
        // $categoria->save();

        // return redirect()->route('dash.categoriaStore')->with('success', 'Categoria atualizada com sucesso!');
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
