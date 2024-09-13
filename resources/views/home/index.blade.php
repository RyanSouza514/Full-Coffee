<x-layoutindex>

  <!-- Carrousel com Vídeo -->
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <video class="d-block w-100" autoplay loop muted>
          <source src="{{Vite::asset('resources/assets/video/video-carrousel.mp4')}}" type="video/mp4">
          Seu navegador não suporta o vídeo.
        </video>
        <div class="carousel-caption d-none d-md-block mb-5">
          <button type="button" class="btn btn-custom btn-lg pe-4 ps-4 rounded-pill">Descubra Agora</button>
        </div>
      </div>
    </div>
    <!-- Indicadores do carrossel -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
    </div>
  </div>
  <!-- FINAL Carrousel com Vídeo -->

  <!-- Seção Nossos Destaques -->
  <div id="destaques" class="container mt-5">
    <!-- Título da seção -->
    <div class="text-center mb-4">
      <h2 class="titulo">Nossos Destaques</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <!-- Card 1 -->
      <div class="col">
        <div class="card custom-card">
          <img src="{{Vite::asset('resources/assets/img/espresso.jpg')}}" class="card-img-top custom-img"
            alt="Café Espresso">
          <div class="card-body">
            <h5 class="card-title">Espresso com "S"</h5>
            <p class="card-text">Cada espresso é uma expressão pura de sabor, simples, mas extraordinariamente cremoso e
              intenso.</p>
            <a href="#cardapio.html" class="btn btn-primary custom-btn">Ver no Cardápio</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <!-- Card 3 -->
      <div class="col">
        <div class="card custom-card">
          <img src="{{Vite::asset('resources/assets/img/Torta de Nozes.jpg')}}" class="card-img-top custom-img"
            alt="Torta de Nozes">
          <div class="card-body">
            <h5 class="card-title">Crocância e Cremozidade</h5>
            <p class="card-text">Uma torta de nozes com a combinação perfeita de crocância e cremosidade, proporcionando
              um prazer a cada pedaço.</p>
            <a href="#" class="btn btn-primary custom-btn">Ver no Cardápio</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col">
        <div class="card custom-card">
          <img src="{{Vite::asset('resources/assets/img/Caramelo Machiatto.jpg')}}" class="card-img-top custom-img"
            alt="Smootie Caramelo Machiatto">
          <div class="card-body">
            <h5 class="card-title"> Frescor Vegano</h5>
            <p class="card-text">Um smoothie vegano de caramelo, aveia e leite de coco: uma combinação irresistível de
              cremosidade e sabor.</p>
            <a href="#page-cardapio" class="btn btn-primary custom-btn">Ver no Cardápio</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Fim Iniciando cards de Destaques-->



  <!-- Iniciando Seção Quem Somos -->
  <div id="quem-somos" class="container mt-5">

    <div class="row"><!-- Inicio ROW Quem somos-->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100"><!-- Inicio Quem Somos-->
        <h2 class="titulo">Quem Somos</h2>
        <hr class="linha">
        <p class="paragrafo">
          Bem-vindo à <strong>Full Coffee</strong>, um lugar onde cada xícara de café é preparada com paixão e
          dedicação. Nossa missão é proporcionar uma experiência única para nossos clientes, oferecendo cafés de alta
          qualidade e um ambiente acolhedor. Além de nossa seleção cuidadosamente escolhida de grãos, nossos baristas
          são treinados para garantir que cada bebida seja uma obra de arte, desde o expresso perfeito até as criações
          mais elaboradas. Venha e desfrute de momentos especiais em um espaço onde o aroma do café fresco se mistura
          com conversas inspiradoras e sorrisos calorosos.Acreditamos que cada visita deve ser especial, e nos
          esforçamos para que você se sinta parte de nossa família. Com um ambiente que mistura elegância e conforto,
          nossa cafeteria é o local ideal para relaxar e desfrutar de um café de excelência.
        </p>
      </div><!-- Final Quem Somos-->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200"><!-- Inicio Imagem Quem Somos-->
        <img src="{{Vite::asset('resources/assets/img/img-sobre.jpg')}}" class="img-fluid"
          alt="Imagem do Interior da Cafeteria Full Coffee">
      </div><!-- Final Imagem Sobre-->
    </div><!-- Fim ROW Quem somos -->

  </div><!-- Fim container -->



  <!--Iniciando a Seção Porque escolher a Full Coffee-->
  <section id="why-us" class="why-us section">
    <div class="container section-title" data-aos="fade-up">
      <h2 class="titulo"> Essência</h2>
      <div><span>Na <strong>Full Coffee</strong>, cada grão e xícara refletem nosso compromisso em oferecer uma
          experiência única, onde o café é mais que uma bebida; é uma arte e uma paixão que compartilhamos com nossos
          clientes.</span> <span class="description-title"></span>
      </div>
    </div>

    <div class="container">
      <div class="row gy-4">
        <!-- Card 1 -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <span>01</span>
            <h4><a href="" class="stretched-link">Missão</a></h4>
            <p>Nossa missão é oferecer cafés excepcionais e um atendimento impecável, criando um espaço onde nossos
              clientes se sintam em casa e possam desfrutar de momentos especiais.</p>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card-item">
            <span>02</span>
            <h4><a href="" class="stretched-link">Visão</a></h4>
            <p>Nossa visão é ser reconhecida como a melhor cafeteria da região, conhecida pela qualidade dos nossos
              produtos, pela inovação no cardápio e pela excelência no atendimento ao cliente.</p>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item">
            <span>03</span>
            <h4><a href="" class="stretched-link">Valores</a></h4>
            <p><strong>Qualidade:</strong> Utilizamos apenas os melhores grãos de café e ingredientes frescos.</p>
            <p><strong>Atendimento:</strong> Valorizamos cada cliente e nos esforçamos para proporcionar um serviço
              amigável e atencioso.</p>
            <p><strong>Sustentabilidade:</strong> Priorizamos práticas sustentáveis, desde a seleção de nossos
              fornecedores até a gestão dos resíduos.</p>
            <p><strong>Paixão:</strong> Amamos o que fazemos e isso se reflete em cada detalhe do nosso trabalho.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Finalizando Iniciando a Seção Porque escolher a Full Coffee-->



    <!-- Iniciando Seção Contato -->
    <section id="page-contato">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-7"> <!--Inicio Formulário Contato-->

            <form method="post" action="{{route('contato')}}">

              @csrf

              <h1 class="formulario_titulo">Envie sua mensagem</h1>

              <p class="mensagem_contato">Tem alguma dúvida ou quer falar conosco? Entre em contato com a nossa equipe,
                estamos prontos para ajudar!</p>
              @if($mensagem = Session::get("sucesso"))
          <div class="alert alert-success mt-3">{{$mensagem}}</div>
        @endif
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                <input required type="text" class="form-control" id="exampleFormControlInput1"
                  placeholder="Digite seu Nome" name="nome">
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Email:</label>
                <input required type="email" class="form-control" id="exampleFormControlInput2"
                  placeholder="Digite seu Email" name="email">
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Telefone:</label>
                <input required type="text" class="form-control" id="exampleFormControlInput3"
                  placeholder="Digite seu Telefone" name="telefone">
              </div>

              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Sua mensagem:</label>
                <textarea required class="form-control txt-area-size" id="exampleFormControlTextarea1" rows="3"
                  name="mensagem" maxlength="100"></textarea>
              </div>

              <div class="text-end mt-4 mb-3">
                <button class="btn btn-personalizado">Enviar Mensagem</button>
              </div>

            </form>
          </div> <!--Final Formulario-->


          <div class="col-12 col-sm-12 col-md-5 mt-5"> <!--Inicio Google Maps-->
            <iframe class="mapa-embed"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.8683763554345!2d-38.45904362508162!3d-12.980269387335813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161b1bacc7fbe1%3A0xe56ff87dd23b7afb!2sSesc%20Casa%20do%20Com%C3%A9rcio!5e0!3m2!1spt-BR!2sbr!4v1721851429817!5m2!1spt-BR!2sbr"
              width="100%" height="80%" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>


      </div>
      </div>
    </section>
    <!-- Finalizando Seção Contato -->


</x-layoutindex>