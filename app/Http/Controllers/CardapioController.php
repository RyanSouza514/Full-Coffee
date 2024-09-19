<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;
use App\Models\Categoria;
use App\Models\Subcategoria;

class CardapioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria = Categoria::all();
        $subcategoria = Subcategoria::all();
        $itensCardapio = Produtos::all();
        
        if (isset($_GET['categoriaId'])) {
            $subcategoria = Subcategoria::where('categoria_id', '=', $_GET['categoriaId'])
                ->get();
        }

        if (isset($_GET['SubcategoriaId'])) {
            $itensCardapio = Produtos::where('subcategoria_id', '=', $_GET['SubcategoriaId'])
                ->get();
        }
        
        return view('home.cardapio', [
            'itensCardapio' => $itensCardapio,
            'categoria' => $categoria,
            'subcategoria' => $subcategoria
        ]);
    }

}
