<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashbord - Adminstrador</title>
    <link rel="icon" href="{{Vite::asset('resources/assets/icons/icon-dashboard.png')}}" type="image/icon type">

    <!--ESTILIZAÇÃO BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!--iCONS BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!--ESTILIZAÇÃO PERSONALIZADA-->
    <!-- <link rel="stylesheet" href="../assets/CSS/dashbord.css">
    <link rel="stylesheet" href="../assets/CSS/generic/normalize.css"> -->
    @vite('resources/css/dashbord.css')
    @vite('resources/css/generic/normalize.css')

</head>

<body>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark bg-menu-nav">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Painel de Controle</span>
                    </a>
    
                    <!-- INCIO DA LISTA / HOME -->
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="dashbord.html" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i><span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
    
                        <li>
                            <a href="{{Route('Mensagem.index')}}" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dash</span> 
                                <span class="d-none d-sm-inline d-md-none d-lg-inline">de</span>
                                <span class="d-none d-sm-inline d-md-none d-lg-inline d-xl-inline">Mensagens</span>
                            </a>
                        </li>
    
                        <li class="text-center text-sm-start">
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-sm-0 align-middle">
                                <i class="fs-4 bi-plus-circle-fill"></i>
                                <span class="ms-1 d-none d-sm-inline">Cadastrar</span>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="{{Route('Produtos.index')}}" class="nav-link px-0">
                                        <span class="d-none d-sm-inline">Produtos</span>
                                        <span class="d-inline d-sm-none">Prod</span>
                                    </a>
                                </li>
                                <li class="w-100">
                                    <a href="{{Route(name: 'Categorias.index')}}" class="nav-link px-0"> 
                                        <span class="d-none d-sm-inline">Categorias</span>
                                        <span class="d-inline d-sm-none">Cat</span>
                                    </a>
                                </li>
                                <li class="w-100">
                                    <a href="{{Route('SubCategoria.index')}}" class="nav-link px-0">
                                        <span class="d-none d-sm-inline">Sub Categorias</span>
                                        <span class="d-inline d-sm-none">Sub C</span>
                                    </a>
                                </li>
                                <li class="w-100">
                                    <a href="{{Route('Usuario.index')}}" class="nav-link px-0">
                                        <span class="d-none d-sm-inline">Usuarios</span>
                                        <span class="d-inline d-sm-none">User</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
    
                        <li class="text-center text-sm-start">
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-sm-0 align-middle ">
                                <i class="fs-4 bi-clipboard-data"></i>
                                <span class="ms-1 d-none d-sm-inline">Dados</span>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0">
                                        <span class="d-none d-sm-inline">Item</span> 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0">
                                        <span class="d-none d-sm-inline">Item</span> 2</a>
                                </li>
                            </ul>
                        </li>
    
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                              <i class="fs-4 bi-newspaper"></i> <span class="ms-1 d-none d-sm-inline">Relatórios</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                </li>
                            </ul>
                        </li>
    
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                    </ul>

                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../assets/icons/icon-admin.png" alt="hugenerd" width="25" height="25" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Administrador</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">Novo Projeto</a></li>
                            <li><a class="dropdown-item" href="#">Configurações</a></li>
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col gradient-personalizado">


            {{$slot}}

            </div>
        </div>
    </div>  

    <!--Script Personalizado-->
    <!-- <script src="@vite('resources/js/dashbord.js')"></script> -->

    <!--Script BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    

    <!------- MENSAGEM DE RETORNO PARA USUARIO ------->
    
    @if(session('save-success'))
        <div id="alertTemp" class="alert alert-success alert-dismissible fade show position-fixed" role="alert"
            style="top: 20px; right: 20px; z-index: 9999;">
            {{ session('save-success') }}
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

</body>
</html>