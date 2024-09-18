<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategoria;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;

class SubCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategoria = DB::table('subcategorias')
        ->join('categorias', 'subcategorias.categoria_id', '=', 'categorias.id')
        ->select('categorias.nome_categoria', 'subcategorias.nome_subcategoria', 'subcategorias.id')
        ->get();

        $categorias = Categoria::all();

        return view("admin.dash-subcategorias", ['subcategoria' => $subcategoria, 'categorias' => $categorias]);
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
            "nome_subcategoria"=>["required","string"],
            "categoria_id"=>["required"]         
        ]);

        Subcategoria::create($validacao);
        
        return redirect(route('SubCategoria.index'))->with('sucesso', 'SubCategoria Cadastrada com sucesso!');
    }

    public function storeSubCategoriaProduto(Request $request)
    {
        $validacao = $request->validate([
            "nome_subcategoria"=>["required","string"],
            "categoria_id"=>["required"]         
        ]);

        Subcategoria::create($validacao);
        
        return redirect(route('Produtos.index'))->with('sucesso', 'SubCategoria Cadastrada com sucesso!');
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
        $validacao = $request->all();
        
        Subcategoria::where('id',  $validacao["id"])->update([
            "nome_subcategoria"=>  $validacao['nome_subcategoria'],
            "categoria_id"=> $validacao['categoria_id']

        ]);

        return redirect()->route('SubCategoria.index')->with('save-success', 'Subcategoria atualizada com sucesso!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subcategoria = Subcategoria::findOrFail($id);
        $subcategoria->delete();
        return redirect()->route('SubCategoria.index')
        ->with('deleted-success', 'SubCategoria deleteda com successo');
    }
}
