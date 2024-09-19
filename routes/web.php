<?php

use App\Http\Controllers\CardapioController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\SubCategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\indexController;
use GuzzleHttp\Middleware;
use PHPUnit\Framework\Attributes\Group;

Route::get('/', [indexController::class, 'index']);


// Route::get('/dash/categoria', [CategoriaController::class, 'index'])->name('dash.categoria');
// Route::post('/dash/categoria/store', [CategoriaController::class, 'store'])->name('dash.categoriaStore');

//ROTAS INDEX
Route::resource('/home', indexController::class);

//ROTAS CARDÁPIO
Route::get('/cardapio', [CardapioController::class, 'index'])->name('cardapio.index');




// ------------ CONFIG ROTAS TELA ADMINISTRADOR - SISTEMA FULL COFFEE ------------

// ROTAS TELA DE LOGIN
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginUser'])->name('login.loginUser');
Route::get('/logout', [UserController::class, 'deslogar'])->name("deslogar");



Route::group(['middleware' => ['auth']], function () {

    Route::get('/Dashbord', [DashbordController::class, 'index'])->name('dashbord.index');

    Route::resource('/Dashbord/Mensagem', MensagemController::class);

    //ROTAS TELA DE PRODUTOS
    Route::resource('/Dashbord/Produtos', ProdutosController::class);
    Route::post('/Categoria/Criar', [CategoriaController::class, 'storeCategoriaProduto'])->name('CriarCategoriaProduto');
    Route::post('/SubCategoria/Criar', [SubCategoriaController::class, 'storeSubCategoriaProduto'])->name('CriarSubCategoriaProduto');
    Route::put('/Dashbord/Produtos/edit', [ProdutosController::class, 'update'])->name('Produtos.update');

    //ROTAS TELA DE SUBCATEGORIA
    Route::resource('/Dashbord/SubCategoria', SubCategoriaController::class);
    Route::put('/Dashbord/SubCategoria/edit', [SubCategoriaController::class, 'update'])->name('SubCategoria.update');

    //ROTAS TELA DE SUBCATEGORIA
    Route::resource('/Dashbord/Categorias', CategoriaController::class);
    Route::put('/Dashbord/Categorias/edit', [CategoriaController::class, 'update'])->name('Categorias.update');

    // ROTAS CADASTRO DE USUARIO SISTEMA
    Route::get('/Dashbord/Usuario', [UserController::class, 'index'])->name('Usuario.index');
    Route::post('/Dashbord/Usuario', [UserController::class, 'cadastrarUsuario'])->name('Usuario.cadastrarUsuario');
});
