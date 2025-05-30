@extends('site.layouts.app')
@section('title', 'Meu Kumbu')
@section('content')

<main>
    <section class="sobre-nu">
    <div class="texto">
      <h1>Sobre o Nu</h1>
      <p>
        Com a missão de combater a complexidade e empoderar as pessoas, o Nu atende à jornada financeira completa,
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

</main>

@endsection