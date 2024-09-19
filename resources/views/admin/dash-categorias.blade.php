<x-layout-dashboard title="Cadastro de Categorias">
    <!-- --- Inicio conteudo -->
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Cadastro de Categoria</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{Route('Categorias.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nome_categoria" class="form-label fw-medium">Nome da Categoria</label>
                                <input type="text" class="form-control" id="nome_categoria" name="nome_categoria"
                                    placeholder="Digite aqui...">
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header text-center">
                        <h4>Categorias Cadastradas</h4>
                    </div>
                    <div class="card-body overflow-y-scroll altura-table">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="col-2">ID</th>
                                    <th class="col-auto">Nome Categoria</th>
                                    <th class="col-2 text-center">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Exemplo de dados estáticos -->
                                @foreach ($categorias as $cat)
                                <tr>
                                    <td>{{$cat->id}}</td>
                                    <td>{{$cat->nome_categoria}}</td>
                                    <td class="d-flex justify-content-center">

                                        <button class="btn btn-outline-primary btn-sm me-2" data-bs-toggle="modal"
                                            data-bs-target="#edit-modal{{$cat->id}}">
                                            <i class="bi bi-pencil-square" title="Editar"></i>
                                        </button>

                                        <!-- Modal: EDTAR CATEGORIAA -->
                                        <div class="modal fade" id="edit-modal{{$cat->id}}" tabindex="-1"
                                            aria-labelledby="categoriaModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-light  ">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="categoriaModalLabel"> Editar
                                                            Categoria</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form id="FormEditarCategoria" method="POST"
                                                        action="{{Route("Categorias.update")}}">
                                                        @csrf
                                                        @method("PUT")
                                                        <div class="modal-body">
                                                            <div class="form-floating mb-2 text-dark">
                                                                <input type="hidden" class="form-control" name="id"
                                                                    id="categoriaId" value="{{$cat->id}}">
                                                                <input type="text" class="form-control"
                                                                    name="nome_categoria" id="categoriaNome"
                                                                    value="{{$cat->nome_categoria}}">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit"
                                                                class="btn btn-lg btn-success">Atualizar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <form action="{{Route('Categorias.destroy', $cat)}}" method="POST">
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
     
    </x-layout-dashbord>