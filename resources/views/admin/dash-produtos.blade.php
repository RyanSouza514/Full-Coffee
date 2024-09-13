<x-layout-dashboard title="Cadastro de Produtos">
    
                <!-- --- Inicio conteudo -->
                <div class="container mt-3">
                    <div class="row justify-content-center">
                        <div class="col-md-11" >
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4>Cadastro de Produtos</h4>
                                </div>
                                <div class="card-body">

                                    @if($mensagem = Session::get("sucesso"))
                                        <div class="alert alert-success">{{$mensagem}}</div>
                                    @endif
    
                                   
                                    <form action="{{Route('Produtos.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-2">
                                            <label for="" class="form-label fw-medium">Selecione a Categoria</label>
                                            <div class="input-group">
                                                <select class="form-select" name="categoria_id">
                                                    <option selected>Selecione uma opção</option>
                                                    <option value="1">Café</option>
                                                    <option value="2">Bebidas</option>
                                                    <option value="3">Lanches Naturais</option>
                                                    <option value="4">Doces</option>
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
                                                <select class="form-select" name="subcategoria_id">
                                                    <option selected>Selecione uma opção</option>
                                                    <option value="1">Natural</option>
                                                    <option value="2">Expresso</option>
                                                    <option value="3">Polpas</option>
                                                    <option value="4">Suco da Fruta</option>
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
           
    
     <!-- Modal: Cadastro rapido de Categorias -->
     <div class="modal fade" id="categoria-modal" tabindex="-1" aria-labelledby="categoriaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-light  ">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="categoriaModalLabel">Categoria</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-floating mb-2 text-dark">
                            <input type="text" class="form-control" id="cadastro-rapido-categoria" placeholder="Digite sua Categoria...">
                            <label for="cadastro-rapido-categoria">Digite sua Categoria...</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-primary">Cadastrar</button>
                    </div>
                </form>
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
                <form action="{{Route('SubCategoria.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="modal-body">
                        <div class="form-floating mb-2 text-dark">
                            <input type="text" class="form-control" id="cadastro-rapido-subcategoria" name="nome_subcategoria" placeholder="Digite sua SubCategoria...">
                            <label for="cadastro-rapido-subcategoria">Digite sua Subcategoria...</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-primary">Cadastro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </x-layout>
    