<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategoria;
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

        return view("admin.dash-subcategorias", ['subcategoria' => $subcategoria]);
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
        
        return redirect(route('SubCategoria.index'))->with('sucesso', 'SubCategoria Cadastro com sucesso!');
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
