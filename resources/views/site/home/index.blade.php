@extends('site.layouts.app')
@section('title', 'Meu Kumbu')
@section('content')

<main class="main">

  <!-- Hero Section -->
<section id="hero" class="hero section light-background" style="position: relative; width: 100%; min-height: 75vh; display: flex; align-items: center; justify-content: center; overflow: hidden;">

  <!-- Vídeo de fundo -->
  <video autoplay muted loop playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
    <source src="site/assets/img/angola.mp4" type="video/mp4">
    O teu navegador não suporta vídeo HTML5.
  </video>

  <!-- Conteúdo por cima do vídeo -->
  <div class="container text-center" style="position: relative; z-index: 1;">
    <div class="row justify-content-center">
      <div class="col-lg-8 d-flex flex-column align-items-center justify-content-center">
        <h1 style="color: white;">Bem-vindo ao Meu Kumbu</h1>
        <p style="color: white;">Organiza e controla as tuas finanças com facilidade.</p>
      </div>
    </div>
  </div>

</section>



  <!-- Featured Services Section -->
  <section id="featured-services" class="featured-services section">

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

  </section><!-- /Featured Services Section -->

  <!-- About Section -->
  <section id="about" class="about section light-background">

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


  <section id="about" class="about section light-background">
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

<!-- Skills Section -->
<section id="skills" class="skills section">

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

</section><!-- /Skills Section -->


  <!-- Stats Section -->
 

  <section id="about" class="about section light-background">
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

  <!-- Services Section -->
  <section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" {{-- data-aos="fade-up" --}}>
      <h2>Dicas Financeiras</h2>
    </div><!-- End Section Title -->

  <div class="container">
  <div class="row gy-4">

    <div class="col-lg-4 col-md-6" data-aos-delay="100">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="bi bi-wallet2"></i> <!-- Controle de Gastos -->
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
          <i class="bi bi-graph-up-arrow"></i> <!-- Investimentos -->
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
          <i class="bi bi-journal-check"></i> <!-- Planejamento -->
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
          <i class="bi bi-shield-check"></i> <!-- Reserva de Emergência -->
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
          <i class="bi bi-bar-chart-line"></i> <!-- Acompanhar Rendimento -->
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
          <i class="bi bi-mortarboard"></i> <!-- Educação Financeira -->
        </div>
        <a href="#" class="stretched-link">
          <h3>Educação Financeira</h3>
        </a>
        <p>Busque conhecimento sobre finanças pessoais. Quanto mais você aprender, melhor será sua relação com o dinheiro.</p>
      </div>
    </div>

  </div>
</div>

        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Services Section -->


  <!-- Portfolio Section -->

<style>
  .faq-container {
    max-width: 1200px;
    margin: 0 auto;
  }

  .faq-container h1 {
    font-size: 48px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .faq-container p {
    font-size: 18px;
    color: #4B5563;
    margin-bottom: 40px;
  }

  .faq-carousel-wrapper {
    position: relative;
  }

  .faq-carousel {
    display: flex;
    gap: 20px;
    overflow: hidden;
  }

  .faq-card {
    min-width: 260px;
    max-width: 260px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: transform 0.3s;
  }

  .faq-card img {
    width: 100%;
    height: 160px;
    object-fit: cover;
  }

  .faq-card-body {
    padding: 20px;
  }

  .faq-card-body h3 {
    font-size: 16px;
    font-weight: bold;
    color: #0a53d1;
    margin-bottom: 10px;
  }

  .faq-card-body p {
    font-size: 14px;
    margin-bottom: 20px;
    color: #111827;
  }

  .faq-btn {
    display: block;
    text-align: center;
    background: #0a53d1;
    color: white;
    border-radius: 30px;
    padding: 10px 0;
    font-weight: bold;
    text-decoration: none;
    transition: background 0.2s;
  }

  .faq-btn:hover {
    background: #0a53d1;
  }

  .faq-controls {
    position: absolute;
    top: 50%;
    right: -40px;
    transform: translateY(-50%);
    display: flex;
    gap: 10px;
  }

  .faq-controls button {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #9CA3AF;
    transition: color 0.3s;
  }

  .faq-controls button:hover {
    color: #4B5563;
  }
</style>

<div class="faq-container">
  <h1>Encontre respostas para as suas perguntas</h1>
  <p>Organizamos e entregamos conteúdos de qualidade para que você tenha acesso a todas as suas possíveis dúvidas sobre finanças pessoais, cartões de crédito, empréstimos, investimentos e muito mais.</p>

  <div class="faq-carousel-wrapper">
    <div class="faq-carousel" id="carousel">
      <div class="faq-card">
        <img src="site/assets/img/pc.png" alt="Bancos">
        <div class="faq-card-body">
          <h3>Bancos</h3>
          <p>C6 Bank cobra taxa de saque? Conheça as tarifas e saiba como sacar dinheiro</p>
          <a href="#" class="faq-btn">Saiba mais</a>
        </div>
      </div>
      <div class="faq-card">
        <img src="site/assets/img/about.jpg" alt="Viagens">
        <div class="faq-card-body">
          <h3>Viagens</h3>
          <p>Lugares baratos para viajar no Dia dos Namorados: 10 principais destinos</p>
          <a href="#" class="faq-btn">Saiba mais</a>
        </div>
      </div>
      <div class="faq-card">
        <img src="site/assets/img/testimonials-bg.jpg" alt="Direitos">
        <div class="faq-card-body">
          <h3>Direitos</h3>
          <p>Defensoria Pública agendamento online: acesso à justiça gratuita</p>
          <a href="#" class="faq-btn">Saiba mais</a>
        </div>
      </div>
      <div class="faq-card">
        <img src="site/assets/img/capa4.jpg" alt="Direitos 2">
        <div class="faq-card-body">
          <h3>Direitos</h3>
          <p>Advogado gratuito: saiba como conseguir um!</p>
          <a href="#" class="faq-btn">Saiba mais</a>
        </div>
      </div>
            <div class="faq-card">
        <img src="site/assets/img/hero-bg.jpg" alt="Direitos 2">
        <div class="faq-card-body">
          <h3>Direitos</h3>
          <p>Advogado gratuito: saiba como conseguir um!</p>
          <a href="#" class="faq-btn">Saiba mais</a>
        </div>
      </div>
    </div>

  {{--   <div class="faq-controls">
      <button onclick="scrollCarousel(-1)">&#x25C0;</button>
      <button onclick="scrollCarousel(1)">&#x25B6;</button>
    </div> --}}
  </div>
</div>

<script>
  const carousel = document.getElementById('carousel');
  function scrollCarousel(direction) {
    const cardWidth = 280; // card + gap
    carousel.scrollBy({ left: direction * cardWidth, behavior: 'smooth' });
  }
</script>



  <!-- Faq Section -->
  <section id="faq" class="faq section light-background">

  <!-- Section Title -->
  <div class="container section-title">
    <h2>F.A.Q</h2>
    <p><span>Perguntas</span> <span class="description-title">Frequentes</span></p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">

        <div class="faq-container">

          <div class="faq-item faq-active">
            <h3>O que é o Meu Kumbu?</h3>
            <div class="faq-content">
              <p>O Meu Kumbu é uma plataforma digital que ajuda-te a organizar, controlar e visualizar todas as tuas finanças pessoais num único lugar.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3>O que posso fazer com o Meu Kumbu?</h3>
            <div class="faq-content">
              <p>Podes registar receitas e despesas, acompanhar o saldo mensal, categorizar transações, ver gráficos e até gerar relatórios em PDF ou Excel.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3>Preciso de internet para usar o Meu Kumbu?</h3>
            <div class="faq-content">
              <p>Sim, por enquanto o Meu Kumbu funciona online. Futuramente poderá ter uma versão offline com sincronização.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3>Os meus dados estão seguros?</h3>
            <div class="faq-content">
              <p>Sim. Todas as informações são armazenadas de forma segura. Não partilhamos dados com terceiros.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3>Quanto custa usar o Meu Kumbu?</h3>
            <div class="faq-content">
              <p>O plano básico é gratuito. Futuramente serão adicionadas funcionalidades premium com preços acessíveis.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3>Como começo a usar o Meu Kumbu?</h3>
            <div class="faq-content">
              <p>Basta criar uma conta no site, fazer login e começar a adicionar tuas transações. É simples e rápido.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

        </div>

      </div><!-- End Faq Column-->
    </div>
  </div>
</section><!-- /Faq Section -->

</main>

@endsection
