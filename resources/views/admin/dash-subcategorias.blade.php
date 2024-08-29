


    
                <!-- --- Inicio conteudo -->
                <div class="container mt-3">
                    <div class="row justify-content-center">
                        <div class="col-md-8" >
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4>Cadastro de SubCategoria</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-2">
                                            <label for="categoryName" class="form-label fw-medium">Nome da SubCategoria</label>
                                            <input type="text" class="form-control" id="categoryName" placeholder="Digite aqui...">
                                        </div>
                                        <div class="mb-2">
                                            <label for="categoryName" class="form-label fw-medium">Selecione sua Categoria</label>
                                            <select class="form-select">
                                                <option selected>Selecione uma opção</option>
                                                <option value="a">Café</option>
                                                <option value="b">Bebidas</option>
                                                <option value="c">Lanches Naturais</option>
                                                <option value="d">Doces</option>
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
                                            <!-- Exemplo de dados estáticos -->
                                            <tr>
                                                <td>1</td>
                                                <td>Natural</td>
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
                                                <td>Expresso</td>
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
                                                <td>3</td>
                                                <td>Polpas</td>
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
                                                <td>Suco da Fruta</td>
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
                                                <td>Bebidas Diet</td>
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
                                                <td>Doces Diet</td>
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
