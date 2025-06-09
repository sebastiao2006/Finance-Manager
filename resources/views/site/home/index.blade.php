@extends('site.layouts.app')
@section('title', 'Meu Kumbu')
@section('content')

<main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section light-background" style="position: relative; width: 100%; min-height: 65vh; display: flex; align-items: center; justify-content: center; overflow: hidden;">

  <!-- Vídeo de fundo -->
  <video autoplay muted loop playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
    <source src="site/assets/img/angola.mp4" type="video/mp4">
    O teu navegador não suporta vídeo HTML5.
  </video>

  <!-- Conteúdo por cima do vídeo -->
  <div class="container d-flex align-items-center justify-content-center" style="height: auto; padding: 60px 20px; position: relative; z-index: 1;">
    <div class="text-center">
      <h1 style="color: white;">Bem-vindo ao Meu Kumbu</h1>
      <p style="color: white;">Organiza e controla as tuas finanças com facilidade.</p>
    </div>
  </div>

</section>




 
  {{-- <section id="featured-services" class="featured-services section">

        <div class="container">
      <div class="row gy-4">

        <div class="col-xl-3 col-md-6 d-flex" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-bullseye icon"></i></div> <!-- Crie objetivos -->
            <h4><a href="" class="stretched-link">Crie objetivos</a></h4>
            <p>Defina metas como juntar dinheiro para uma viagem, montar uma reserva de emergência ou pagar dívidas. O Meu Kumbu ajuda você a acompanhar o progresso.</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-kanban icon"></i></div> <!-- Planejamento -->
            <h4><a href="" class="stretched-link">Monte um planejamento</a></h4>
            <p>Organize seu orçamento mensal e veja quanto pode gastar por categoria. Evite surpresas e saiba exatamente para onde vai o seu dinheiro.</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-link-45deg icon"></i></div> <!-- Conecte suas contas -->
            <h4><a href="" class="stretched-link">Conecte suas contas</a></h4>
            <p>Lance suas receitas e despesas num só lugar. Categorize seus gastos e visualize o histórico de forma clara e organizada.</p>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-graph-up icon"></i></div> <!-- Acompanhe os resultados -->
            <h4><a href="" class="stretched-link">Acompanhe os seus resultados</a></h4>
            <p>Acesse gráficos e relatórios em tempo real. Veja quanto entrou, quanto saiu e onde pode melhorar sua gestão financeira.</p>
          </div>
        </div>

      </div>
    </div>


          </div>

        </div>

  </section>
 --}}
@php
    $section = \App\Models\HomeSection::first();
@endphp
  <section class="nubank-section">
{{--         <div class="nubank-content">
          <div class="nubank-text">
            <h1>O melhor cartão para<br>seu perfil</h1>
            <p>Sem anuidade, sem tarifas abusivas e<br>cheio de vantagens.</p>
            <a href="#" class="nubank-btn">Conheça os Melhores Cartões</a>
            <div class="nav-dots">
              <span class="dot active">&#10094;</span>
              <span class="dot">&#10095;</span>
            </div>
          </div>
          <div class="nubank-image">
            <img src="site/assets/img/cartao-06.png"  alt="Cartão Gabriela Lima" class="card1">
            <img src="site/assets/img/cartao2-06.png"alt="Cartão Lucas Oliveira" class="card2">
          </div>
        </div> --}}




@if($section)
    <div class="nubank-content">
        <div class="nubank-text">
            <h1>{{ $section->title }}</h1>
            <p>{!! nl2br(e($section->subtitle)) !!}</p>
            <a href="#" class="nubank-btn">Conheça os Melhores Cartões</a>
            <div class="nav-dots">
                <span class="dot active">&#10094;</span>
                <span class="dot">&#10095;</span>
            </div>
        </div>

        <div class="nubank-image">
            <img src="{{ asset('storage/' . $section->image1) }}" alt="Cartão 1" class="card1">
            <img src="{{ asset('storage/' . $section->image2) }}" alt="Cartão 2" class="card2">
        </div>
    </div>
@else
    <p>Conteúdo ainda não disponível.</p>
@endif




   <style>
    /* Reset e fonte */
 

      .nubank-section {
        background-color: #f8f8f8;
        padding: 60px 20px;
      }

      .nubank-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 1200px;
        margin: auto;
        flex-wrap: wrap;
      }

      .nubank-text {
        flex: 1;
        min-width: 280px;
        max-width: 500px;
      }

      .nubank-text h1 {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 20px;
        line-height: 1.2;
        color: #000;
      }

      .nubank-text p {
        font-size: 1.2rem;
        color: #000;
        margin-bottom: 30px;
        line-height: 1.5;
      }

      .nubank-btn {
        display: inline-block;
        background-color: #0a53d1;
        color: #fff;
        font-weight: bold;
        font-size: 1rem;
        padding: 14px 30px;
        border-radius: 999px;
        text-decoration: none;
        margin-bottom: 30px;
        transition: background 0.3s;
      }

      .nubank-btn:hover {
        background-color: #0a53d1;
      }

      .nav-dots {
        display: flex;
        gap: 10px;
        margin-top: 10px;
      }

      .dot {
        background: #e6e6e6;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        font-size: 16px;
        cursor: pointer;
      }

      .dot.active {
        background: #ccc;
      }

      .nubank-image {
        position: relative;
        flex: 1;
        min-width: 300px;
        display: flex;
        justify-content: center;
        margin-top: 30px;
      }

      .card1,
      .card2 {
        max-width: 220px;
        border-radius: 12px;
        /* box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15); */
      }

        .card1 {
          transform: rotate(-10deg);
          position: relative;
          z-index: 2;
        }

        .card2 {
          transform: rotate(5deg);
          position: absolute;
          right: 0;
          top: 20px;
          z-index: 1;
        }

        /* Responsivo */
        @media (max-width: 768px) {
          .nubank-content {
            flex-direction: column;
            text-align: center;
          }

          .nubank-text {
            max-width: 100%;
          }

          .nubank-image {
            flex-direction: column;
            align-items: center;
          }

          .card2 {
            position: relative;
            top: -10px;
            right: 0;
          }
        }

    </style>
</section>


<section  class="sequencia">
    <h1>Sua vida financeira organizada em um só lugar</h1>

  <div class="cards">
    <div class="card large">
      <div class="overlay">
        <p class="overlay-title">Banco</p>
        <p>Nacional de<br>Angola</p>
      </div>
    </div>
    <div class="card small"></div>
    <div class="card small"></div>
    <div class="card small"></div>
  </div>

  <div class="description">
    <p>Guarde dinheiro de maneira organizada<br>de acordo com seus objetivos.</p>
    <a href="#">Conheça as Caixinhas do Meu Kumbu</a>
  </div>


    <style>

   .sequencia {
      max-width: 1200px;
      margin: 0 auto;
      padding-left: 40px;
      padding-right: 40px;
    }


    h1 {
      font-size: 36px;
      font-weight: 700;
      margin-bottom: 30px;
    }

      .cards {
      display: flex;
      gap: 20px;
      margin-bottom: 30px;
      justify-content: flex-start; /* adiciona isso */
    }


    .card {
      height: 500px;
      border-radius: 30px;
      background-size: cover;
      background-position: center;
      position: relative;
      flex-shrink: 0;
    }

    .card.large {
      width: 380px;
      background-image: url('site/assets/img/capa 22.jpg');
    }

    .card.small {
      width: 200px;
    }

    .card:nth-child(2) {
      background-image: url('site/assets/img/capa 20.jpg');
    }

    .card:nth-child(3) {
      background-image: url('site/assets/img/capa 23.jpg');
    }

    .card:nth-child(4) {
      background-image: url('site/assets/img/capa 25.jpg');
    }

    .overlay {
      position: absolute;
      bottom: 20px;
      left: 20px;
      background: rgba(255, 255, 255, 0.75);
      padding: 15px;
      border-radius: 12px;
    }

    .overlay-title {
      font-weight: 600;
      margin-bottom: 5px;
    }

    .description p {
      font-weight: 600;
      font-size: 18px;
      margin-bottom: 10px;
    }

    .description a {
      color: #0a53d1;
      font-weight: 600;
      text-decoration: none;
    }

    /* Responsivo */
    @media (max-width: 768px) {
      .cards {
        flex-direction: column;
        align-items: center;
      }

      .card.large, .card.small {
        width: 100%;
      }
    }
  </style>
</section>


  <section id="about" class="about " style="background: #f8f8f8">
    <div class="container">

   <div class="row gy-3 origin invert">

    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos-delay="100">
      <div class="about-content ps-0 ps-lg-3">
        <h1>A segurança dos seus dados em primeiro lugar!</h1>
        <p>
          O Meu Kumbu possui medidas técnicas e administrativas com o objetivo de proteger seus dados pessoais, de acordo com a Lei Geral de Proteção de Dados (LGPD).
        </p>
           {{--         <ul>
          <li>
            <i class="bi bi-credit-card"></i>
            <div>
              <h3>Conecte suas contas e cartões</h3>
              <p>Saiba exatamente para onde seu dinheiro está indo com nossa integração automática.</p>
            </div>
          </li>
          <li>
            <i class="bi bi-piggy-bank"></i>
            <div>
              <h3>Planeje seus gastos e crie objetivos</h3>
              <p>Faça orçamentos mensais, mantenha seus gastos sob controle para juntar dinheiro e alcançar seus sonhos.</p>
            </div>
          </li>
        </ul> --}}
      </div>
    </div>

    <div class="col-lg-6" data-aos-delay="200">
      <img src="site/assets/img/pc.png" alt="" class="img-fluid">
    </div>

   </div>

   </div>

  </section>




  <!-- About Section -->
  <section id="about" class="about " style="background: #f8f8f8">

    <!-- Section Title -->
    <div class="container section-title" {{-- data-aos="fade-up" --}}>
     {{--       <h2>About</h2>
      <p><span>Find Out More</span> <span class="description-title">About Us</span></p> --}}
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-3">

        <div class="col-lg-6" {{-- data-aos="fade-up" --}} data-aos-delay="100">
          <img src="site/assets/img/capa 2.png" alt="" class="img-fluid">
        </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos-delay="200">
      <div class="about-content ps-0 ps-lg-3">
        <h1>Controle suas finanças em um só lugar</h1>
        <p>
          Com o Meu Kumbu, você centraliza toda a sua vida financeira num só lugar. Registre transações, acompanhe gastos e tome decisões mais inteligentes sobre seu dinheiro sem complicação.
        </p>
        <ul>
          <li>
            <i class="bi bi-journal-check"></i> <!-- Ícone atualizado -->
            <div>
              <h3>Registre receitas e despesas com facilidade</h3>
              <p>Cadastre tudo que entra e sai da sua conta, classifique por categoria e tenha uma visão clara dos seus hábitos financeiros.</p>
            </div>
          </li>
          <li>
            <i class="bi bi-bar-chart-line"></i> <!-- Ícone atualizado -->
            <div>
              <h3>Planeje seus gastos e crie objetivos</h3>
              <p>Faça orçamentos mensais, mantenha seus gastos sob controle para juntar dinheiro e alcançar seus sonhos.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>

    {{--             <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p> --}}
              </div>

            </div>
          </div>

        </div>



  </section><!-- /About Section -->

  


  <section class="features">
      <h1>Nossos principais recursos</h1>
      <p>Conheça os recursos que vão revolucionar seu controle financeiro.</p>

      <div class="features-grid">
        <div class="features-left">
          <div class="feature-item">
            <span class="icon"><i class="fas fa-link"></i></span>
            <div>
              <h3>Conexão Bancária <span class="badge">NOVO</span></h3>
              <p>Conecte contas e cartões para importar lançamentos direto do banco.</p>
            </div>
          </div>

          <div class="feature-item">
            <span class="icon"><i class="fas fa-building-columns"></i></span>
            <div>
              <h3>Controle de contas</h3>
              <p>Conta corrente, digital ou PJ? Gerencie todas no Organizze!</p>
            </div>
          </div>

          <div class="feature-item">
            <span class="icon"><i class="fas fa-bullseye"></i></span>
            <div>
              <h3>Limite de gastos</h3>
              <p>Defina o quanto gastar em cada categoria e economize sem esforço.</p>
            </div>
          </div>

{{--           <div class="feature-item">
            <span class="icon"><i class="fas fa-bell"></i></span>
            <div>
              <h3>Alertas</h3>
              <p>Receba alertas de todas as suas contas a pagar e dê adeus aos juros!</p>
            </div>
          </div> --}}
        </div>

        <div class="features-center">
          <img src="site/assets/img/pc.png" alt="App preview">
        </div>

        <div class="features-right">
          <div class="feature-item">
            <span class="icon"><i class="fas fa-chart-pie"></i></span>
            <div>
              <h3>Relatórios</h3>
              <p>Resumos incríveis, com gráficos simples e completos.</p>
            </div>
          </div>

          <div class="feature-item">
            <span class="icon"><i class="fas fa-layer-group"></i></span>
            <div>
              <h3>Criação de categorias</h3>
              <p>Crie suas próprias categorias de acordo com a sua necessidade.</p>
            </div>
          </div>

          <div class="feature-item">
            <span class="icon"><i class="fas fa-credit-card"></i></span>
            <div>
              <h3>Controle de cartões</h3>
              <p>O roxinho, o gold, o black… controle todos seus cartões em um único lugar.</p>
            </div>
          </div>

{{--           <div class="feature-item">
            <span class="icon"><i class="fas fa-desktop"></i> </span>
            <div>
              <h3>Multiplataforma</h3>
              <p>Acesse seu controle financeiro de onde estiver, do celular ou computador.</p>
            </div>
          </div> --}}
        </div>
      </div>
</section>



  <section id="about" class="about " style="background: #f8f8f8">
    <div class="container">

  <div class="row gy-3 origin invert">

    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos-delay="100">
      <div class="about-content ps-0 ps-lg-3">
        <h1>A segurança dos seus dados em primeiro lugar!</h1>
        <p>
          No Meu Kumbu, proteger suas informações é uma prioridade.
Utilizamos tecnologias seguras e boas práticas para garantir que seus dados estejam sempre protegidos contra acessos não autorizados, perda ou vazamento.
        </p>
{{--         <ul>
          <li>
            <i class="bi bi-credit-card"></i>
            <div>
              <h3>Conecte suas contas e cartões</h3>
              <p>Saiba exatamente para onde seu dinheiro está indo com nossa integração automática.</p>
            </div>
          </li>
          <li>
            <i class="bi bi-piggy-bank"></i>
            <div>
              <h3>Planeje seus gastos e crie objetivos</h3>
              <p>Faça orçamentos mensais, mantenha seus gastos sob controle para juntar dinheiro e alcançar seus sonhos.</p>
            </div>
          </li>
        </ul> --}}
      </div>
    </div>

    <div class="col-lg-6" data-aos-delay="200">
      <img src="site/assets/img/capa 3.png" alt="" class="img-fluid">
    </div>

  </div>

</div>

  </section>



<section class="blog-section">
  <div class="blog-header">
    <h2>{!! nl2br($blog->titulo ?? 'Fique por dentro<br>das novidades') !!}</h2>
    <div class="blog-controls">
      <button class="nav-btn">&lt;</button>
      <button class="nav-btn">&gt;</button>
    </div>
    <a href="{{ $blog->link_blog ?? '#' }}" class="blog-link">Ir para o blog</a>
  </div>

  <div class="blog-cards">
    @foreach($cards as $card)
    <div class="blog-card">
      <img src="{{ asset('storage/'.$card->imagem) }}" alt="">
      <h3>{{ $card->titulo }}</h3>
      <a href="{{ $card->link }}">Ir para o artigo <span>&#8250;</span></a>
    </div>
    @endforeach
  </div>
</section>


<style>


.blog-section {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  padding: 60px 100px 60px 100px; /* top right bottom left */
  gap: 60px;
  max-width: 1600px;
  margin: auto;
}


  .blog-header {
    max-width: 400px;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .blog-header h2 {
    font-size: 36px;
    font-weight: 700;
    line-height: 1.2;
  }

  .blog-controls {
    display: flex;
    gap: 10px;
  }

  .nav-btn {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    border: none;
    background-color: #eee;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
  }

  .blog-link {
    display: inline-block;
    margin-top: 10px;
    background: #0a53d1;
    color: #fff;
    font-weight: 600;
    text-align: center;
    padding: 12px 25px;
    border-radius: 50px;
    text-decoration: none;
  }

  .blog-cards {
    display: flex;
    gap: 20px;
    flex: 1;
  }

  .blog-card {
    background: #fff;
    border-radius: 20px;
    padding: 0 20px 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
    width: 300px;
    display: flex;
    flex-direction: column;
  }

  .blog-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 20px 20px 0 0;
    margin-bottom: 15px;
  }

  .blog-card h3 {
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 15px;
    color: #111;
  }

  .blog-card a {
    color: #0a53d1;
    font-weight: 600;
    text-decoration: none;
    font-size: 14px;
  }

  .blog-card a span {
    font-size: 18px;
    margin-left: 3px;
  }

  @media (max-width: 992px) {
    .blog-section {
      flex-direction: column;
      align-items: center;
    }

    .blog-cards {
      flex-direction: column;
      align-items: center;
    }

    .blog-card {
      width: 90%;
    }
  }
</style>



<!-- Skills Section -->
{{-- <section id="skills" class="skills section">

  <div class="container" data-aos-delay="100">

    <div class="row skills-content skills-animation">

      <div class="col-lg-6">

        <div class="progress">
          <span class="skill">
            <img src="site/assets/img/flags/bandeira 1.png" alt="Africa do sul Flag" class="flag-icon">
            <span>ZAR</span> <i class="val">100%</i>
          </span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill">
            <img src="site/assets/img/flags/bandeira 2.png" alt="EUA Flag" class="flag-icon">
            <span>USD</span> <i class="val">90%</i>
          </span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill">
            <img src="site/assets/img/flags/bandeira 3.png" alt="Canada Flag" class="flag-icon">
            <span>CAD</span> <i class="val">75%</i>
          </span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

      </div>

      <div class="col-lg-6">

        <div class="progress">
          <span class="skill">
            <img src="site/assets/img/flags/bandeira 4.png" alt="China Flag" class="flag-icon">
            <span>CNY</span> <i class="val">80%</i>
          </span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill">
            <img src="site/assets/img/flags/bandeira 5.png" alt="Moçambique Flag" class="flag-icon">
            <span>MZN</span> <i class="val">90%</i>
          </span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill">
            <img src="site/assets/img/flags/bandeira 6.png" alt="Photoshop Flag" class="flag-icon">
            <span>NAD</span> <i class="val">55%</i>
          </span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

      </div>

    </div>

  </div>

</section> --}}<!-- /Skills Section -->


  <!-- Stats Section -->
 


  <!-- Services Section -->
   {{--<section id="services" class="services section">


    <div class="container section-title" >
      <h2>Dicas Financeiras</h2>
    </div>

  <div class="container">
  <div class="row gy-4">

    <div class="col-lg-4 col-md-6" data-aos-delay="100">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="bi bi-wallet2"></i> 
        </div>
        <a href="#" class="stretched-link">
          <h3>Controle de Gastos</h3>
        </a>
        <p>Mantenha um registro detalhado de suas despesas mensais. Isso ajuda a identificar excessos e melhorar o planejamento financeiro.</p>
      </div>
    </div>

    <div class="col-lg-4 col-md-6" data-aos-delay="200">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="bi bi-graph-up-arrow"></i> 
        </div>
        <a href="#" class="stretched-link">
          <h3>Investimentos Inteligentes</h3>
        </a>
        <p>Aprenda sobre diferentes tipos de investimentos. Diversificar sua carteira pode aumentar seus rendimentos e reduzir riscos.</p>
      </div>
    </div>

    <div class="col-lg-4 col-md-6" data-aos-delay="300">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="bi bi-journal-check"></i> 
        </div>
        <a href="#" class="stretched-link">
          <h3>Planejamento Financeiro</h3>
        </a>
        <p>Estabeleça metas de curto, médio e longo prazo. Um bom plano ajuda você a alcançar seus objetivos com segurança.</p>
      </div>
    </div>

    <div class="col-lg-4 col-md-6" data-aos-delay="400">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="bi bi-shield-check"></i> 
        </div>
        <a href="#" class="stretched-link">
          <h3>Reserva de Emergência</h3>
        </a>
        <p>Tenha uma reserva para imprevistos equivalente a 3 a 6 meses de despesas. Isso garante tranquilidade em momentos difíceis.</p>
      </div>
    </div>

    <div class="col-lg-4 col-md-6" data-aos-delay="500">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="bi bi-bar-chart-line"></i> 
        </div>
        <a href="#" class="stretched-link">
          <h3>Acompanhe Seus Rendimentos</h3>
        </a>
        <p>Revise regularmente seus ganhos e busque formas de aumentar sua renda, como freelas, cursos ou rendas passivas. Crescimento financeiro começa com consciência.</p>
      </div>
    </div>

    <div class="col-lg-4 col-md-6" data-aos-delay="600">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="bi bi-mortarboard"></i> 
        </div>
        <a href="#" class="stretched-link">
          <h3>Educação Financeira</h3>
        </a>
        <p>Busque conhecimento sobre finanças pessoais. Quanto mais você aprender, melhor será sua relação com o dinheiro.</p>
      </div>
    </div>

  </div>
</div>

        </div>

      </div>

    </div>

  </section>

 --}}
  <!-- Portfolio Section -->




<style>
      .icon i {
        font-size: 20px;
        color: #0a53d1;
      }


      .features {
        padding: 40px 20px;
        text-align: center;
        max-width: 1200px;
        height: 700px;
        margin: auto;
      }

      .features h1 {
          font-size: 48px;
          font-weight: bold;
          margin-bottom: 20px;
          text-align: center
      }

      .features p {
        color: #666;
        margin-bottom: 40px;
      }

      .features-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 40px;
      }

      .features-left,
      .features-right {
        flex: 1;
        min-width: 250px;
      }

      .features-center {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .features-center img {
        max-width: 100%;
        height: auto;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      }

      .feature-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 30px;
        text-align: left;
      }

      .icon {
        font-size: 24px;
        color: #0a53d1;
        margin-right: 12px;
        margin-top: 4px;
      }

      .feature-item h3 {
        margin: 0 0 5px 0;
        font-size: 18px;
      }

      .feature-item p {
        margin: 0;
        font-size: 14px;
        color: #555;
      }

      .badge {
        background-color: #0f9d58;
        color: #fff;
        font-size: 10px;
        padding: 2px 6px;
        border-radius: 8px;
        margin-left: 5px;
      }

</style>







<script>
  const carousel = document.getElementById('carousel');
  function scrollCarousel(direction) {
    const cardWidth = 280; // card + gap
    carousel.scrollBy({ left: direction * cardWidth, behavior: 'smooth' });
  }
</script>



  
</main>

@endsection
