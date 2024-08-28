<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashbord - Adminstrador</title>
    <link rel="icon" href="../assets/icons/icon-dashboard.png" type="image/icon type">

    <!--ESTILIZAÇÃO BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!--iCONS BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!--ESTILIZAÇÃO PERSONALIZADA-->
    <link rel="stylesheet" href="../assets/CSS/dashbord.css">
    <link rel="stylesheet" href="../assets/CSS/generic/normalize.css">
    
    <style>
                    /* Esconde o input */
            /* input[type='file'] {
            display: none
            } */

            /* Aparência que terá o seletor de arquivo */
            /* label.teste1{
            background-color: #3498db;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            margin: 10px;
            padding: 6px 20px
} */



    </style>

</head>

<body>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark bg-menu-nav">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Painel de Controle</span>
                    </a>
    
                    <!-- INCIO DA LISTA / HOME -->
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="dashbord.html" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i><span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
    
                        <li>
                            <a href="dash-mensagem.html" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dash</span> 
                                <span class="d-none d-sm-inline d-md-none d-lg-inline">de</span>
                                <span class="d-none d-sm-inline d-md-none d-lg-inline d-xl-inline">Mensagens</span>
                            </a>
                        </li>
    
                        <li class="text-center text-sm-start">
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-sm-0 align-middle">
                                <i class="fs-4 bi-plus-circle-fill"></i>
                                <span class="ms-1 d-none d-sm-inline">Cadastrar</span>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="cadastro-produtos.html" class="nav-link px-0">
                                        <span class="d-none d-sm-inline">Produtos</span>
                                        <span class="d-inline d-sm-none">Prod</span>
                                    </a>
                                </li>
                                <li class="w-100">
                                    <a href="dash-categorias.html" class="nav-link px-0"> 
                                        <span class="d-none d-sm-inline">Categorias</span>
                                        <span class="d-inline d-sm-none">Cat</span>
                                    </a>
                                </li>
                                <li class="w-100">
                                    <a href="dash-subcategorias.html" class="nav-link px-0">
                                        <span class="d-none d-sm-inline">Sub Categorias</span>
                                        <span class="d-inline d-sm-none">Sub C</span>
                                    </a>
                                </li>
                                <li class="w-100">
                                    <a href="dash-usuario.html" class="nav-link px-0">
                                        <span class="d-none d-sm-inline">Usuarios</span>
                                        <span class="d-inline d-sm-none">User</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
    
                        <li class="text-center text-sm-start">
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-sm-0 align-middle ">
                                <i class="fs-4 bi-clipboard-data"></i>
                                <span class="ms-1 d-none d-sm-inline">Dados</span>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0">
                                        <span class="d-none d-sm-inline">Item</span> 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0">
                                        <span class="d-none d-sm-inline">Item</span> 2</a>
                                </li>
                            </ul>
                        </li>
    
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                              <i class="fs-4 bi-newspaper"></i> <span class="ms-1 d-none d-sm-inline">Relatórios</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                </li>
                            </ul>
                        </li>
    
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                    </ul>

                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../assets/icons/icon-admin.png" alt="hugenerd" width="25" height="25" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Administrador</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">Novo Projeto</a></li>
                            <li><a class="dropdown-item" href="#">Configurações</a></li>
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col gradient-personalizado">
    
                <!-- --- Inicio conteudo -->
                <div class="container mt-3">
                    <div class="row justify-content-center">
                        <div class="col-md-11" >
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4>Cadastro de Produtos</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-2">
                                            <label for="" class="form-label fw-medium">Selecione a Categoria</label>
                                            <div class="input-group">
                                                <select class="form-select">
                                                    <option selected>Selecione uma opção</option>
                                                    <option value="a">Café</option>
                                                    <option value="b">Bebidas</option>
                                                    <option value="c">Lanches Naturais</option>
                                                    <option value="d">Doces</option>
                                                </select>
                                                <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#categoria-modal">
                                                    <i class="bi bi-plus-circle" title="Adicionar nova SubCategoria">
                                                        <span class="d-none d-lg-inline">Nova</span>
                                                        <span class="d-none d-sm-inline d-md-none">Cat</span>
                                                        <span class="d-none d-md-inline">Categoria</span> 
                                                    </i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label fw-medium">Selecione a SubCategoria</label>
                                            <div class="input-group">
                                                <select class="form-select">
                                                    <option selected>Selecione uma opção</option>
                                                    <option value="a">Natural</option>
                                                    <option value="b">Expresso</option>
                                                    <option value="c">Polpas</option>
                                                    <option value="d">Suco da Fruta</option>
                                                </select>
                                                <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#subCategoria-modal">
                                                    <i class="bi bi-plus-circle" title="Adicionar nova SubCategoria">
                                                        <span class="d-none d-lg-inline">Nova</span>
                                                        <span class="d-none d-sm-inline">Sub</span>
                                                        <span class="d-none d-md-inline">Categoria</span> 
                                                    </i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-8 mb-3">
                                                <label for="produtoNome" class="form-label fw-medium">Nome do Produto</label>
                                                <input type="text" class="form-control" id="produtoNome" placeholder="Digite aqui...">
                                            </div>
                                            <div class="col-md-4 mb-3" >
                                                <label for="categoriaNome" class="form-label fw-medium text-success">Preço R$</label>
                                                <input type="text" class="form-control border-2 border-success" id="categoriaNome" placeholder="Digite aqui...">
                                            </div>

                                        </div>

                                        <div class="mb-3">
                                            <label for="selecao-arquivo" class="form-label fw-medium">Selecionar Imagem</label>
                                            <input class="form-control" type="file" id="selecao-arquivo">
                                        </div>

                                        <div class="row">
                                            <div class="col-lg   mb-2">
                                                <label for="descricaoArea" class="form-label fw-medium">Descrição</label>
                                                <div class="">
                                                    <textarea class="form-control txt-area-size" placeholder="" id="descricaoArea"></textarea>
                                                </div>
                                            </div>
    
                                            <div class="col-lg  mb-2">
                                                <label for="obsvacaoArea" class="form-label fw-medium">Observação</label>
                                                <div class="">
                                                    <textarea class="form-control txt-area-size" placeholder="" id="obsvacaoArea"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-check form-switch mt-2">
                                            <input class="form-check-input" type="checkbox" role="switch" id="desativarItemCheck">
                                            <label class="form-check-label fw-medium" for="desativarItemCheck">Desabilitar Produto</label>
                                        </div>

                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card mt-4">
                                <div class="card-header text-center">
                                    <h4>Produtos Cadastrados</h4>
                                </div>
                                <div class="card-body overflow-scroll altura-table">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="col-md-1 d-none d-md-table-cell">ID</th>
                                                <th class="col"><span class="d-none d-lg-inline">Nome</span> Produto</th>
                                                <th class="col-2">Preço<span class="d-none d-lg-inline"> R$</span></th>
                                                <th class="col-lg-3 d-none d-md-table-cell">
                                                    <span class="d-none d-lg-inline">Categoria/SubCategoria</span>
                                                    <span class="d-none d-sm-inline d-lg-none">Cat/Sub</span>
                                                </th>
                                                <th class="col-1">Ativo</th>
                                                <th class="col-2 text-center">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Exemplo de dados estáticos -->
                                            <tr>
                                                <td class="col-md d-none d-md-table-cell ">1</td>
                                                <td>Cappucino</td>
                                                <td>17,99</td>
                                                <td class="col-md-3 d-none d-md-table-cell">Natural/Café</td>
                                                <td>Sim</td>
                                                <td class="d-flex justify-content-center">
                                                    <button class="btn btn-outline-primary btn-sm me-2">
                                                        <i class="bi bi-pencil-square" title="Editar"></i>
                                                    </button>
                                                    <button class="btn btn-outline-danger btn-sm">
                                                        <i class="bi bi-x-circle-fill" title="Excluir" ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-md-table-cell">2</td>
                                                <td>Pão de queijo</td>
                                                <td>15,99</td>
                                                <td class="col-md-3 d-none d-md-table-cell">Doces Diet/Doces</td>
                                                <td>Sim</td>
                                                <td class="d-flex justify-content-center">
                                                    <button class="btn btn-outline-primary btn-sm me-2">
                                                        <i class="bi bi-pencil-square" title="Editar"></i>
                                                    </button>
                                                    <button class="btn btn-outline-danger btn-sm">
                                                        <i class="bi bi-x-circle-fill" title="Excluir" ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-md-table-cell">3</td>
                                                <td>Empada</td>
                                                <td>10,99</td>
                                                <td class="col-md-3 d-none d-md-table-cell">Bebidas Diet/Bebidas Diversas</td>
                                                <td>Não</td>
                                                <td class="d-flex justify-content-center">
                                                    <button class="btn btn-outline-primary btn-sm me-2">
                                                        <i class="bi bi-pencil-square" title="Editar"></i>
                                                    </button>
                                                    <button class="btn btn-outline-danger btn-sm">
                                                        <i class="bi bi-x-circle-fill" title="Excluir" ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-md-table-cell">4</td>
                                                <td>Brownie</td>
                                                <td>7,99</td>
                                                <td class="col-md-3 d-none d-md-table-cell">Natural/Café</td>
                                                <td>Sim</td>
                                                <td class="d-flex justify-content-center">
                                                    <button class="btn btn-outline-primary btn-sm me-2">
                                                        <i class="bi bi-pencil-square" title="Editar"></i>
                                                    </button>
                                                    <button class="btn btn-outline-danger btn-sm">
                                                        <i class="bi bi-x-circle-fill" title="Excluir" ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-md-table-cell">5</td>
                                                <td>Pudim</td>
                                                <td>14,99</td>
                                                <td class="col-md-3 d-none d-md-table-cell">Polpas/Lanches Naturais</td>
                                                <td>Sim</td>
                                                <td class="d-flex justify-content-center">
                                                    <button class="btn btn-outline-primary btn-sm me-2">
                                                        <i class="bi bi-pencil-square" title="Editar"></i>
                                                    </button>
                                                    <button class="btn btn-outline-danger btn-sm">
                                                        <i class="bi bi-x-circle-fill" title="Excluir" ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-none d-md-table-cell">6</td>
                                                <td>Tortas</td>
                                                <td>22,99</td>
                                                <td class="col-md-3 d-none d-md-table-cell">Expresso/Café</td>
                                                <td>Sim</td>
                                                <td class="d-flex justify-content-center">
                                                    <button class="btn btn-outline-primary btn-sm me-2">
                                                        <i class="bi bi-pencil-square" title="Editar"></i>
                                                    </button>
                                                    <button class="btn btn-outline-danger btn-sm">
                                                        <i class="bi bi-x-circle-fill" title="Excluir" ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- --- FINAL conteudo -->
            </div>
        </div>
    </div>  
    
     <!-- Modal: Cadastro rapido de Categorias -->
     <div class="modal fade" id="categoria-modal" tabindex="-1" aria-labelledby="categoriaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-light  ">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="categoriaModalLabel">Categoria</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> 
              <div class="form-floating mb-2 text-dark">
                <input type="text" class="form-control" id="cadastro-rapido-categoria" placeholder="Digite sua Categoria...">
                <label for="cadastro-rapido-categoria">Digite sua Categoria...</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-lg btn-primary">Cadastrar</button>
            </div>
          </div>
        </div>
      </div>

     <!-- Modal: Cadastro rapido de SUBCategorias -->
     <div class="modal fade" id="subCategoria-modal" tabindex="-1" aria-labelledby="subCategoriaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-light  ">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="subCategoriaModalLabel">SubCategoria</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> 
              <div class="form-floating mb-2 text-dark">
                <input type="text" class="form-control" id="cadastro-rapido-subcategoria" placeholder="Digite sua SubCategoria...">
                <label for="cadastro-rapido-subcategoria">Digite sua Subcategoria...</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-lg btn-primary">Cadastrar</button>
            </div>
          </div>
        </div>
      </div>


    <!--Script Personalizado-->
    <script src=""></script>

    <!--Script BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
</body>
</html>