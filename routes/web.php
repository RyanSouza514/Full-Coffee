<?php

use App\Http\Controllers\CardapioController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DashContatosController;
use App\Http\Controllers\DashMensagens;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\SubCategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\indexController;

// Route::get('/', function () {
//     return view('home.index');

// });


Route::get('/dash/categoria', [CategoriaController::class, 'index'])->name('dash.categoria');
Route::post('/dash/categoria/store', [CategoriaController::class, 'store'])->name('dash.categoriaStore');

//ROTAS INDEX
Route::resource('/home', indexController::class);

//ROTAS CARDÁPIO
Route::resource('/cardapio', CardapioController::class);


//ROTAS TELA DE PRODUTOS
Route::resource('/Dashbord/Produtos', ProdutosController::class);

//ROTAS TELA DE SUBCATEGORIA
Route::resource('/Dashbord/SubCategoria', SubCategoriaController::class);



Route::post('/contato',[ContatoController::class, "contatoPost"])->name('contato');
Route::post('/contato',[ContatoController::class, "contatoPost"])->name('contato');


//Rotas Cardápio//
Route::get('/Cardapio', function () {
    return view('home.cardapio');
});
