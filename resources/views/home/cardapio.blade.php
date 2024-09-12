<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio Full Coffee</title>
     <link rel="icon" href="img/icon-coffe.png" type="image/icon type">
 

    <!--ESTILIZAÇÃO BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!--iCONS BOOTSTRAP-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!--ESTILIZAÇÃO PERSONALIZADA-->
    <link rel="stylesheet" href="src/assets/CSS/style.css">
    <link rel="stylesheet" href="cardapio.css">
    <link rel="stylesheet" href="src/assets/CSS/generic/normalize.css"> 
</head>
<body>

  <!-- Iniciando NavBar -->
        <nav class="navbar navbar-expand-lg navbar-custom d-block">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Full Coffee</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link ms-3" href="#home">Home</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link" href="#quem-somos">Quem Somos</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link" href="#destaques">Destaques</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link" href="#page-contato">Contato</a>
              </li>
               <form class="d-flex align-items-center ms-3">
          <a href="#page-cardapio">
            <button class="btn btn-outline-success btn-custom" type="button">Cardápio</button>
          </a>
        </form>
            </ul>
          </div>
        </div>
        </nav>
   
    <!-- Final Menu Navegação -->
<!---Finalizando Navbar-->



    
      <!-- Carrossel com Imagem -->
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/Carrousel Cardápio -img.svg" class="d-block w-100 img-fluid " alt="Imagem do carrossel">
      <div class="carousel-caption d-none d-md-block mb-5">
      </div>
    </div>
  </div>
  <!-- Indicadores do carrossel -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  </div>
</div>
<br>
<br>

<!-- Iniciando CARDAPIO -->
<!-- Comentário que indica o início da seção do cardápio no código. -->

<div class="text-center mb-4">
    <!-- Div com alinhamento de texto centralizado e uma margem inferior. -->
    <h2 class="titulo"> Nosso Cardápio</h2>
    <!-- Título da seção do cardápio com a classe "titulo". -->
</div>

<section class="container my-4 custom-section">
    <!-- Início da seção principal do cardápio com a classe "container" para limitar a largura e uma margem vertical. -->

    <!-- Barra de Pesquisa -->
<!-- Barra de Pesquisa -->
<div class="container mt-4 search-container mb-4">
    <form class="input-group" action="/search" method="get">
        <input type="text" id="search" name="query" class="form-control" placeholder="Buscar">
        <!-- Campo de entrada de texto para pesquisa -->
        <button class="btn btn-outline-secondary input-group-text search-icon" type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
      <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018"/>
      <path d="M13 6.5a6.47 6.47 0 0 1-1.258 3.844q.06.044.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11"/>
    </svg>
        </button>
    </form>
</div>

    <!-- Navegação -->
    <!-- Comentário que indica a inclusão da navegação por categorias. -->
     <!-- Navegação -->
    <!-- Comentário que indica a inclusão da navegação por categorias. -->
    <nav class="nav nav-pills nav-justified mb-3" id="myPills" role="tablist">
        <!-- Início da navegação usando "nav-pills" para criar botões de navegação e "nav-justified" para distribuir igualmente os links. -->
        <a class="nav-link active" id="cafes-tab" data-bs-toggle="pill" href="#cafes" role="tab" aria-controls="cafes" aria-selected="true">
            <span class="icon">&#x2615;</span>
            <!-- Ícone de café representado por um código Unicode. -->
            <span class="text">Cafés</span>
            <!-- Texto associado ao ícone, representando a categoria "Cafés". -->
        </a>
        <a class="nav-link" id="chas-tab" data-bs-toggle="pill" href="#chas" role="tab" aria-controls="chas" aria-selected="false">
            <span class="icon">&#x1F375;</span>
            <!-- Ícone de xícara de chá. -->
            <span class="text">Chás</span>
            <!-- Texto para a categoria "Chás". -->
        </a>
        <a class="nav-link" id="smoothies-tab" data-bs-toggle="pill" href="#smoothies" role="tab" aria-controls="smoothies" aria-selected="false">
            <span class="icon">&#x1F366;</span>
            <!-- Ícone de fatia de bolo para "Sobremesas". -->
            <span class="text">Smoothies</span>
            <!-- Texto para a categoria "Smoothies". -->
        </a>
        <a class="nav-link" id="sobremesas-tab" data-bs-toggle="pill" href="#sobremesas" role="tab" aria-controls="sobremesas" aria-selected="false">
            <span class="icon">&#x1F370;</span>
            <!-- Ícone de fatia de bolo para "Sobremesas". -->
            <span class="text">Sobremesas</span>
            <!-- Texto para a categoria "Sobremesas". -->
        </a>
        <a class="nav-link" id="bebidas-tab" data-bs-toggle="pill" href="#bebidas" role="tab" aria-controls="bebidas" aria-selected="false">
            <span class="icon">&#x1F376;</span>
            <!-- Ícone de caneca de cerveja para "Bebidas". -->
            <span class="text">Bebidas</span>
            <!-- Texto para a categoria "Bebidas". -->
        </a>
    </nav>


    <!-- Tabs -->
<!-- Conteúdo das categorias -->
<div class="tab-content" id="myPillsContent">
    <!-- Categoria: Cafés -->
                    <div class="tab-pane fade show active" id="cafes" role="tabpanel"                 aria-labelledby="cafes-tab">
        <!-- Subcategorias para Cafés -->
        <ul class="nav nav-tabs mb-3" id="cafesTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active custom-text" id="cafes-quentes-tab" data-bs-toggle="tab" href="#cafes-quentes" role="tab" aria-controls="cafes-quentes" aria-selected="true">Cafés Quentes</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link custom-text" id="cafes-gelados-tab" data-bs-toggle="tab" href="#cafes-gelados" role="tab" aria-controls="cafes-gelados" aria-selected="false">Cafés Gelados</a>
            </li>
        </ul>
        <!-- Fim abas de Subcategorias para Cafés --> 

<!--Ínicio Subcategorias Cafés Quentes-->
                    <div class="tab-content" id="cafesTabContent">
            <div class="tab-pane fade show active" id="cafes-quentes" role="tabpanel" aria-labelledby="cafes-quentes-tab">
                <!-- Conteúdo para Cafés Quentes -->
                 <section class="menu">
      <div class="row">
        <!-- Card 1: Espresso -->
        <div class="col-md-4 mb-3">
          <div class="card mb-3 card-custom">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">ESPRESSO</h5>
                  <h5><span class="text-muted">(200 ML)</span></h5>
                  <p class="card-text"><strong>R$ 7,00</strong></p>
                  <p class="card-text">Potente e encorpado.</p>
                </div>
              </div>
              <div class="col-md-4">
                <img src="img/Espresso-sa.png" class="img-fluid rounded-start" alt="Espresso">
              </div>
            </div>
          </div>
        </div>

        <!-- Card 2: Americano -->
        <div class="col-md-4 mb-3">
          <div class="card mb-3 card-custom">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">AMERICANO</h5>
                  <h5><span class="text-muted">(200 ML)</span></h5>
                  <p class="card-text"><strong>R$ 9,00</strong></p>
                  <p class="card-text">Espresso duplo suavizado com água.</p>
                </div>
              </div>
              <div class="col-md-4">
                <img src="img/americano-sa.png" class="img-fluid rounded-start" alt="Americano">
              </div>
            </div>
          </div>
        </div>

        <!-- Card 3: Flat White -->
        <div class="col-md-4 mb-3">
          <div class="card mb-3 card-custom">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">FLAT WHITE</h5>
                  <h5><span class="text-muted">(200 ML)</span></h5>
                  <p class="card-text"><strong>R$ 12,00</strong></p>
                  <p class="card-text">Espresso e leite vaporizado. Sabor do café mais delicado.</p>
                </div>
              </div>
              <div class="col-md-4">
                <img src="img/flatwhite-sa.png" class="img-fluid rounded-start" alt="Flat White">
              </div>
            </div>
          </div>
        </div>

        <!-- Card 4: Cappuccino -->
        <div class="col-md-4 mb-3">
          <div class="card mb-3 card-custom">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">CAPPUCCINO</h5>     
                  <h5><span class="text-muted">(300 ML)</span></h5>
                  <p class="card-text"><strong>R$ 14,00</strong></p>
                  <p class="card-text">Espresso com leite vaporizado, criando uma bebida cremosa e com o sabor do café intensamente presente.</p>
                </div>
              </div>
              <div class="col-md-4">
                <img src="img/capuccino-sa.png" class="img-fluid rounded-start" alt="Cappuccino">
              </div>
            </div>
          </div>
        </div>

        <!-- Card 5: Caramelo Macchiato -->
        <div class="col-md-4 mb-3">
          <div class="card mb-3 card-custom">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">CARAMELO MACCHIATO</h5> 
                    <h5><span class="text-muted">(300 ML)</span></h5>
                  <p class="card-text"><strong>R$ 14,00</strong></p>
                  <p class="card-text">Espresso, leite vaporizado, calda de caramelo e raspas de canela.</p>
                </div>
              </div>
              <div class="col-md-4">
                <img src="img/caramelomachiatto-sa.png" class="img-fluid rounded-start" alt="Caramelo Macchiato">
              </div>
            </div>
          </div>
        </div>

        <!-- Card 6: Latte -->
        <div class="col-md-4 mb-3">
          <div class="card mb-3 card-custom">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">LATTE</h5>
                  <h5><span class="text-muted">(300 ML)</span></h5> 
                  <p class="card-text"><strong>R$ 16,00</strong></p>
                  <p class="card-text">Espresso e leite vaporizado. Sabor do café mais suave.</p>
                </div>
              </div>
              <div class="col-md-4">
                <img src="img/latte-sa.webp" class="img-fluid rounded-start" alt="Latte">
              </div>
            </div>
          </div>
        </div>
        <!-- Card 7: Mocha -->
        <div class="col-md-4 mb-3">
          <div class="card mb-3 card-custom">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">MOCHA CHOCOLATE E CARAMELO</h5>
                  <h5><span class="text-muted">(300 ML)</span></h5>
                  <p class="card-text"><strong>R$ 18,00</strong></p>
                  <p class="card-text">Espresso, leite vaporizado e ganache de chocolate e raspas de caramelo.</p>
                </div>
              </div>
              <div class="col-md-4">
                <img src="img/mocha-sa.webp" class="img-fluid rounded-start" alt="Mocha">
              </div>
            </div>
          </div>
        </div>

        <!-- Card 7: Mocha -->
        <div class="col-md-4 mb-3">
          <div class="card mb-3 card-custom">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">MOCHA</h5>
                  <h5><span class="text-muted">(300 ML)</span></h5>
                  <p class="card-text"><strong>R$ 18,00</strong></p>
                  <p class="card-text">Espresso, leite vaporizado e ganache de chocolate.</p>
                </div>
              </div>
              <div class="col-md-4">
                <img src="img/mocha-sa.webp" class="img-fluid rounded-start" alt="Mocha">
              </div>
            </div>
          </div>
        </div>

        <!-- Card 8: Café Coado em V60 -->
        <div class="col-md-4 mb-3">
          <div class="card mb-3 card-custom">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">CAFÉ COADO EM V60</h5>
                  <h5><span class="text-muted">(300 ML)</span></h5>
                  <p class="card-text"><strong>R$ 18,00</strong></p>
                  <p class="card-text">Blend I - Encorpado e equilibrado. | Blend II - Frutado e delicado | Blend III - Elegante e Floral.</p>
                </div>
              </div>
              <div class="col-md-4">
                <img src="img/cafev60-sa.png" class="img-fluid rounded-start" alt="Café Coado em V60">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<!-- Fim Subcategorias Cafés Quentes -->

<!--Ínicio Subcategorias Cafés Gelados-->
            <div class="tab-pane fade" id="cafes-gelados" role="tabpanel" aria-labelledby="cafes-gelados-tab">
                <!-- Conteúdo para Cafés Gelados -->
                <section class="menu">
                    <!-- Itens do menu para Cafés Gelados -->
                  <!--INICIO CARDS MENUS-->
                  <!-- Card 1: Latte Tiramisu -->
                  <div class="row">
                            <!-- Card 1: Latte Gelado -->
                            <div class="col-md-4 mb-3">
                              <div class="card mb-3 card-custom">
                                <div class="row g-0">
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">LATTE GELADO</h5>
                                      <h5><span class="text-muted">(300 ML)</span></h5>
                                      <p class="card-text"><strong>R$ 20,00</strong></p>
                                      <p class="card-text">Bebida gelada à base de espresso, leite de amêndoas e creme.</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <img src="img/lattegelado-sa.webp" class="img-fluid rounded-start" alt="Latte Gelado">
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- Card 2: Choco Ice -->
                            <div class="col-md-4 mb-3">
                              <div class="card mb-3 card-custom">
                                <div class="row g-0">
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">CHOCO ICE</h5>
                                      <h5><span class="text-muted">(300 ML)</span></h5>
                                      <p class="card-text"><strong>R$ 18,00</strong></p>
                                      <p class="card-text">Bebida gelada à base de café, leite integral e chocolate.</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <img src="img/chocoice-sa.webp" class="img-fluid rounded-start" alt="Choco Ice">
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- Card 3: Iced Latte -->
                            <div class="col-md-4 mb-3">
                              <div class="card mb-3 card-custom">
                                <div class="row g-0">
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">ICED LATTE</h5>
                                      <h5><span class="text-muted">(300 ML)</span></h5>
                                      <p class="card-text"><strong>R$ 16,00</strong></p>
                                      <p class="card-text">Expresso, leite fresco e gelo.</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <img src="img/icedlatte-sa.webp" class="img-fluid rounded-start" alt="Iced Latte">
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- Card 4: Iced Latte Chai -->
                            <div class="col-md-4 mb-3">
                              <div class="card mb-3 card-custom">
                                <div class="row g-0">
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">ICED LATTE CHAI</h5>
                                      <h5><span class="text-muted">(300 ML)</span></h5>
                                      <p class="card-text"><strong>R$ 19,00</strong></p>
                                      <p class="card-text">Expresso, leite vaporizado e especiarias chai.</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <img src="img/icedchailatte-sa.webp" class="img-fluid rounded-start" alt="Iced Latte Chai">
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- Card 5: Frappé Chocolate -->
                            <div class="col-md-4 mb-3">
                              <div class="card mb-3 card-custom">
                                <div class="row g-0">
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">FRAPPÉ CHOCOLATE</h5>
                                      <h5><span class="text-muted">(400 ML)</span></h5>
                                      <p class="card-text"><strong>R$ 18,00</strong></p>
                                      <p class="card-text">Bebida gelada de frappé com chocolate, café e chantilly.</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <img src="img/frappechocolate-sa.webp" class="img-fluid rounded-start" alt="Frappé Chocolate">
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- Card 6: Frappé Caramelo -->
                            <div class="col-md-4 mb-3">
                              <div class="card mb-3 card-custom">
                                <div class="row g-0">
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">FRAPPÉ CARAMELO</h5>
                                      <h5><span class="text-muted">(400 ML)</span></h5>
                                      <p class="card-text"><strong>R$ 18,00</strong></p>
                                      <p class="card-text">Bebida gelada com caramelo, café e chantilly.</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <img src="img/frappecaramelo-sa.webp" class="img-fluid rounded-start" alt="Frappé Caramelo">
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- Card 7: Frappé Oreo -->
                            <div class="col-md-4 mb-3">
                              <div class="card mb-3 card-custom">
                                <div class="row g-0">
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">FRAPPÉ OREO</h5>
                                      <h5><span class="text-muted">(400 ML)</span></h5>
                                      <p class="card-text"><strong>R$ 21,00</strong></p>
                                      <p class="card-text">Bebida gelada com pedaços de Oreo, café e chantilly.</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <img src="img/frappeoreo-sa.webp" class="img-fluid rounded-start" alt="Frappé Oreo">
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- Card 8: Frappé Paçoca -->
                            <div class="col-md-4 mb-3">
                              <div class="card mb-3 card-custom">
                                <div class="row g-0">
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">FRAPPÉ PAÇOCA</h5>
                                      <h5><span class="text-muted">(400 ML)</span></h5>
                                      <p class="card-text"><strong>R$ 21,00</strong></p>
                                      <p class="card-text">Bebida gelada com paçoca, café e chantilly.</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <img src="img/frappepacoca-sa.webp" class="img-fluid rounded-start" alt="Frappé Paçoca">
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div>
                </section>
            </div>
                </div>
<!--Fim Subcategorias Cafés Gelados-->
<!-- Fim Categorias Cafés --> 


<!-- Categoria Chás -->
                    <div class="tab-pane fade" id="chas" role="tabpanel"              aria-labelledby="chas-tab">          
  <!--Ínicio Subcategorias Chás Matte-->
              <div class="tab-content" id="chasTabContent">
              <div class="tab-pane fade show active" id="chas-mate" role="tabpanel" aria-labelledby="chas-mate-tab">
                  <!-- Conteúdo para Chás Matte -->
                    <section class="menu">
                      <!-- Itens do menu para Chás Matte -->
                      <div class="row">
                      <!-- Card Chá de Limão -->
                      <div class="col-md-4 mb-3">
                        <div class="card mb-3 card-custom">
                          <div class="row g-0">
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">CHÁ DE LIMÃO</h5>
                                <p class="card-text"><strong>R$ 9,00</strong></p>
                                <p class="card-text">Infusão de limão, revigorante e refrescante para o corpo e a mente, perfeita tanto quente quanto gelada.</p>
                                <p class="card-text"><small class="text-muted">Vegano</small></p>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <img src="img/chalimao-sa.webp" class="img-fluid rounded-start" alt="Chá de Limão">
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Card Chá de Hibisco -->
                      <div class="col-md-4 mb-3">
                        <div class="card mb-3 card-custom">
                          <div class="row g-0">
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">CHÁ DE HIBISCO</h5>
                                <p class="card-text"><strong>R$ 11,00</strong></p>
                                <p class="card-text">Chá de hibisco, levemente cítrico e refrescante.</p>
                                <p class="card-text"><small class="text-muted">Vegano</small></p>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <img src="img/cháhibisco-sa.webp" class="img-fluid rounded-start" alt="Chá de Hibisco">
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Card Chá de Maçã Verde -->
                      <div class="col-md-4 mb-3">
                        <div class="card mb-3 card-custom">
                          <div class="row g-0">
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">CHÁ DE MAÇÃ VERDE</h5>
                                <p class="card-text"><strong>R$ 9,00</strong></p>
                                <p class="card-text">Infusão de maçã verde, com sabor suave e adocicado.</p>
                                <p class="card-text"><small class="text-muted">Vegano</small></p>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <img src="img/chamaça-sa.webp" class="img-fluid rounded-start" alt="Chá de Maçã Verde">
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Card Chá de Maracujá -->
                      <div class="col-md-4 mb-3">
                        <div class="card mb-3 card-custom">
                          <div class="row g-0">
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">CHÁ DE MARACUJÁ</h5>
                                <p class="card-text"><strong>R$ 9,00</strong></p>
                                <p class="card-text">Infusão de maracujá fresco com limão, revigorante e aromático.</p>
                                <p class="card-text"><small class="text-muted">Vegano</small></p>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <img src="img/chamaracuja-sa.webp" class="img-fluid rounded-start" alt="Chá de Maracujá">
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Card Chá de Cranberry -->
                      <div class="col-md-4 mb-3">
                        <div class="card mb-3 card-custom">
                          <div class="row g-0">
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">CHÁ DE CRANBERRY</h5>
                                <p class="card-text"><strong>R$ 11,00</strong></p>
                                <p class="card-text">Infusão de cranberry, rica em sabor e antioxidantes, deliciosa quente ou gelada para qualquer momento do dia.</p>
                                <p class="card-text"><small class="text-muted">Vegano</small></p>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <img src="img/chacramberry-sa.webp" class="img-fluid rounded-start" alt="Chá de Cranberry">
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Card Chá de Pêssego -->
                      <div class="col-md-4 mb-3">
                        <div class="card mb-3 card-custom">
                          <div class="row g-0">
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">CHÁ PÊSSEGO</h5>
                                <p class="card-text"><strong>R$ 9,00</strong></p>
                                <p class="card-text">Infusão de pêssego, suave e doce, perfeita quente ou gelada para uma experiência de sabor irresistível.</p>
                                <p class="card-text"><small class="text-muted">Vegano</small></p>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <img src="img/chapessego-sa.webp" class="img-fluid rounded-start" alt="Chá Pêssego">
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Card Chá de Morango -->
                      <div class="col-md-4 mb-3">
                        <div class="card mb-3 card-custom">
                          <div class="row g-0">
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">CHÁ MORANGO</h5>
                                <p class="card-text"><strong>R$ 11,00</strong></p>
                                <p class="card-text">Infusão de morango, vibrante e frutada, deliciosa quente ou gelada, trazendo frescor a cada gole.</p>
                                <p class="card-text"><small class="text-muted">Vegano</small></p>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <img src="img/chamorango-sa.webp" class="img-fluid rounded-start" alt="Chá de Morango">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </section>
              </div>
  <!--Fim Subcategorias Chás Quentes-->
          </div>
        </div> 
<!--Fim Categoria Chás-->


<!-- Categoria: Smoothies -->
                      <div class="tab-pane fade" id="smoothies" role="tabpanel" aria-labelledby="smoothies-tab">
        <!-- Conteúdo para Smoothies -->
                      <section class="menu">
                    <!-- Itens do menu para Smoothies -->
                          <!-- Card para Smoothie de Frutas Vermelhas -->
                                    <div class="row">
                                    <!-- Card Smoothie de Morango -->
                                    <div class="col-md-4 mb-3">
                                      <div class="card mb-3 card-custom">
                                        <div class="row g-0">
                                          <div class="col-md-8">
                                            <div class="card-body">
                                              <h5 class="card-title">SMOOTHIE DE MORANGO</h5>
                                              <h5><span class="text-muted">(400 ML)</span></h5>
                                              <p class="card-text"><strong>R$ 14,00</strong></p>
                                              <p class="card-text">Combinação refrescante de morangos frescos, batidos com iogurte natural e um toque de mel.</p>
                                              <p class="card-text"><small class="text-muted">Não Vegano</small></p>
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <img src="img/smootiemorango-sa.webp" class="img-fluid rounded-start" alt="Smoothie de Morango">
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Card Smoothie de Maracujá -->
                                    <div class="col-md-4 mb-3">
                                      <div class="card mb-3 card-custom">
                                        <div class="row g-0">
                                          <div class="col-md-8">
                                            <div class="card-body">
                                              <h5 class="card-title">SMOOTHIE DE MARACUJÁ</h5>
                                               <h5><span class="text-muted">(400 ML)</span></h5>
                                              <p class="card-text"><strong>R$ 14,00</strong></p>
                                              <p class="card-text">Smoothie vegano e sem lactose de maracujá, cremoso e tropical, batido com leite de coco e adoçado naturalmente.</p>
                                              <p class="card-text"><small class="text-muted">Vegano/Sem Lactose</small></p>
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <img src="img/smootiemaracuja-sa.webp" class="img-fluid rounded-start" alt="Smoothie de Maracujá">
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Card Smoothie de Ovomaltine -->
                                    <div class="col-md-4 mb-3">
                                      <div class="card mb-3 card-custom">
                                        <div class="row g-0">
                                          <div class="col-md-8">
                                            <div class="card-body">
                                              <h5 class="card-title">SMOOTHIE DE OVOMALTINE</h5>
                                               <h5><span class="text-muted">(400 ML)</span></h5>
                                              <p class="card-text"><strong>R$ 16,00</strong></p>
                                              <p class="card-text">Smoothie de Ovomaltine, uma deliciosa mistura de chocolate e malte, batido com leite e uma pitada de cremosidade.</p>
                                              <p class="card-text"><small class="text-muted">Não Vegano</small></p>
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <img src="img/smootieovomaltine-sa.webp" class="img-fluid rounded-start" alt="Smoothie de Ovomaltine">
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Card Smoothie de Nutella -->
                                    <div class="col-md-4 mb-3">
                                      <div class="card mb-3 card-custom">
                                        <div class="row g-0">
                                          <div class="col-md-8">
                                            <div class="card-body">
                                              <h5 class="card-title">SMOOTHIE DE NUTELLA</h5>
                                               <h5><span class="text-muted">(400 ML)</span></h5>
                                              <p class="card-text"><strong>R$ 16,00</strong></p>
                                              <p class="card-text">Smoothie de Nutella, uma indulgência cremosa de chocolate e avelã, batido com leite para um prazer irresistível.</p>
                                              <p class="card-text"><small class="text-muted">Não Vegano</small></p>
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <img src="img/smootienutella-sa.webp" class="img-fluid rounded-start" alt="Smoothie de Nutella">
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Card Smoothie de Amora -->
                                    <div class="col-md-4 mb-3">
                                      <div class="card mb-3 card-custom">
                                        <div class="row g-0">
                                          <div class="col-md-8">
                                            <div class="card-body">
                                              <h5 class="card-title">SMOOTHIE DE AMORA</h5>
                                               <h5><span class="text-muted">(400 ML)</span></h5>
                                              <p class="card-text"><strong>R$ 16,00</strong></p>
                                              <p class="card-text">Smoothie vegano e sem lactose de amora, refrescante e frutado, batido com leite de amêndoas.</p>
                                              <p class="card-text"><small class="text-muted">Vegano/Sem Lactose</small></p>
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <img src="img/smootieamora-sa.webp" class="img-fluid rounded-start" alt="Smoothie de Amora">
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Card Smoothie de Café com Chocolate -->
                                    <div class="col-md-4 mb-3">
                                      <div class="card mb-3 card-custom">
                                        <div class="row g-0">
                                          <div class="col-md-8">
                                            <div class="card-body">
                                              <h5 class="card-title">SMOOTHIE DE CAFÉ COM CHOCOLATE</h5>
                                               <h5><span class="text-muted">(400 ML)</span></h5>
                                              <p class="card-text"><strong>R$ 16,00</strong></p>
                                              <p class="card-text">Smoothie de café com chocolate, uma mistura irresistível de café encorpado e chocolate cremoso, batido com leite para uma experiência rica e reconfortante.</p>
                                              <p class="card-text"><small class="text-muted">Não Vegano</small></p>
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <img src="img/smootiecafechoc.webp" class="img-fluid rounded-start" alt="Smoothie de Café com Chocolate">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>    
                      </section>
                      </div>
<!--Fim Categoria: Smoothies -->


<!-- Categoria: Sobremesas -->
                      <div class="tab-pane fade" id="sobremesas" role="tabpanel" aria-labelledby="sobremesas-tab">
                              <!-- Subcategorias para Sobremesas -->
                              <ul class="nav nav-tabs mb-3" id="sobremesasTab" role="tablist">
                                  <li class="nav-item" role="presentation">
                                      <a class="nav-link active custom-text" id="tortas-tab" data-bs-toggle="tab" href="#tortas" role="tab" aria-controls="tortas" aria-selected="true">Tortas e Bolos</a>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                      <a class="nav-link custom-text" id="cookies-tab" data-bs-toggle="tab" href="#cookies" role="tab" aria-controls="cookies" aria-selected="false">Cookies</a>
                                  </li>
                              </ul>
 <!--Ínicio Subcategorias Sobremesas Tortas e Bolos-->
                      <div class="tab-content" id="sobremesasTabContent">
                                <div class="tab-pane fade show active" id="tortas" role="tabpanel" aria-labelledby="tortas-tab">
                                      <!-- Conteúdo para Tortas e Bolos -->
                              <section class="menu">
                                    <!-- Itens do menu para Tortas e Bolos -->
                                    <!-- Card para Torta de Nozes -->
                                 <div class="row">
                                  <!-- Card Bolo de Café com Nozes -->
                                  <div class="col-md-4 mb-3">
                                    <div class="card mb-3 card-custom">
                                      <div class="row g-0">
                                        <div class="col-md-8">
                                          <div class="card-body">
                                            <h5 class="card-title">BOLO DE CAFÉ COM NOZES</h5>
                                            <p class="card-text"><strong>R$ 26,00</strong></p>
                                            <p class="card-text">Bolo de café com nozes, uma combinação perfeita de café intenso e crocantes nozes, resultando em uma sobremesa irresistivelmente rica e saborosa.</p>
                                            <p class="card-text"><small class="text-muted">Não Vegano</small></p>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <img src="img/bolodecafe-sa.webp" class="img-fluid rounded-start" alt="Bolo de Café com Nozes">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Card Bolo de Cacau -->
                                  <div class="col-md-4 mb-3">
      <div class="card mb-3 card-custom">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">BOLO DE CACAU</h5>
              <p class="card-text"><strong>R$ 26,00</strong></p>
              <p class="card-text">Bolo de cacau vegano, coberto com uma camada de ganache de chocolate e decorada com gotas de chocolate.</p>
              <p class="card-text"><small class="text-muted">Vegano</small></p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="img/bolodecacau-sa.webp" class="img-fluid rounded-start" alt="Bolo de Cacau">
          </div>
        </div>
      </div>
                                  </div>
                                  <!-- Card Bolo de Cenoura -->
                                  <div class="col-md-4 mb-3">
      <div class="card mb-3 card-custom">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">BOLO DE CENOURA</h5>
              <p class="card-text"><strong>R$ 26,00</strong></p>
              <p class="card-text">Bolo de cenoura, delicadamente macio e saboroso, com uma combinação perfeita de cenoura fresca e especiarias, coberto com uma cobertura leve e doce.</p>
              <p class="card-text"><small class="text-muted">Não Vegano</small></p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="img/bolodecenoura-sa.webp" class="img-fluid rounded-start" alt="Bolo de Cenoura">
          </div>
        </div>
      </div>
                                  </div>
                                <!-- Card Cheesecake de Frutas Vermelhas -->
                                <div class="col-md-4 mb-3">
      <div class="card mb-3 card-custom">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">CHEESECAKE DE FRUTAS VERMELHAS</h5>
              <p class="card-text"><strong>R$ 24,00</strong></p>
              <p class="card-text">Cheesecake de frutas vermelhas, uma sobremesa cremosa e refrescante, com uma camada irresistível de frutas vermelhas frescas e uma base crocante.</p>
              <p class="card-text"><small class="text-muted">Não Vegano</small></p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="img/cheesecakefrutas-sa.webp" class="img-fluid rounded-start" alt="Cheesecake de Frutas Vermelhas">
          </div>
        </div>
      </div>
                                </div>
                                <!-- Card Cheesecake de Oreo -->
                                <div class="col-md-4 mb-3">
      <div class="card mb-3 card-custom">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">CHEESECAKE OREO</h5>
              <p class="card-text"><strong>R$ 24,00</strong></p>
              <p class="card-text">Torta tradicional de maçã, com massa crocante e recheio de maçãs cozidas, sem ingredientes de origem animal.</p>
              <p class="card-text"><small class="text-muted">Não Vegano</small></p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="img/cheescakeoreo-sa.webp" class="img-fluid rounded-start" alt="Cheesecake de Oreo">
          </div>
        </div>
      </div>
                                </div>
                                <!-- Card Cheesecake de Caramelo -->
                                <div class="col-md-4 mb-3">
      <div class="card mb-3 card-custom">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">CHEESECAKE DE CARAMELO</h5>
              <p class="card-text"><strong>R$ 24,00</strong></p>
              <p class="card-text">Cheesecake de caramelo com raspas de amendoim, uma combinação decadente de caramelo suave e chocolate crocante, criando uma sobremesa irresistível.</p>
              <p class="card-text"><small class="text-muted">Não Vegano</small></p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="img/caramelapple-sa.webp" class="img-fluid rounded-start" alt="Cheesecake de Caramelo">
          </div>
        </div>
      </div>
                                </div>
                              <!-- Card Cheesecake de Doce de Leite -->
                              <div class="col-md-4 mb-3">
      <div class="card mb-3 card-custom">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">CHEESECAKE DE DOCE DE LEITE</h5>
              <p class="card-text"><strong>R$ 24,00</strong></p>
              <p class="card-text">Cheesecake de doce de leite, uma delícia cremosa com o sabor rico e caramelizado do doce de leite, perfeito para um toque indulgente.</p>
              <p class="card-text"><small class="text-muted">Não Vegano</small></p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="img/cheescake-sa.webp" class="img-fluid rounded-start" alt="Cheesecake de Doce de Leite">
          </div>
        </div>
      </div>
                              </div>
                              <!-- Card Torta de Banana -->
                              <div class="col-md-4 mb-3">
      <div class="card mb-3 card-custom">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">TORTA DE BANANA</h5>
              <p class="card-text"><strong>R$ 24,00</strong></p>
              <p class="card-text">Torta de banana vegana, aromatizada com um toque sutil de especiarias, com uma base crocante e um recheio suave e saboroso.</p>
              <p class="card-text"><small class="text-muted">Vegano</small></p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="img/tortabanana-sa.webp" class="img-fluid rounded-start" alt="Torta de Banana">
          </div>
        </div>
      </div>
                              </div>
                              <!-- Card para Brownie -->
                              <div class="col-md-4 mb-3">
  <div class="card mb-3 card-custom">
    <div class="row g-0">
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">BROWNIE</h5>
          <p class="card-text"><strong>R$ 21,00</strong></p>
          <p class="card-text">Brownie de chocolate meio amargo com açúcar mascavo para um toque adoçado especial.</p>
          <p class="card-text"><small class="text-muted">Não Vegano</small></p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="img/brownie-sa.webp" class="img-fluid rounded-start" alt="Brownie">
      </div>
    </div>
  </div>
                              </div>
                              </section>                                       
                                </div>
            <!--Fim Subcategorias Sobremesas Tortas e Bolos-->
          

 <!--Ínicio Subcategorias Sobremesas Cookies-->
                      <div class="tab-pane fade" id="cookies" role="tabpanel" aria-labelledby="cookies-tab">
                          <!-- Conteúdo para Cookies -->
                            <section class="menu">
                                <!-- Itens do menu para Cookies -->
                                <!-- Card para Cookies de Chocolate -->
           <div class="container">
  <div class="row">
    <!-- Card para Cookies de Chocolate -->
    <div class="col-md-4 mb-3">
      <div class="card mb-3 card-custom">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">COOKIE DE CHOCOLATE</h5>
              <p class="card-text"><strong>R$ 7,00</strong></p>
              <p class="card-text">Cookies crocantes de chocolate com pedaços generosos de chocolate meio-amargo.</p>
              <p class="card-text"><small class="text-muted">Não Vegano</small></p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="img/cookietradicional-sa.webp" class="img-fluid rounded-start" alt="Cookies de Chocolate">
          </div>
        </div>
      </div>
    </div>
    <!-- Card para Cookies de Chocolate -->

    <!-- Card para Cookies de Nutella -->
    <div class="col-md-4 mb-3">
      <div class="card mb-3 card-custom">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">COOKIE DE NUTELLA</h5>
              <p class="card-text"><strong>R$ 9,00</strong></p>
              <p class="card-text">Delicie-se com o Cookie Nutella! Feito com massa de cookie de alta qualidade e recheado com um cremoso recheio de Nutella, é perfeito como um lanche ou para acompanhar seu café.</p>
              <p class="card-text"><small class="text-muted">Não Vegano/Glúten/Lactose</small></p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="img/cookienutella-sa.webp" class="img-fluid rounded-start" alt="Cookies de Nutella">
          </div>
        </div>
      </div>
    </div>
    <!-- Card para Cookies de Nutella -->

    <!-- Card para Cookies de Brigadeiro de Caramelo e Coco -->
    <div class="col-md-4 mb-3">
      <div class="card mb-3 card-custom">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">COOKIE DE BRIGADEIRO DE CARAMELO E COCO</h5>
              <p class="card-text"><strong>R$ 7,00</strong></p>
              <p class="card-text">Cookies macios de brigadeiro de caramelo com flocos de coco.</p>
              <p class="card-text"><small class="text-muted">Não Vegano/Lactose</small></p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="img/cookiecoco-sa.webp" class="img-fluid rounded-start" alt="Cookies de Brigadeiro e Coco">
          </div>
        </div>
      </div>
    </div>
    <!-- Card para Cookies de Brigadeiro de Caramelo e Coco -->
  </div>
</div>
                            </section>
                        </div>
                      </div>
<!--Fim Subcategorias Sobremesas Cookies-->
                      </div>
<!--Fim Categoria Sobremesas-->


<!-- Categoria: Bebidas -->
                    <div class="tab-pane fade" id="bebidas" role="tabpanel" aria-labelledby="bebidas-tab">
                        <!-- Conteúdo para Bebidas -->
                        <section class="menu">
                            <!-- Itens do menu para Bebidas -->
                            <div class="row">
                              <!-- Card para Água Mineral Natural Sem Gás -->
                              <div class="col-md-4 mb-3">
                                <div class="card mb-3 card-custom">
                                  <div class="row g-0">
                                    <div class="col-md-8">
                                      <div class="card-body">
                                        <h5 class="card-title">ÁGUA MINERAL NATURAL SEM GÁS</h5>
                                        <h5><span class="text-muted"> (500 ML)</span></h5>
                                        <p class="card-text"><strong>R$ 6,40</strong></p>
                                        <p class="card-text">Água s/ Gás.</p>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <img src="img/aguasemgas-sa.webp" class="img-fluid rounded-start" alt="Água Mineral Natural Sem Gás">
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <!-- Card para Água Mineral Natural com Gás -->
                              <div class="col-md-4 mb-3">
                                <div class="card mb-3 card-custom">
                                  <div class="row g-0">
                                    <div class="col-md-8">
                                      <div class="card-body">
                                        <h5 class="card-title">ÁGUA MINERAL NATURAL COM GÁS</h5>                                        <h5><span class="text-muted"> (500 ML)</span></h5>
                                        <p class="card-text"><strong>R$ 7,40</strong></p>
                                        <p class="card-text">Água c/ Gás.</p>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <img src="img/aguacomgas-sa.webp" class="img-fluid rounded-start" alt="Água Mineral Natural Com Gás">
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <!-- Card para Suco de Laranja Natural -->
                              <div class="col-md-4 mb-3">
                                <div class="card mb-3 card-custom">
                                  <div class="row g-0">
                                    <div class="col-md-8">
                                      <div class="card-body">
                                        <h5 class="card-title">SUCO DE LARANJA NATURAL</h5>                                        <h5><span class="text-muted"> (500 ML)</span></h5>
                                        <p class="card-text"><strong>R$ 14,90</strong></p>
                                        <p class="card-text">Refresque-se com o sabor vibrante do suco de laranja, uma explosão de frescor e energia em cada gole.</p>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <img src="img/sucolaranja-sa.webp" class="img-fluid rounded-start" alt="Suco de Laranja Natural">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <!-- Card para Suco de Laranja e Morango Natural -->
                              <div class="col-md-4 mb-3">
                                <div class="card mb-3 card-custom">
                                  <div class="row g-0">
                                    <div class="col-md-8">
                                      <div class="card-body">
                                        <h5 class="card-title">SUCO DE LARANJA COM CALDA DE MORANGO NATURAL</h5>                                        <h5><span class="text-muted"> (500 ML)</span></h5>
                                        <p class="card-text"><strong>R$ 15,90</strong></p>
                                        <p class="card-text">Refresque-se com o sabor vibrante do suco de laranja, uma explosão de frescor e energia em cada gole, com a adição de calda de morango que realça o sabor e traz um toque doce e vibrante.</p>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <img src="img/sucolarango-sa.webp" class="img-fluid rounded-start" alt="Suco de Laranja com Calda de Morango Natural">
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <!-- Card para Slushie de Morango -->
                              <div class="col-md-4 mb-3">
                                <div class="card mb-3 card-custom">
                                  <div class="row g-0">
                                    <div class="col-md-8">
                                      <div class="card-body">
                                        <h5 class="card-title">SLUSHIE DE MORANGO</h5>                                        <h5><span class="text-muted"> (500 ML)</span></h5>
                                        <p class="card-text"><strong>R$ 15,90</strong></p>
                                        <p class="card-text">Uma explosão de frescor em cada gole, com o sabor doce e vibrante do morango.</p>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <img src="img/slushiemorango-sa.webp" class="img-fluid rounded-start" alt="Slushie de Morango">
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <!-- Card para Slushie de Maracujá -->
                              <div class="col-md-4 mb-3">
                                <div class="card mb-3 card-custom">
                                  <div class="row g-0">
                                    <div class="col-md-8">
                                      <div class="card-body">
                                        <h5 class="card-title">SLUSHIE DE MARACUJÁ</h5>                                        <h5><span class="text-muted"> (500 ML)</span></h5>
                                        <p class="card-text"><strong>R$ 15,90</strong></p>
                                        <p class="card-text">Uma explosão de frescor e energia em cada gole, com o sabor intenso do maracujá.</p>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <img src="img/SlushieMaracuja-sa.webp" class="img-fluid rounded-start" alt="Slushie de Maracujá">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <!-- Card para Slushie de Maracujá e Melancia -->
                              <div class="col-md-4 mb-3">
                                <div class="card mb-3 card-custom">
                                  <div class="row g-0">
                                    <div class="col-md-8">
                                      <div class="card-body">
                                        <h5 class="card-title">SLUSHIE DE MARACUJÁ E MELANCIA</h5>                                        <h5><span class="text-muted"> (500 ML)</span></h5>
                                        <p class="card-text"><strong>R$ 15,90</strong></p>
                                        <p class="card-text">Uma combinação refrescante de maracujá e melancia, oferecendo um sabor tropical e doce.</p>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <img src="img/slushiemaracujaemelancia-sa.webp" class="img-fluid rounded-start" alt="Slushie de Maracujá e Melancia">
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <!-- Card para Slushie de Morango e Maracujá -->
                              <div class="col-md-4 mb-3">
                                <div class="card mb-3 card-custom">
                                  <div class="row g-0">
                                    <div class="col-md-8">
                                      <div class="card-body">
                                        <h5 class="card-title">SLUSHIE DE MORANGO E MARACUJÁ</h5>                                        <h5><span class="text-muted"> (500 ML)</span></h5>
                                        <p class="card-text"><strong>R$ 15,90</strong></p>
                                        <p class="card-text">A combinação perfeita de morango e maracujá, proporcionando um sabor frutado e refrescante.</p>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <img src="img/slushiemorangomaracuja-sa.webp" class="img-fluid rounded-start" alt="Slushie de Morango e Maracujá">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <!-- Card para Soda Italiana de Maracujá -->
                          <div class="col-md-4 mb-3">
                            <div class="card mb-3 card-custom">
                              <div class="row g-0">
                                <div class="col-md-8">
                                  <div class="card-body">
                                    <h5 class="card-title">SODA ITALIANA DE MARACUJÁ</h5>                                        <h5><span class="text-muted"> (500 ML)</span></h5>
                                    <p class="card-text"><strong>R$ 18,00</strong></p>
                                    <p class="card-text">Uma soda italiana refrescante com o sabor exótico do maracujá, oferecendo um equilíbrio perfeito entre acidez e doçura.</p>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <img src="img/sodamaracuja-sa.webp" class="img-fluid rounded-start" alt="Soda Italiana de Maracujá">
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Card para Soda Italiana de Morango -->
                          <div class="col-md-4 mb-3">
                            <div class="card mb-3 card-custom">
                              <div class="row g-0">
                                <div class="col-md-8">
                                  <div class="card-body">
                                    <h5 class="card-title">SODA ITALIANA DE MORANGO</h5>                                        <h5><span class="text-muted"> (500 ML)</span></h5>
                                    <p class="card-text"><strong>R$ 18,00</strong></p>
                                    <p class="card-text">Uma soda italiana com o sabor doce e suculento do morango, ideal para um refresco vibrante e delicioso.</p>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <img src="img/sodamorango-sa.webp" class="img-fluid rounded-start" alt="Soda Italiana de Morango">
                                </div>
                              </div>
                            </div>
                          </div>
                        <!-- Card para Soda ICranberry -->
                        <div class="col-md-4 mb-3">
                          <div class="card mb-3 card-custom">
                            <div class="row g-0">
                                                    <div class="col-md-8">
                                                      <div class="card-body">
                                                        <h5 class="card-title">SODA ITALIANA DE CRANBERRY</h5>                          <h5><span class="text-muted"> (500 ML)</span></h5>
                                                        <p class="card-text"><strong>R$ 18,00</strong></p>
                                                        <p class="card-text">Uma soda italiana com o sabor ácido e refrescante do cranberry, proporcionando um toque de sofisticação e energia.</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                      <img src="img/sodacramberry-sa.webp" class="img-fluid rounded-start" alt="Soda Italiana de Cranberry">
                                                    </div>
                            </div>
                          </div>
                        </div>
                        <!-- Card para Soda Italiana de Limão -->
                        <div class="col-md-4 mb-3">
                          <div class="card mb-3 card-custom">
                            <div class="row g-0">     
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">SODA ITALIANA DE LIMÃO</h5> 
                                  <h5><span class="text-muted"> (500 ML)</span></h5>
                                  <p class="card-text"><strong>R$ 18,00</strong></p>
                                  <p class="card-text">Uma soda italiana refrescante com o sabor intenso do                         limão, ideal para quem busca um toque cítrico e revigorante.</p>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <img src="img/sodalimao-sa.webp" class="img-fluid rounded-start" alt="Soda Italiana de Limão">
                              </div>
                            </div>
                          </div>
                        </div>
                          </section>
                          </div>
<!-- Fim Categoria Bebidas -->
                <!-- FINAL CARDAPIO -->
              </div>
              </section>
<!-- FINAL CARDAPIO -->



<!-- Footer-->
    <footer id="page-contato" class="footer text-center">
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

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
