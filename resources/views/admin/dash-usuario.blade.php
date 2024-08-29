
    
                <!-- --- Inicio conteudo -->
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-8" >
                            <div class="card">
                                <div class="card-header text-center">
                                    <h4>Cadastro de Usuario</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="UsuarioNome" class="form-label fw-medium">Nome</label>
                                            <input type="text" class="form-control" id="UsuarioNome" placeholder="Digite seu nome..." required>
                                        </div>
                                        <div class="msg-erro" id="msg-erro-nome">
                                            <!-- Mensagem de erro aqui!!!! -->
                                        </div>
                                        <div class="mb-3">
                                            <label for="UsuarioEmail" class="form-label fw-medium">Email</label>
                                            <input type="text" class="form-control" id="UsuarioEmail" placeholder="Digite seu email..." required>
                                        </div>

                                        <div class="row">
                                            <div class="col-md d-inline">
                                                <label for="UsuarioSenha" class="form-label fw-medium">Senha</label>
                                                <div class="input-group mb-3">
                                                    <input type="password" class="form-control" id="UsuarioSenha" placeholder="Digite sua senha..." required>
                                                    <i id="verSenha" class="bi bi-eye-slash input-group-text"></i>
                                                </div>
                                                <div class="msg-erro" id="msg-erro1">
                                                    <!-- Mensagem de erro aqui!!!! -->
                                                </div>
                                            
                                            </div>
                                            <div class="col-md d-inline">
                                                <label for="UsuarioConfirmaSenha" class="form-label fw-medium">Confirmar Senha</label>
                                                <div class="input-group mb-3">
                                                    <input type="password" class="form-control" id="UsuarioConfirmaSenha" placeholder="Repita sua senha..." required>
                                                    <i id="verSenhaConfirmar" class="bi bi-eye-slash input-group-text"></i>
                                                </div>
                                                <div class="msg-erro" id="msg-erro2">
                                                    <!-- Mensagem de erro aqui!!!! -->
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary" onclick="salvarUsuarios()">Cadastrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- --- FINAL conteudo -->
