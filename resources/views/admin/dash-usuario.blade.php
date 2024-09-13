<x-layout-dashboard>
    <!-- --- Inicio conteudo -->
    <form method="post" action="{{ Route('login.cadastrarUsuario') }}">
        @csrf
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Cadastro de Usuário</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="UsuarioNome" class="form-label fw-medium">Nome</label>
                                <input type="text" name="name" class="form-control" id="UsuarioNome" placeholder="Digite seu nome..." value="{{ old('name') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="UsuarioEmail" class="form-label fw-medium">Email</label>
                                <input type="text" name="email" class="form-control" id="UsuarioEmail" placeholder="Digite seu email..." value="{{ old('email') }}" required>

                            </div>

                            <div class="row">
                                <div class="col-md d-inline">
                                    <label for="UsuarioSenha" class="form-label fw-medium">Senha</label>
                                    <div class="input-group mb-3">
                                        <input type="password" name="password" class="form-control" id="UsuarioSenha" placeholder="Digite sua senha..." required>
                                        <i id="verSenha" class="bi bi-eye-slash input-group-text"></i>
                                    </div>
                                </div>

                                <div class="col-md d-inline">
                                    <label for="UsuarioConfirmaSenha" class="form-label fw-medium">Confirmar Senha</label>
                                    <div class="input-group mb-3">
                                        <input type="password" name="password_confirmation" class="form-control" id="UsuarioConfirmaSenha" placeholder="Repita sua senha..." required>
                                        <i id="verSenhaConfirmar" class="bi bi-eye-slash input-group-text"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- --- FINAL conteudo -->
</x-layout-dashboard>