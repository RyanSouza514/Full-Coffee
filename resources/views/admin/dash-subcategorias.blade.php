<x-layout-dashboard title="SubCategoria">
    
                <!-- --- Inicio conteudo -->
                <div class="container mt-3">
                    <div class="row justify-content-center">
                        <div class="col-md-8" >
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4>Cadastro de SubCategoria</h4>
                                </div>
                                <div class="card-body">
<<<<<<< HEAD

                                    @if($mensagem = Session::get("sucesso"))
                                        <div class="alert alert-success">{{$mensagem}}</div>
                                    @endif

                                    @if($mensagem = Session::get("erro"))
                                        <div class="alert alert-danger">{{$mensagem}}</div>
                                    @endif

                                    <form action="{{Route('SubCategoria.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
=======
                                    <form >
                                        @csrf
>>>>>>> e9c8de6ea94344211d2e985f208d1e864cfd8185
                                        <div class="mb-2">
                                            <label for="nome_subcategoria" class="form-label fw-medium">Nome da SubCategoria</label>
                                            <input type="text" class="form-control" id="nome_subcategoria" name="nome_subcategoria" placeholder="Digite aqui...">
                                        </div>
                                        <div class="mb-2">
                                            <label for="categoria_id" class="form-label fw-medium">Selecione sua Categoria</label>
                                            <select class="form-select" name="categoria_id">
                                                <option selected>Selecione uma opção</option>
                                                <option value="1">Café</option>
                                                <option value="2">Bebidas</option>
                                                <option value="3">Lanches Naturais</option>
                                                <option value="4">Doces</option>
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
                                         
                                            @foreach ($subcategoria as $sub )
                                                <tr>
                                                    <td>{{$sub->id}}</td>
                                                    <td>{{$sub->nome_subcategoria}}</td>
                                                    <td>{{$sub->nome_categoria}}</td>
                                               
                                                    <td class="d-flex justify-content-center">
                                                        <button class="btn btn-outline-primary btn-sm me-2">
                                                            <i class="bi bi-pencil-square" title="Editar"></i>
                                                        </button>
                                                        <button class="btn btn-outline-danger btn-sm">
                                                            <i class="bi bi-x-circle-fill" title="Excluir" ></i>
                                                        </button>
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