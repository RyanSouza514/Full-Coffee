<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});



//ROTAS TELA DE PRODUTOS

// Route::get('/Dashbord/Produtos', [ProdutosController::class, 'index']);
Route::resource('/Dashbord/Produtos', ProdutosController::class);

Route::post('/contato',[ContatoController::class, "contatoPost"])->name('contato');

//Rotas Tela Cardapio//
Route::get('/cardapio', function () {
    return view('cardapio');
});