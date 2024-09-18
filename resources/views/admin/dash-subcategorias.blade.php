<x-layout-dashboard title="SubCategoria">

    <!-- --- Inicio conteudo -->
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Cadastro de SubCategoria</h4>
                    </div>
                    <div class="card-body">

                        @if($mensagem = Session::get("sucesso"))
                            <div class="alert alert-success">{{$mensagem}}</div>
                        @endif

                        @if($mensagem = Session::get("erro"))
                            <div class="alert alert-danger">{{$mensagem}}</div>
                        @endif

                        <form action="{{Route('SubCategoria.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label for="nome_subcategoria" class="form-label fw-medium">Nome da SubCategoria</label>
                                <input type="text" class="form-control" id="nome_subcategoria" name="nome_subcategoria"
                                    placeholder="Digite aqui...">
                            </div>
                            <div class="mb-2">
                                <label for="categoria_id" class="form-label fw-medium">Selecione sua Categoria</label>
                                <select class="form-select" name="categoria_id">
                                    <option selected>Selecione uma opção</option>
                                    @foreach ($categorias as $cat)
                                        <option value="{{$cat->id}}">{{$cat->nome_categoria}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-end mt-3">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-header text-center">
                        <h4>SubCategoria Cadastradas</h4>
                    </div>
                    <div class="card-body overflow-y-scroll altura-table-sub altura-table-sub">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="col-1">ID</th>
                                    <th class="col-auto">Nome SubCategoria</th>
                                    <th class="col-auto">Categoria</th>
                                    <th class="col-2 text-center">Ações</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($subcategoria as $sub)
                                    <tr>
                                        <td>{{$sub->id}}</td>
                                        <td>{{$sub->nome_subcategoria}}</td>
                                        <td>{{$sub->nome_categoria}}</td>

                                        <td class="d-flex justify-content-center">
                                            <button class="btn btn-outline-primary btn-sm me-2" data-bs-toggle="modal"
                                                data-bs-target="#edit-modal-sub{{$sub->id}}">
                                                <i class="bi bi-pencil-square" title="Editar"></i>
                                            </button>

                                            <!-- Modal: EDTAR CATEGORIAA -->
                                            <div class="modal fade" id="edit-modal-sub{{$sub->id}}" tabindex="-1"
                                                aria-labelledby="categoriaModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content bg-light  ">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="categoriaModalLabel"> Editar
                                                                SubCategoria</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="{{Route('SubCategoria.update')}}">
                                                            @csrf
                                                            @method("PUT")
                                                            <div class="modal-body">
                                                                <div class="form-floating mb-2 text-dark">
                                                                    <input type="hidden" class="form-control" name="id"
                                                                        value="{{$sub->id}}">
                                                                    <input type="text" class="form-control"
                                                                        name="nome_subcategoria"
                                                                        value="{{$sub->nome_subcategoria}}">
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label for="categoria_id"
                                                                        class="form-label fw-medium">Selecione sua
                                                                        Categoria</label>
                                                                    <select class="form-select" name="categoria_id">
                                                                        <option selected>Selecione uma opção</option>
                                                                        @foreach ($categorias as $cat)
                                                                            <option value="{{$cat->id}}">
                                                                                {{$cat->nome_categoria}}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
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

                                            <form action="{{Route('SubCategoria.destroy', $sub->id)}}" method="POST">
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


</x-layout-dashboard>