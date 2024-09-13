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

//ROTAS TELA DE SUBCATEGORIA
Route::resource('/Dashbord/SubCategoria', SubCategoriaController::class);



Route::post('/contato',[ContatoController::class, "contatoPost"])->name('contato');
Route::post('/contato',[ContatoController::class, "contatoPost"])->name('contato');
<<<<<<< HEAD


//Rotas Cardápio//
Route::get('cardapio', function () {
    return view('cardapio');
});
=======
>>>>>>> ed137ea6e5ea25abac175b35ffb5ce22f2a856a8
