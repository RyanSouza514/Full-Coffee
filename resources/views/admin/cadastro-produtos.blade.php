<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/CSS/cadastro-produto.css">
    
    <title>ADM</title>
</head>
<body>
<header> 
    <nav class="cabecalho">
        <h3 class="titulo">Cadastro de produtos e catálogos</h3>
    </nav>
    
<main>
  <div class="tela-register">
    <form>
      <div>
        <div class="input-group">
          <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
            <option selected>Categoria...</option>
            <option value="1">café</option>
            <option value="2">chá</option>
            <option value="3">bebidas</option>
          </select>
          <button class="btn btn-success" type="button" style="width: 100px; font-size: small;">
              <i class="bi bi-plus-circle"></i> Nova Categoria
          </button>
        </div>
      </div> 
      

        
      <div class="input-group">
        <select class="form-select mt-3" id="inputGroupSelect04" aria-label="Example select with button addon">
          <option selected>Subcategoria...</option>
          <option value="1">café quente</option>
          <option value="2">café gelado</option>
        </select>
        <button class="btn btn-success mt-3" type="button" style="width: 100px; font-size: small">
            <i class="bi bi-plus-circle"></i> Nova Subcategoria
        </button>
      </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label mt-3">Nome do Produto</label>
          <input placeholder="Nome do Produto" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        
        <div>
          <h5>Imagem</h5>
        </div>

        <svg  class="bd-placeholder-img img-thumbnail" width="200" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera: 200x200" preserveAspectRatio="xMidYMid slice" focusable="false"><title>A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text></svg>
        


        <div class="mb-3 col-md-2 ">
          <label for="exampleInputPassword1" class="form-label">Preço</label>
          <input placeholder="R$" type="text" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="form-floating">
          
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px ">

          </textarea>
          
          <label for="floatingTextarea2">Descrição</label>
        <div class="form-floating">
          
          <textarea class="form-control mt-3" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px ">

          </textarea>
          
          <label for="floatingTextarea2">OBS....</label>

        
          <div class="form-check form-switch mt-2">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Desabilitar produto</label>
          </div>
          

          <button type="submit" class="btn mt-3 btn-primary">Adicionar
            <i class="bi bi-check-lg"></i>
          </button>
          
        </div>
        <!-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
    </form>   
      <!-- <div class="card mb-3" style="max-width: 700px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="latte.jpg" alt="">
          </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"></h5>
            <p class="card-text"></p> 
        </div>
      </div> -->
      <!--select com botão de add  -->
      <!--  -->
    <div style="margin-top: 30px;">
      <h2>tabela de produtos</h2>
    </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Produto</th>
            <th scope="col">Preço</th>
            <th scope="col">Img</th>
            <th scope="col">Descrição</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Cappucino</th>
            <td>17,99</td>
            <td>Cappucino.jpg</td>
            <td >O cappcino....
              <button style="margin-left: 10px; border: none;"><i class="bi bi-trash-fill"></i></button>
              <button style="margin-left: 10px; border: none;"><i class="bi bi-pencil-square"></i></button>
              <button></button>
            </td>
          </tr>
        
  
        </tbody>
      </table>


  </div>


</main>

</header>
</body>
</html>