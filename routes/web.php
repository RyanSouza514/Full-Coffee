<?php


use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DashContatosController;
use App\Http\Controllers\DashMensagens;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\SubCategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('home.index');

});

Route::get('/dash/categoria', [CategoriaController::class, 'index'])->name('dash.categoria');
Route::post('/dash/categoria/store', [CategoriaController::class, 'store'])->name('dash.categoriaStore');




//ROTAS TELA DE PRODUTOS
Route::resource('/Dashbord/Produtos', ProdutosController::class);

<<<<<<< HEAD
//ROTAS TELA DE SUBCATEGORIA
Route::resource('/Dashbord/SubCategoria', SubCategoriaController::class);



Route::post('/contato',[ContatoController::class, "contatoPost"])->name('contato');
=======
Route::post('/contato',[ContatoController::class, "contatoPost"])->name('contato');
>>>>>>> e9c8de6ea94344211d2e985f208d1e864cfd8185
