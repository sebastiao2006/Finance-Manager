@extends('site.layouts.app')
@section('title', 'Kivula')
@section('content')

<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section accent-background">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100" id="particles-js">


      <div class="row gy-5 justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2><span>Welcome to </span><span class="accent">Kivula</span></h2>
          <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
          <div class="d-flex">
            <a href="#about" class="btn-get-started">Agendar Reunião</a>
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Assistir Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2">
          <img src="{{ asset('assets/img/hero-im.svg') }}" class="img-fluid" alt="">
        </div>
      </div>
  
      <main id="principal">      
      </main>
      <div id="particles-js"></div>
      <script src="{{ asset('assets/js/particles.min.js') }}"></script>
  
  
      <script>
        particlesJS(
            {
                "particles": {
                    "number": {
                        "value": 185,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 11.22388442605866,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": false,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            }
        )
    </script>
  
  

    </div>
 
    <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Portfolio</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Lading page</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="" class="stretched-link">websites-IA</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

  </section><!-- /Hero Section -->

  <!-- About Section -->
  <section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Sobre Nós<br></h2>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3>Kivula Consultoria de TI</h3>
{{--           <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt=""> --}}
          <p style="font-size: 18px">A Kivula Consultoria de TI é uma empresa especializada em desenvolvimento web com Inteligência Artificial (IA), fornecendo soluções inovadoras e personalizadas  para impulsionar negócios na era digital.</p>
          <p style="font-size: 18px">Combinamos tecnologia de ponta com IA para criar plataformas web inteligentes, automatizadas e eficientes, proporcionando experiências digitais mais dinâmicas e intuitivas. Nossos serviços incluem desenvolvimento de websites e aplicativos web, integração de IA para automação de processos, chatbots inteligentes, análise preditiva e muito mais.</p>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
          <div class="content ps-0 ps-lg-5">
            <div class="position-relative mt-4">
              <img src="{{ asset('assets/img/banner-bg1.jpeg') }}" class="img-fluid rounded-4" alt="">
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->

  <!-- Clients Section -->
  <section id="clients" class="clients section">

    <div class="container">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "spaceBetween": 40
              },
              "480": {
                "slidesPerView": 3,
                "spaceBetween": 60
              },
              "640": {
                "slidesPerView": 4,
                "spaceBetween": 80
              },
              "992": {
                "slidesPerView": 6,
                "spaceBetween": 120
              }
            }
          }
        </script>
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-1.webp') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
          
        </div>
      </div>

    </div>

  </section><!-- /Clients Section -->

  <!-- Services Section -->
  <section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Nossos Serviços</h2>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="bi bi-activity"></i>
            </div>
            <h3>Portfolio</h3>
            <p>A Kivula oferece criação de portfólios personalizados, destacando habilidades e projetos com design moderno e intuitivo. Ideal para profissionais e empresas, garante uma presença digital forte e envolvente.</p>
            <a href="service-details.html" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-broadcast"></i>
            </div>
            <h3>Landing Page</h3>
            <p>A Kivula oferece serviços de Landing Page, criando páginas atrativas e eficientes para captar leads e impulsionar negócios. Com design responsivo, carregamento rápido e foco na conversão, nossas soluções garantem uma experiência envolvente para o público-alvo.</p>
            <a href="service-details.html" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-easel"></i>
            </div>
            <h3>websites-IA</h3>
            <p>Desenvolvimento de websites com IA, criando sites inteligentes, personalizados e otimizados para alto desempenho. Utilizamos tecnologia avançada para automação, design dinâmico e experiência interativa, garantindo uma presença digital moderna e eficiente.</p>
            <a href="service-details.html" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-bounding-box-circles"></i>
            </div>
            <h3>Marketing</h3>
            <p>As soluções de marketing abrangem estratégias personalizadas para aumentar a visibilidade da marca, engajar o público e impulsionar conversões. Com abordagem focada em dados, utilizamos campanhas otimizadas, SEO e gestão de redes sociais para maximizar resultados. </p>
            <a href="service-details.html" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-calendar4-week"></i>
            </div>
            <h3>branding</h3>
            <p>O branding fortalece a identidade da marca, criando uma presença visual e estratégica marcante. Com design diferenciado, identidade visual coerente e comunicação alinhada, o objetivo é tornar a marca reconhecível e memorável no mercado. </p>
            <a href="service-details.html" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-chat-square-text"></i>
            </div>
            <h3>Dolori Architecto</h3>
            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
            <a href="service-details.html" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Services Section -->


  <!-- Stats Section -->
  <section id="stats" class="stats section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 align-items-center">

        <div class="col-lg-5">
          <img src="{{ asset('assets/img/stats-img.svg') }}" alt="" class="img-fluid">
        </div>

        <div class="col-lg-7">

          <div class="row gy-4">

            <div class="col-lg-6">
              <div class="stats-item d-flex">
                <i class="bi bi-emoji-smile flex-shrink-0"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
                </div>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-6">
              <div class="stats-item d-flex">
                <i class="bi bi-journal-richtext flex-shrink-0"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
                </div>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-6">
              <div class="stats-item d-flex">
                <i class="bi bi-headset flex-shrink-0"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
                </div>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-6">
              <div class="stats-item d-flex">
                <i class="bi bi-people flex-shrink-0"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
                </div>
              </div>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>

    </div>

  </section><!-- /Stats Section -->

  <!-- Portfolio Section -->
  <section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Portfolio</h2>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Portfolio</li>
          <li data-filter=".filter-product">Website</li>
          <li data-filter=".filter-branding">SG</li>
          <li data-filter=".filter-books">Landing Page</li>
        </ul><!-- End Portfolio Filters -->

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <div class="portfolio-content h-100">
              <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app1.png" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <div class="portfolio-content h-100">
              <a href="assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app3.png" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
            <div class="portfolio-content h-100">
              <a href="assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app4.png" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
            <div class="portfolio-content h-100">
              <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app5.png" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <div class="portfolio-content h-100">
              <a href="assets/img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app2.png" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <div class="portfolio-content h-100">
              <a href="assets/img/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app6.png" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

        </div><!-- End Portfolio Container -->

      </div>

    </div>

  </section><!-- /Portfolio Section -->

  <!-- Team Section -->
  <section id="team" class="team section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Parceiros</h2>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <img src="assets/img/team/team-1.png" class="img-fluid" alt="">
            <h4>Organização</h4>
            <span>Parceiro de Comunicação</span>
          </div>
        </div><!-- End Team Member -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <img src="assets/img/team/team-2.png" class="img-fluid" alt="">
            <h4>Marketing</h4>
            <span>Parceiro Institucional</span>
          </div>
        </div><!-- End Team Member -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <img src="assets/img/team/team-3.png" class="img-fluid" alt="">
            <h4>William Anderson</h4>
            <span>Content</span>
          </div>
        </div><!-- End Team Member -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
          <div class="member">
            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>

  </section><!-- /Team Section -->

  <!-- Pricing Section -->
  <section id="pricing" class="pricing section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Pricing</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="zoom-in" data-aos-delay="100">

      <div class="row g-4">

        <div class="col-lg-4">
          <div class="pricing-item">
            <h3>Free Plan</h3>
            <div class="icon">
              <i class="bi bi-box"></i>
            </div>
            <h4><sup>$</sup>0<span> / month</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
              <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
              <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4">
          <div class="pricing-item featured">
            <h3>Business Plan</h3>
            <div class="icon">
              <i class="bi bi-rocket"></i>
            </div>

            <h4><sup>$</sup>29<span> / month</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
              <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
              <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
              <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
              <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4">
          <div class="pricing-item">
            <h3>Developer Plan</h3>
            <div class="icon">
              <i class="bi bi-send"></i>
            </div>
            <h4><sup>$</sup>49<span> / month</span></h4>
            <ul>
              <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
              <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
              <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
              <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
              <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
          </div>
        </div><!-- End Pricing Item -->

      </div>

    </div>

  </section><!-- /Pricing Section -->

  <!-- Faq Section -->
  <section id="faq" class="faq section">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="content px-xl-5">
            <h3><span>Perguntas frequentes </span><strong>Questões</strong></h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p>
          </div>
        </div>

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

          <div class="faq-container">
            <div class="faq-item faq-active">
              <h3><span class="num">1.</span> <span> O que é a Kivula?</span></h3>
              <div class="faq-content">
                <p>A Kivula é uma consultoria de TI especializada no desenvolvimento de soluções web, operando 100% online e incorporando inteligência artificial para otimizar seus projetos.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span class="num">2.</span> <span>Quais serviços a Kivula oferece?</span></h3>
              <div class="faq-content">
                <p>A empresa desenvolve sites, plataformas web e sistemas automatizados, além de fornecer consultoria e suporte em TI.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span class="num">3.</span> <span>A Kivula atende clientes internacionais?</span></h3>
              <div class="faq-content">
                <p>Sim, por ser uma consultoria totalmente digital, a Kivula atende empresas e empreendedores de diferentes países.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span class="num">4.</span> <span>Como a Kivula usa inteligência artificial em seus projetos?</span></h3>
              <div class="faq-content">
                <p>A IA é aplicada para automação de processos, melhoria da experiência do usuário, criação de chatbots e análise de dados estratégicos.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span class="num">5.</span> <span>A Kivula oferece suporte após a entrega do projeto?</span></h3>
              <div class="faq-content">
                <p>Sim, a empresa garante suporte técnico e manutenção para o funcionamento contínuo das soluções desenvolvidas.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

          </div>

        </div>
      </div>

    </div>

  </section><!-- /Faq Section -->

  <!-- Recent Posts Section -->
  <section id="recent-posts" class="recent-posts section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Postagens recentes do blog</h2>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Politics</p>

            <h2 class="title">
              <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
            </h2>

            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author">Maria Doe</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Jan 1, 2022</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Sports</p>

            <h2 class="title">
              <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
            </h2>

            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author">Allisa Mayer</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Jun 5, 2022</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <article>

            <div class="post-img">
              <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
            </div>

            <p class="post-category">Entertainment</p>

            <h2 class="title">
              <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
            </h2>

            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author">Mark Dower</p>
                <p class="post-date">
                  <time datetime="2022-01-01">Jun 22, 2022</time>
                </p>
              </div>
            </div>

          </article>
        </div><!-- End post list item -->

      </div><!-- End recent posts list -->

    </div>

  </section><!-- /Recent Posts Section -->

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gx-lg-0 gy-4">

        <div class="col-lg-4">
          <div class="info-container d-flex flex-column align-items-center justify-content-center">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-clock flex-shrink-0"></i>
              <div>
                <h3>Open Hours:</h3>
                <p>Mon-Sat: 11AM - 23PM</p>
              </div>
            </div><!-- End Info Item -->

          </div>

        </div>

        <div class="col-lg-8">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade" data-aos-delay="100">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->

</main>

@endsection
