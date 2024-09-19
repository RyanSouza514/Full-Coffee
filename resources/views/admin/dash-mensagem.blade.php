<x-layout-dashboard title="Mensagem">

                <!-- --- Inicio conteudo -->
    
                <div class=" mt-5 bg-light bg-opacity-25 p-2">
                    <h1 class="text-center mb-4">Mensagens Recebidas</h1>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-font-size">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th>ID</th>
                                    <th>Nome <span class="d-none d-lg-inline ">do Contato</span></th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th>Mensagem</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Aqui você inseriria os dados do banco de dados -->
                                @foreach ($mensagem as $msg)

                                <tr class="text-center">
                                    <td class="col-auto col-sm-auto col-md-auto col-lg-auto">{{$msg->id}}</td>
                                    <td class="col-1 col-sm-1 col-md-2 col-lg-2">{{$msg->nome}}</td>
                                    <td class="col-3 col-sm-3 col-md-2 col-lg-3 text-break">{{$msg->email}}</td>
                                    <td class="col-3 col-sm-3 col-md-3 col-lg-2">{{$msg->telefone}}</td>
                                    <td class="col-4 col-sm-4 col-md-5 col-lg-3  overflow-y-auto text-start mensagem-form">{{$msg->mensagem}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- --- FINAL conteudo -->

</x-layout-dashboard>