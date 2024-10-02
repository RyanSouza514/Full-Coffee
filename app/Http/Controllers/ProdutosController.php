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
            ->orderBy('produtos.id')
            ->get();

        $categoria = Categoria::all();
        $subcategoriaModalEditar = Subcategoria::all();
        $subcategoria = [];

        if (isset($_GET['categoriaId'])) {
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
            'subcategoria' => $subcategoria,
            'subcategoriaModalEditar' => $subcategoriaModalEditar
        ]);

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
        // if(isset($request->all()['check'])){
        //     $produtoAtivo = true;
        // }else{
        //     $produtoAtivo = false;
        // }

        $request->all()['preco'] = number_format($request->all()['preco'], 2);

        $validacao = $request->validate([
            "categoria_id" => ["required"],
            "subcategoria_id" => ["required"],
            "nome_produto" => ["required", "string"],
            "preco" => ["required"],
            "imagem" => ["extensions:jpg,png,jpeg"],
            "descricao" => ["string"],
            "observacao" => ["string"]
        ]);

        $validacao['imagem'] = $this->uploadImagem($request);

        $validacao['check'] = $this->validarCheck($request['check']);

        Produtos::create($validacao);

        return redirect(route('Produtos.index'))->with('save-success', 'Produto Cadastro com sucesso!');

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
        // print_r($request->all()); die();

        $validacao = $request->all();

        $validacao['check'] = $this->validarCheck($request['check']);

        $imagem = $this->uploadImagem($request);

        $dados = [
            "categoria_id" => $validacao['categoria_id'],
            "subcategoria_id" => $validacao['subcategoria_id'],
            "nome_produto" => $validacao['nome_produto'],
            "preco" => $validacao['preco'],
            // "imagem"=> $validacao['imagem'],
            "check" => $validacao['check'],
            "descricao" => $validacao['descricao'],
            "observacao" => $validacao['observacao']
        ];

        if ($imagem) {
            $dados['imagem'] = $imagem;
        }
        Produtos::where('id', $validacao["id"])->update($dados);

        return redirect()->route('Produtos.index')->with('save-success', 'Produto atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produtos = Produtos::findOrFail($id);

        // Verifica se o produto possui uma imagem e se o arquivo existe no sistema
        if ($produtos->imagem != 'img-default.png' && file_exists(public_path('img/cardapio/' . $produtos->imagem))) {
            // Deleta o arquivo de imagem
            unlink(public_path('img/cardapio/' . $produtos->imagem));
        }

        $produtos->delete();
        return redirect()->route('Produtos.index')
            ->with('deleted-success', 'Categoria deleteda com successo');
    }

    public function validarCheck($ativo)
    {

        if (isset($ativo)) {
            $produtoAtivo = true;
        } else {
            $produtoAtivo = false;
        }
        return $produtoAtivo;
    }

    private function uploadImagem($request)
    {

        $imagem = null;

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImagem = $request['imagem'];
            $resquestImageName = $requestImagem->getClientOriginalName();
            $requestImageExtension = $requestImagem->extension();

            $newImageName = md5(uniqid() . $resquestImageName) . '.' . $requestImageExtension;

            $requestImagem->move(public_path('img/cardapio/'), $newImageName);

            $imagem = $newImageName;
        }   
        return $imagem;
    }
}
