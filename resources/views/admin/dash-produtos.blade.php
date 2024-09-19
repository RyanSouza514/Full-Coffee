<x-layout-dashboard title="Cadastro de Produtos">

    <!-- --- Inicio conteudo -->
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-11">
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
                                    <select class="form-select" name="categoria_id" id="SelectCategoriaId" onchange="buscarSubCategoriaPorCategoria()" >
                                        <option selected>Selecione uma opção</option>
                                        @foreach ($categoria as $cat)
                                            <option 
                                                {{ isset($_GET['categoriaId']) && $_GET['categoriaId'] == $cat->id ? 'selected' : ''}}
                                                value="{{$cat->id}}">{{$cat->nome_categoria}}</option>
                                            
                                        @endforeach
                                    </select>
                                    <button class="btn btn-success" type="button" data-bs-toggle="modal"
                                        data-bs-target="#categoria-modal">
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
                                        @foreach ($subcategoria as $sub)
                                            <option value="{{$sub->id}}">{{$sub->nome_subcategoria}}</option>
                                            <!-- <option value="2">Expresso</option>
                                                                <option value="3">Polpas</option>
                                                                <option value="4">Suco da Fruta</option> -->
                                        @endforeach
                                    </select>
                                    <button class="btn btn-success" type="button" data-bs-toggle="modal"
                                        data-bs-target="#subCategoria-modal">
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
                                    <label for="nome_produto" class="form-label fw-medium">Nome do Produto</label>
                                    <input type="text" class="form-control" id="nome_produto" name="nome_produto"
                                        placeholder="Digite aqui...">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="preco" class="form-label fw-medium text-success">Preço R$</label>
                                    <input type="number" step="0.01" class="form-control border-2 border-success"
                                        id="preco" name="preco" placeholder="Digite aqui...">
                                </div>

                            </div>

                            <div class="mb-3">
                                <label for="selecao-arquivo" class="form-label fw-medium">Selecionar Imagem</label>
                                <input class="form-control" type="file" id="selecao-arquivo" name="imagem">
                            </div>

                            <div class="row">
                                <div class="col-lg   mb-2">
                                    <label for="descricaoArea" class="form-label fw-medium">Descrição</label>
                                    <div class="">
                                        <textarea class="form-control txt-area-size" placeholder="" name="descricao"
                                            id="descricaoArea"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg  mb-2">
                                    <label for="obsvacaoArea" class="form-label fw-medium">Observação</label>
                                    <div class="">
                                        <textarea class="form-control txt-area-size" name="observacao" placeholder=""
                                            id="obsvacaoArea"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-check form-switch mt-2">
                                <input class="form-check-input" type="checkbox" role="switch" name="check"
                                    id="desativarItemCheck" checked>
                                <label class="form-check-label fw-medium" for="desativarItemCheck">Ativo?</label>
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
                                @foreach ($produtos as $prod)
                                    <tr>
                                        <td class="col-md d-none d-md-table-cell ">{{$prod->id}}</td>
                                        <td>{{$prod->nome_produto}}</td>
                                        <td>{{number_format($prod->preco, 2, ',', '.')}}</td>
                                        <td class="col-md-3 d-none d-md-table-cell">
                                            {{$prod->nome_categoria}}/{{$prod->nome_subcategoria}}
                                        </td>
                                        <td>{{$prod->check == 1 ? 'Sim': 'Não';}}</td>

                                        <td class="d-flex justify-content-center">

                                            <button class="btn btn-outline-primary btn-sm me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit-modal-produtos{{$prod->id}}">
                                                <i class="bi bi-pencil-square" title="Editar"></i>
                                            </button>

                                            <!-- Modal: Editar Cadastro de Produtos -->
                                            <div class="modal fade" id="edit-modal-produtos{{$prod->id}}" tabindex="-1" aria-labelledby="produtosModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content bg-light  ">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="produtosModalLabel">Editar Produto</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="{{Route('Produtos.update')}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            @method("PUT")
                                                            <div class="modal-body">
                                                                    <div class="mb-2">
                                                                        <label for="" class="form-label fw-medium">Selecione a Categoria</label>
                                                                        <div class="input-group">
                                                                            <select class="form-select" name="categoria_id" id="SelectCategoriaId">
                                                                                <option>Selecione uma opção</option>
                                                                                @foreach ($categoria as $cat)
                                                                                    <option {{$cat->id == $prod->categoria_id ? 'selected': ''}}
                                                                                     value="{{$cat->id}}">{{$cat->nome_categoria }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="" class="form-label fw-medium">Selecione a SubCategoria</label>
                                                                        <div class="input-group">
                                                                            <select class="form-select" name="subcategoria_id">
                                                                                <option selected>Selecione uma opção</option>
                                                                                @foreach ($subcategoriaModalEditar as $subModalEditar)
                                                                                    <option {{$subModalEditar->id == $prod->subcategoria_id ? 'selected' : ''}}
                                                                                    value="{{$subModalEditar->id}}">{{$subModalEditar->nome_subcategoria}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-8 mb-3">
                                                                            <label for="nome_produto" class="form-label fw-medium">Nome do Produto</label>
                                                                            <input type="hidden" class="form-control" name="id" value="{{$prod->id}}">
                                                                            <input type="text" class="form-control" id="nome_produto" name="nome_produto" value="{{$prod->nome_produto}}">
                                                                        </div>
                                                                        <div class="col-md-4 mb-3">
                                                                            <label for="preco" class="form-label fw-medium text-success">Preço R$</label>
                                                                            <input type="number" step="0.01" class="form-control border-2 border-success"
                                                                                id="preco" name="preco" value="{{$prod->preco}}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="selecao-arquivo" class="form-label fw-medium">Alterar Imagem</label>
                                                                        <img src="{{URL::asset('img/cardapio/'.$prod->imagem ?: 'img-default.png')}}" alt="" width="100px" height="auto" name="VerificarImg">
                                                                        <input class="form-control" type="file" id="selecao-arquivo" name="imagem">
                                                                        <!-- {{$subModalEditar->id == $prod->subcategoria_id ? 'selected' : ''}} -->
                                                                        <!-- $produto['imagem'] = 'img-default.png'; // Define uma imagem padrão -->
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-lg   mb-2">
                                                                            <label for="descricaoArea" class="form-label fw-medium">Descrição</label>
                                                                            <div class="">
                                                                                <textarea class="form-control txt-area-size" placeholder="" name="descricao"
                                                                                    id="descricaoArea">{{$prod->descricao}}</textarea>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg  mb-2">
                                                                            <label for="obsvacaoArea" class="form-label fw-medium">Observação</label>
                                                                            <div class="">
                                                                                <textarea class="form-control txt-area-size" name="observacao" placeholder=""
                                                                                    id="obsvacaoArea">{{$prod->observacao}}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-check form-switch mt-2">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="check"
                                                                            id="desativarItemCheck" {{$prod->check ? 'checked': ''}}>
                                                                        <label class="form-check-label fw-medium" for="desativarItemCheck">Ativo?</label>
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-lg btn-success">Atualizar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <form action="{{Route('Produtos.destroy', $prod)}}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button class="btn btn-outline-danger btn-sm">
                                                    <i class="bi bi-x-circle-fill" title="Excluir"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
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
                <form action="{{Route('CriarCategoriaProduto')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-floating mb-2 text-dark">
                            <input type="text" class="form-control" id="cadastro-rapido-categoria" name="nome_categoria"
                                placeholder="Digite sua Categoria...">
                            <label for="cadastro-rapido-categoria">Digite sua Categoria...</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-lg btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal: Cadastro rapido de SUBCategorias -->
    <div class="modal fade" id="subCategoria-modal" tabindex="-1" aria-labelledby="subCategoriaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-light  ">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="subCategoriaModalLabel">SubCategoria</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{Route('CriarSubCategoriaProduto')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-floating mb-2 text-dark">
                            <input type="text" class="form-control" id="cadastro-rapido-subcategoria"
                                name="nome_subcategoria" placeholder="Digite sua SubCategoria...">
                            <label for="cadastro-rapido-subcategoria">Digite sua Subcategoria...</label>
                        </div>
                        <div class="mb-2">
                            <label for="categoria_id" class="form-label fw-medium">Selecione sua Categoria</label>
                            <select class="form-select" name="categoria_id">
                                <option selected>Selecione uma opção</option>
                                @foreach ($categoria as $cat)
                                    <option value="{{$cat->id}}">{{$cat->nome_categoria}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-lg btn-primary">Cadastro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    

    <script>
        function buscarSubCategoriaPorCategoria(){
            const categoriaId = document.getElementById('SelectCategoriaId').value
            console.log(categoriaId);
            const url = window.location.href.split('?');
            window.location.href=url[0]+'?categoriaId='+categoriaId;
            console.log(url);
        }
    </script>

    </x-layout>