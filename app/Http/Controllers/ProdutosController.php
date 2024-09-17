<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use App\Models\Categoria;
use App\Models\Subcategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $produtos = DB::table('produtos')
        // ->join('categorias', 'produtos.categoria_id', '=', 'categorias.id')
        // ->join('subcategorias', 'produtos.subcategoria_id', '=', 'subcategorias.id')
        // ->select('produtos.*', 'categorias.nome_categoria', 'subcategorias.nome_subcategoria')
        // ->get();

        $produtos = Produtos::join('categorias', 'produtos.categoria_id', '=', 'categorias.id')
        ->join('subcategorias', 'produtos.subcategoria_id', '=', 'subcategorias.id')
        ->select('produtos.*', 'categorias.nome_categoria', 'subcategorias.nome_subcategoria')
        ->get(); 

        $categoria = Categoria::all();
        $subcategoria = [];

        if(isset($_GET['categoriaId'])) {
            $subcategoria = Subcategoria::where('categoria_id', '=', $_GET['categoriaId'])
            ->get(); 
        }

        // print_r($produtos);
        // dd($produtos);
        // return view('admin.dash-produtos',
        //  ['produtos' => $produtos],['categoria' => $categoria], ['subcategoria' => $subcategoria] );
        return view('admin.dash-produtos', [
            'produtos' => $produtos,
            'categoria' => $categoria,
            'subcategoria' => $subcategoria
        ]);
        
    }
    // public function SalvarSubcategoriaModal(Request $request)
    // {
    //     $validacao = $request->validate([
    //         "nome_subcategoria"=>["required","string"],
    //         "categoria_id"=>["required"]         
    //     ]);

    //     Subcategoria::create($validacao);
        
    //     return redirect(route('Produtos.index'))->with('sucesso', 'SubCategoria Cadastrada com sucesso!');
   
        
    // }

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
        // dd("Chegou aqui");

        if(isset($request->all()['check'])){
            $produtoAtivo = true;
        }else{
            $produtoAtivo = false;
        }
        
        $request->all()['preco'] = number_format($request->all()['preco'], 2);
        // dd("Chegou aqui 2");
        $validacao = $request->validate([
            "categoria_id"=>["required"],
            "subcategoria_id"=>["required"],    
            "nome_produto"=>["required","string"],
            "preco"=>["required"],
            "imagem"=>["required","extensions:jpg,png"],           
        ]);

        // dd("Chegou aqui 3");

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
        $produtos = Produtos::findOrFail($id);
        $produtos->delete();
        return redirect()->route('Produtos.index')
        ->with('deleted-success', 'Categoria deleteda com successo');
    }
}
