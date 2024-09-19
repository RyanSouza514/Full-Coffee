<x-layoutindex>



    <!-- @vite('resources\assets\css\cardapio.css') -->
    <!-- Carrossel com Imagem -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ Vite::asset('resources/assets/img/img-cardapio/CarrouselCardápio-img.svg')}}"
                    class="d-block w-100 img-fluid" alt="Imagem do carrossel">
                <div class="carousel-caption d-none d-md-block mb-5">
                </div>
            </div>
        </div>
        <!-- Indicadores do carrossel -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
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
                @csrf
                <input type="text" id="search" name="query" class="form-control" placeholder="Buscar">
                <!-- Campo de entrada de texto para pesquisa -->
                <button class="btn btn-outline-secondary input-group-text search-icon" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" fill="currentColor"
                        class="bi bi-search-heart" viewBox="0 0 16 16">
                        <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018" />
                        <path
                            d="M13 6.5a6.47 6.47 0 0 1-1.258 3.844q.06.044.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11" />
                    </svg>
                </button>
            </form>
        </div>

        <!-- Navegação -->
        <!-- Comentário que indica a inclusão da navegação por categorias. -->
        <!-- Navegação -->
        <!-- Comentário que indica a inclusão da navegação por categorias. -->
        <div class="container mb-1 ">
            <div class="overflow-x-auto custom-overflow custom-overflow-Categorias">
                <nav class="nav nav-pills mb-2 flex-nowrap" id="myPills" role="tablist">
                    <!-- Início da navegação usando "nav-pills" para criar botões de navegação e "nav-justified" para distribuir igualmente os links. -->
                    @foreach ($categoria as $cat)
                        <a class="nav-link active ms-1 me-1 text-nowrap" id="cafes-tab" href="{{Route('cardapio.index')}}?categoriaId={{$cat->id}}"
                            >
                            <!-- <span class="icon">&#x2615;</span> -->
                            <!-- Ícone de café representado por um código Unicode. -->
                            <span class="text">{{$cat->nome_categoria}}</span>
                            <!-- Texto associado ao ícone, representando a categoria "Cafés". -->
                        </a>
                    @endforeach
                </nav>
            </div>
        </div>

        <!-- Tabs -->
        <!-- Conteúdo das categorias -->

        <div class="tab-content" id="myPillsContent">
            <!-- Categoria: Cafés -->
            <div class="tab-pane fade show active" id="cafes" role="tabpanel" aria-labelledby="cafes-tab">
                <!-- Subcategorias para Cafés -->
                <div class="container mb-2">
                    <div class="overflow-x-auto custom-overflow custom-overflow-SubCategorias">
                        <ul class="nav nav-tabs mb-2 flex-nowrap text-nowrap" id="cafesTab" role="tablist">
                            @foreach ($subcategoria as $sub)
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link custom-text" id="cafes-quentes-tab"
                                        href="{{Route('cardapio.index')}}?SubcategoriaId={{$sub->id}}">
                                        {{$sub->nome_subcategoria}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- Fim abas de Subcategorias para Cafés -->

                <!--Ínicio Subcategorias Cafés Quentes-->
                <div class="tab-content" id="cafesTabContent">
                    <div class="tab-pane fade show active" id="cafes-quentes" role="tabpanel"
                        aria-labelledby="cafes-quentes-tab">
                        <!-- Conteúdo para Cafés Quentes -->
                        <section class="menu">
                            <div class="row">
                                <!-- Card 1: Espresso -->
                                @foreach ($itensCardapio as $itens)
                                <div class="col-md-4 mb-3">
                                    <div class="card mb-3 card-custom">
                                        <div class="row g-0" >
                                            <div class="col-md-8">
                                                <div class="card-body" >
                                                    <h5 class="card-title">{{$itens->nome_produto}}</h5>
                                                    <!-- <h5><span class="text-muted">(200 ML)</span></h5> -->
                                                    <p class="card-text"><strong>R${{$itens->preco}}</strong></p>
                                                    <p class="card-text">{{$itens->descricao}}</p>
                                                    <!-- <p class="card-text">{{$itens->observacao}}</p> -->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="{{URL::asset('img/cardapio/'.$itens->imagem)}}"
                                                    class="img-fluid rounded-start" alt="Espresso">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach   
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FINAL CARDAPIO -->


</x-layoutindex>