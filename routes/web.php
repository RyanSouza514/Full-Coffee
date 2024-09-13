<?php


use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DashContatosController;
use App\Http\Controllers\DashMensagens;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\SubCategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UserController;

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


Route::get('/login', [UserController::class, 'login'])->name('login.login');
Route::post('/login', [UserController::class, 'loginUser'])->name('login.loginUser');

Route::get('/login/cadastro', [UserController::class, 'index'])->name('login.index');
Route::post('/login/cadastro', [UserController::class, 'cadastrarUsuario'])->name('login.cadastrarUsuario');