<x-layout-dashbord>
                <!-- --- Inicio conteudo -->
                <div class="container mt-3">
                    <div class="row justify-content-center">
                        <div class="col-md-8" >
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4>Cadastro de Categoria</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="categoryName" class="form-label fw-medium">Nome da Categoria</label>
                                            <input type="text" class="form-control" id="categoryName" placeholder="Digite aqui...">
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
                                            <tr>
                                                <td>1</td>
                                                <td>Café</td>
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
                                                <td>2</td>
                                                <td>Massas</td>
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
                                                <td>3</td>
                                                <td>Lanches Naturais</td>
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
                                                <td>4</td>
                                                <td>Sucos Naturais</td>
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
                                                <td>5</td>
                                                <td>Bebidas Diversas</td>
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
                                                <td>6</td>
                                                <td>Doces</td>
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
            </x-layout-dashbord>