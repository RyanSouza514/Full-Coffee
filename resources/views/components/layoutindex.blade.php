<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Full Coffee</title>
    <link rel="icon" href="{{Vite::asset('resources/assets/icons/icon-logo-coffee.png')}}"type="image/icon type">

    <!--ESTILIZAÇÃO BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--iCONS BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!--ESTILIZAÇÃO PERSONALIZADA-->
    <!-- <link rel="stylesheet" href="src/assets/CSS/style.css">
    <link rel="stylesheet" href="src/assets/css/index.css">
    <link rel="stylesheet" href="src/assets/CSS/generic/normalize.css"> -->
    @vite('resources/css/indexLayout.css')
    @vite('resources/css/cardapio.css')
    @vite('resources/css/generic/normalize.css')
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

</head>

<body>


    <!-- Iniciando NavBar -->
    <nav class="navbar navbar-expand-lg navbar-custom d-block">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{Vite::asset('resources/assets/icons/icon-logo-coffee.png')}}">
                Full Coffee
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link ms-3" href="{{Route('home.index')}}">Home</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="#quem-somos">Quem Somos</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="#destaques">Destaques</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                    <form class="d-flex align-items-center ms-3">
                        <a href="{{Route('cardapio.index')}}">
                            <button class="btn btn-outline-success btn-custom" type="button">Cardápio</button>
                        </a>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Final Menu Navegação -->


    {{$slot}}


    <!---Finalizando Navbar-->


    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Localização -->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">
                        <i class="bi bi-geo-alt"></i> Localização
                    </h4>
                    <p class="lead mb-0">
                        Casa do Comércio - Av.Tancredo Neves,
                        <br />
                        1109 - Caminho das Árvores, Salvador - BA
                    </p>
                    <!-- Verificar isso depois -->
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1943.9341878643934!2d-38.458061956544434!3d-12.980269427399733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161b1bacc7fbe1%3A0xe56ff87dd23b7afb!2sSesc%20Casa%20do%20Com%C3%A9rcio!5e0!3m2!1spt-BR!2sbr!4v1721793636466!5m2!1spt-BR!2sbr" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">
                        <i class="bi bi-people"></i> Mídias Sociais
                    </h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="bi bi-facebook"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="bi bi-linkedin"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="bi bi-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="bi bi-twitter"></i></a>
                </div>
                <!-- Footer Sobre o Curso -->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">
                        <i class="bi bi-cpu"></i> PROGRAMADOR FULL STACK
                    </h4>
                    <p class="lead mb-0">
                        O curso tem como objetivo preparar os participantes para o desenvolvimento de projetos web completos...
                        <a href="https://cursos.ba.senac.br/tecnologia-da-informacao-ti">Sobre o Curso</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Desenvolvido pela Turma Full Stack - Senac 2024</small></div>
    </div>


    <!-- AOS JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>