<x-layout-dashboard title="Editar Categoria">
    <!-- --- Inicio conteudo -->
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Editar Categoria</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{Route('Categorias.update',  $post)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="nome_categoria" class="form-label fw-medium">Nome da Categoria</label>
                                <input type="text" class="form-control" id="nome_categoria" name="nome_categoria" placeholder="Digite aqui..." value="{{$post['url-img']}}">
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- --- FINAL conteudo -->

    </x-layout-dashbord>