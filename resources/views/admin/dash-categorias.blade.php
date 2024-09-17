<x-layout-dashboard title="Categorias">
    <!-- --- Inicio conteudo -->
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Cadastro de Categoria</h4>
                    </div>
                    <div class="card-body">
                        <!-- @if($mensagem = Session::get("sucesso"))
                            <div class="alert alert-success">{{$mensagem}}</div>
                        @endif -->

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
                                            <button class="btn btn-outline-primary btn-sm me-2">
                                                <i class="bi bi-pencil-square" title="Editar"></i>
                                            </button>
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

    <!------- MENSAGEM DE RETORNO PARA USUARIO ------->

    @if(session('save-success'))
        <div id="alertTemp" class="alert alert-success alert-dismissible fade show position-fixed" role="alert"
            style="top: 20px; right: 20px; z-index: 9999;">
            {{ session('save-success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(session('erro'))
        <div id="alertTemp" class="alert alert-warning alert-dismissible fade show position-fixed" role="alert"
            style="top: 20px; right: 20px; z-index: 9999;">
            {{ session('erro') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('deleted-success'))
        <div id="alertTemp" class="alert alert-success alert-dismissible fade show position-fixed" role="alert"
            style="top: 20px; right: 20px; z-index: 9999;">
            {{ session('deleted-success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <script>
        // Tornar o alerta flutuante temporário
        setTimeout(function () {
            let alert = document.getElementById('alertTemp');
            if (alert) {
                alert.classList.remove('show');
                alert.classList.add('fade');
                setTimeout(() => alert.remove(), 500);
            }
        }, 3000); // Alerta desaparecerá após 3 segundos
    </script>

    </x-layout-dashbord>