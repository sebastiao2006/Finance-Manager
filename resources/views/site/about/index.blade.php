@extends('site.layouts.app')
@section('title', 'Meu Kumbu')
@section('content')

<main>
    <section class="sobre-nu">
    <div class="texto">
      <h1>Sobre o Meu Kumbu</h1>
      <p>
        Com a missão de combater a complexidade e empoderar as pessoas, o Kumbu atende à jornada financeira completa,
        promovendo acesso e avanço financeiro com crédito responsável e transparência.
      </p>
      <div class="carrossel">
        <div class="pontos">
          <span class="ponto ativo"></span>
          <span class="ponto"></span>
          <span class="ponto"></span>
        </div>
        <div class="pause">&#10073;&#10073;</div>
      </div>
    </div>

    <div class="imagem">
      <img src="site/assets/img/capa 33.jpg" alt="Foto de uma mulher sorrindo no computador">
    </div>
  </section>

  <style>

        .sobre-nu {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 50px;
        max-width: 1200px;
        margin: 0 auto;
        }

        .texto {
        max-width: 500px;
        }

        .texto h1 {
        font-size: 40px;
        margin-bottom: 20px;
        font-weight: bold;
        }

        .texto p {
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 40px;
        }

        .carrossel {
        display: flex;
        align-items: center;
        gap: 10px;
        }

        .pontos {
        display: flex;
        gap: 6px;
        background: #e0e0e0;
        padding: 8px 16px;
        border-radius: 20px;
        }

        .ponto {
        width: 6px;
        height: 6px;
        background: #ccc;
        border-radius: 50%;
        }

        .ponto.ativo {
        background: #000;
        }

        .pause {
        font-size: 16px;
        background: #e0e0e0;
        border-radius: 50%;
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        }

        .imagem img {
        width: 500px;
        max-width: 100%;
        border-radius: 30px;
        }

  </style>



  <section class="dados-nu">
  <h2>Nossos dados </h2>
  <div class="grid">
    <div class="card">
      <h3>+ Funcionalidades</h3>
      <p>para os nossos usuário.</p>
    </div>
    <div class="card">
      <h3>24h</h3>
      <p>de suporte Técnico.</p>
    </div>
    <div class="card">
      <h3>270</h3>
      <p>de Angolanos tiveram seu 1º cartão com o kumbu, em cinco anos.</p>
    </div>
    <div class="card big">
      <h2>Dados do Kumbu</h2>
      <div class="dados-boxes">
        <div>
          <h4>2024</h4>
          <p>ano de fundação.</p>
        </div>
        <div>
          <h4>7</h4>
          <p>membros activos.</p>
        </div>
        <div>
          <h4>100 mil AOA</h4>
          <p>de capital investido por parte dos fundadores.</p>
        </div>
        <div>
          <h4>2025</h4>
          <p>inicio das actividades.</p>
        </div>
        <div>
          <h4>500h</h4>
          <p>no desenvolvimento da plataforma.</p>
        </div>
      </div>
    </div>
  </div>
</section>



<style>


    .dados-nu {
    max-width: 1200px;
    margin: 60px auto;
    padding: 0 20px;
    }

    .dados-nu h2 {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 40px;
    }

    .grid {
    display: grid;
    gap: 24px;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    }

    .card {
    background: #fff;
    border-radius: 24px;
    padding: 32px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    .card h3 {
    color: #0a53d1;
    font-size: 32px;
    margin: 0 0 8px;
    }

    .card p {
    margin: 0;
    font-size: 16px;
    font-weight: 500;
    }

    .card.big {
    grid-column: span 2;
    }

    .card.big h2 {
    font-size: 28px;
    margin-bottom: 24px;
    }

    .dados-boxes {
    display: grid;
    gap: 16px 32px;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    }

    .dados-boxes h4 {
    color: #0a53d1;
    font-size: 20px;
    margin: 0 0 4px;
    }

    .dados-boxes p {
    margin: 0;
    font-size: 14px;
    }

</style>


<section class="galeria-nu">
      <h2>Nossa equipe </h2>
<div class="carousel">
  <div class="cartao" style="background-image: url('site/assets/img/ilunga.jpeg')"><span>ILUNGA-CEO</span></div>
  <div class="cartao" style="background-image: url('site/assets/img/tchali.jpeg')"><span>TCHALI-SJO</span></div>
  <div class="cartao" style="background-image: url('site/assets/img/ladyanne.jpeg')"><span>LADYANNE-RH</span></div>
  <div class="cartao" style="background-image: url('site/assets/img/alessandro.jpeg')"><span>ALESSANDRO-SFJ</span></div>
  <div class="cartao" style="background-image: url('site/assets/img/sebastiao.jpeg')"><span>CARDOSO-PMO</span></div>
  <div class="cartao" style="background-image: url('site/assets/img/ronaldo.jpeg')"><span>RONALDO-DATABASE</span></div>
</div>


  <div class="controls">
    <div class="dots" id="dots">
      <!-- Os pontos serão gerados via JS -->
    </div>
    <button class="pause" id="pauseBtn">{{-- ⏸️ --}}</button>
  </div>
</section>


<style>


.galeria-nu {
  text-align: center;
  padding: 60px 0;
  position: relative;
  overflow: hidden;
}

.galeria-nu h2 {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 40px;
    }

.carousel {
  display: flex;
  justify-content: center;
  align-items: flex-end;
  gap: 0; /* tiramos o espaçamento padrão */
  transform-style: preserve-3d;
  position: relative;
  height: 320px;
}

.cartao {
  width: 200px;
  height: 250px;
  background-size: cover;
  background-position: center;
  border-radius: 20px;
  position: absolute;
  transition: transform 0.5s, opacity 0.5s;
  cursor: pointer;
  opacity: 0.5;
}

.cartao.ativo {
  transform: scale(1.1) rotateY(0deg);
  opacity: 1;
  z-index: 2;
}
.cartao span {
  position: absolute;
  bottom: 16px;
  left: 16px;
  font-size: 18px;
  font-weight: 600;
  color: white;
  text-shadow: 0 2px 4px rgba(0,0,0,0.5);
}

.cartao::after {
  content: '›';
  font-size: 24px;
  color: white;
  position: absolute;
  bottom: 14px;
  right: 16px;
  text-shadow: 0 2px 4px rgba(0,0,0,0.5);
}

.controls {
  margin-top: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 16px;
}

.dots {
  display: flex;
  gap: 8px;
}

.dot {
  width: 10px;
  height: 10px;
  background: #ccc;
  border-radius: 50%;
  transition: background 0.3s;
}

.dot.ativo {
  background: #000;
  width: 12px;
  height: 12px;
}

button.pause {
  background: #fff;
  border: none;
  font-size: 20px;
  cursor: pointer;
  border-radius: 50%;
  width: 32px;
  height: 32px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}
/* Posicionamento específico para cada cartão */
.cartao:nth-child(1) { transform: translateX(-360px) scale(0.9) rotateY(10deg); z-index: 1; }
.cartao:nth-child(2) { transform: translateX(-180px) scale(0.95) rotateY(5deg); z-index: 2; }
.cartao:nth-child(3) { transform: translateX(0) scale(1.05) rotateY(0deg); opacity: 1; z-index: 3; }
.cartao:nth-child(4) { transform: translateX(180px) scale(0.95) rotateY(-5deg); z-index: 2; }
.cartao:nth-child(5) { transform: translateX(360px) scale(0.9) rotateY(-10deg); z-index: 1; }
.cartao:nth-child(6) { transform: translateX(540px) scale(0.85) rotateY(-12deg); z-index: 0; }


</style>

<script>
  const posicoes = [
    { x: -360, scale: 0.85, rotate: 10, z: 1, opacity: 0.3 },
    { x: -180, scale: 0.95, rotate: 5, z: 2, opacity: 0.5 },
    { x: 0,    scale: 1.1, rotate: 0, z: 3, opacity: 1 },
    { x: 180,  scale: 0.95, rotate: -5, z: 2, opacity: 0.5 },
    { x: 360,  scale: 0.85, rotate: -10, z: 1, opacity: 0.3 },
    { x: 540,  scale: 0.8, rotate: -12, z: 0, opacity: 0.2 }
  ];

  const cartoes = document.querySelectorAll('.cartao');

  function atualizar() {
    cartoes.forEach((cartao, i) => {
      const p = posicoes[i];
      cartao.style.transform = `translateX(${p.x}px) scale(${p.scale}) rotateY(${p.rotate}deg)`;
      cartao.style.zIndex = p.z;
      cartao.style.opacity = p.opacity;
    });
  }

  function girar() {
    posicoes.unshift(posicoes.pop()); // move o último para o início
    atualizar();
  }

  atualizar();
  setInterval(girar, 3000); // gira a cada 3s
</script>



</main>

@endsection