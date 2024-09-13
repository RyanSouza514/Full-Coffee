<?php


use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DashContatosController;
use App\Http\Controllers\DashMensagens;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('home.index');

});

Route::get('/dash/categoria', [CategoriaController::class, 'index'])->name('dash.categoria');
Route::post('/dash/categoria/store', [CategoriaController::class, 'store'])->name('dash.categoriaStore');




//ROTAS TELA DE PRODUTOS

// Route::get('/Dashbord/Produtos', [ProdutosController::class, 'index']);
Route::resource('/Dashbord/Produtos', ProdutosController::class);

Route::post('/contato',[ContatoController::class, "contatoPost"])->name('contato');


//Rotas Cardápio//
Route::get('cardapio', function () {
    return view('cardapio');
});