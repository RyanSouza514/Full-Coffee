<?php

use App\Http\Controllers\CardapioController;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\SubCategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\indexController;

// Route::get('/', function () {
//     return view('home.index');

// });


// Route::get('/dash/categoria', [CategoriaController::class, 'index'])->name('dash.categoria');
// Route::post('/dash/categoria/store', [CategoriaController::class, 'store'])->name('dash.categoriaStore');

//ROTAS INDEX
Route::resource('/home', indexController::class);

//ROTAS CARDÁPIO
Route::resource('/cardapio', CardapioController::class);




// ------------ CONFIG ROTAS TELA ADMINISTRADOR - SISTEMA FULL COFFEE ------------

// ROTAS TELA DE LOGIN
Route::get('/login', [UserController::class, 'login'])->name('login.login');
Route::post('/login', [UserController::class, 'loginUser'])->name('login.loginUser');

//ROTAS TELA DE MENSAGEM
Route::resource('/Dashbord/Mensagem', MensagemController::class);

//ROTAS TELA DE PRODUTOS
Route::resource('/Dashbord/Produtos', ProdutosController::class);
Route::post('/Categoria/Criar', [CategoriaController::class,'storeCategoriaProduto'])->name('CriarCategoriaProduto');
Route::post('/SubCategoria/Criar', [SubCategoriaController::class,'storeSubCategoriaProduto'])->name('CriarSubCategoriaProduto');

//ROTAS TELA DE SUBCATEGORIA
Route::resource('/Dashbord/SubCategoria', SubCategoriaController::class);

//ROTAS TELA DE SUBCATEGORIA
Route::resource('/Dashbord/Categorias', CategoriaController::class);

// ROTAS CADASTRO DE USUARIO SISTEMA
Route::get('/Dashbord/Usuario', [UserController::class, 'index'])->name('Usuario.index');
Route::post('/Dashbord/Usuario', [UserController::class, 'cadastrarUsuario'])->name('Usuario.cadastrarUsuario');


// Route::post('/contato',[ContatoController::class, "contatoPost"])->name('contato');
// Route::post('/contato',[ContatoController::class, "contatoPost"])->name('contato');


//Rotas Cardápio//
Route::get('/Cardapio', function () {
    return view('home.cardapio');
});


