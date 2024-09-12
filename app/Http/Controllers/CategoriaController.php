<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria; 

class CategoriaController extends Controller{
   
    public function index()
    {
        $categorias = Categoria::all();
        return view('dashboard', compact('categorias'));
    }

    public function create()
    {
        return view('dashboard'); // same view as index, but with an empty form
    }

    public function store(Request $request)
    {
        $request->validate([
            'categoria' => 'required|string|max:255',
        ]);

        $categorias = new Categoria();
        $categorias->name = $request->input('categoria');
        $categorias->save();

        return redirect()->route('dash.categoriaStore')->with('success', 'Categoria criada com sucesso!');
    }


    public function show($id)
    {
        $categorias = Categoria::find($id);
        return view('dashboard', compact('categoria'));
    }

    public function edit($id)
    {
        $categorias = Categoria::find($id);
        return view('dashboard', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'categoria' => 'required|string|max:255',
        ]);

        $categoria = Categoria::find($id);
        $categoria->name = $request->input('categoria');
        $categoria->save();

        return redirect()->route('dash.categoriaStore')->with('success', 'Categoria atualizada com sucesso!');
    }

    
    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect()->route('dash.categoriaStore')->with('success', 'Categoria excluída com sucesso!');
    }
}
