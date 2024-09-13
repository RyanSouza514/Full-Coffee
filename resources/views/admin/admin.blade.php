<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login - Full Coffee</title>
  <link rel="icon" href="../assets/icons/icon-admin.png" type="image/icon type">

  <!--ESTILIZAÇÃO BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!--iCONS BOOTSTRAP-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!--ESTILIZAÇÃO PERSONALIZADA-->
  <link rel="stylesheet" href="../assets/CSS/style-login.css">
  <link rel="stylesheet" href="../assets/CSS/generic/normalize.css">

</head>

<body>
  <main class="vh-100 gradient-personalizado">
    <div class="container py-1 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark bg-opacity-75 text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-1 mt-md-1 pb-3">
                <form method="post" action="{{Route('login.loginUser')}}">
                  @csrf


                  <div class="d-flex justify-content-start align-items-center">
                    <img src="../assets/img/logo-login.png" alt="" class="rounded-circle w-25 me-3">
                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  </div>


                  <!-- <img src="../assets/img/full-coffee-logo1.png" alt="" class="rounded-circle w-25">
                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2> -->
                  <p class="text-white-50 mt-2 mb-5">Por favor insira seu login e senha!</p>
                  @if($mensagem = Session::get("erro"))
                    <p class="alert alert-danger">{{$mensagem}}</p>
                  @endif
                  <div class="form-floating mb-4 text-dark">
                    <input type="email" name="email" class="form-control form-control-lg" id="email-login" placeholder="name@fullcofee.com">
                    <label for="email-login">Email:</label>
                  </div>

                  <div class="form-floating mb-3 text-dark input-group">
                    <input type="password" class="form-control form-control-lg" id="senha-login" placeholder="senha" name="password">
                    <label for="senha-login">Senha:</label>
                    <i id="verSenha" class="bi bi-eye-slash input-group-text"></i>
                  </div>

                  <p class="small mb-4 pb-lg-2" data-bs-toggle="modal" data-bs-target="#recuperacao-modal"><a class="text-white-50" href="#!">Esqueceu sua senha?</a></p>

                  <a href="dashbord.html">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Logar</button>
                  </a>
                </form>
              </div>

              <!-- <div>
                    <p class="mb-0">Não tem uma conta? <a href="#!" class="text-white-50 fw-bold">Cadastre-se</a>
                    </p>
                  </div> -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Modal: Enviar Email Recuperação Senha -->
  <div class="modal fade" id="recuperacao-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-light  ">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Esqueceu a senha?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-floating mb-2 text-dark">
            <input type="email" class="form-control" id="email-login-recupera" placeholder="Digite seu email...">
            <label for="email-login-recupera">Email:</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" onclick="EnviarEmailRecuperacao();" class="btn btn-lg btn-primary">Enviar</button>
        </div>
      </div>
    </div>
  </div>

  <!--Script Personalizado-->
  <script src="../assets/JS/login.js"></script>

  <!--Script BOOTSTRAP-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>