@extends('site.layouts.app')
@section('title', 'Meu Kumbu')
@section('content')

<main>

<section class="stories">
  <div class="stories-wrapper">
    <div class="stories-header">Visualizando todos Stories</div>
    <div class="stories-container">
      <div class="story">
        <img src="site/assets/img/capa 33.jpg" alt="Story 1">
        <div class="story-caption">Transferir pontos BRB para Livelo:...</div>
      </div>
      <div class="story">
        <img src="site/assets/img/capa 27.jpg" alt="Story 2">
        <div class="story-caption">Últimos dias para declarar o Impost...</div>
      </div>
      <div class="story">
        <img src="site/assets/img/capa 37.jpg" alt="Story 3">
        <div class="story-caption">Dia Livre de Impostos terá...</div>
      </div>
      <div class="story">
        <img src="site/assets/img/capa 38.jpeg" alt="Story 4">
        <div class="story-caption">Pagamentos da segunda parcela ...</div>
      </div>
            <div class="story">
        <img src="site/assets/img/capa 24.jpg" alt="Story 5">
        <div class="story-caption">Pagamentos da segunda parcela ...</div>
      </div>
      <div class="arrow">➜</div>
    </div>
  </div>
</section>

  <style>

    section.stories {
      padding: 20px;
    }

    .stories-wrapper {
      max-width: 1200px;
      margin: 0 auto; /* Centraliza horizontalmente */
    }

    .stories-header {
      text-align: right;
      font-size: 14px;
      color: #0a53d1;
      margin-bottom: 10px;
    }

    .stories-container {
      display: flex;
      gap: 12px;
      overflow-x: auto;
      scrollbar-width: none; /* Firefox */
    }

    .stories-container::-webkit-scrollbar {
      display: none; /* Chrome, Safari */
    }

    .story {
      flex: 0 0 auto;
      width: 170px;
      height: 300px;
      border-radius: 12px;
      background-color: #0a53d1;
      overflow: hidden;
      box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.15);
      position: relative;
      color: #fff;
    }

    .story img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .story-caption {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      padding: 12px;
      font-size: 14px;
      font-weight: bold;
      background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
    }

    .arrow {
      flex: 0 0 auto;
      width: 50px;
      height: 300px;
      background-color: #d9d9d9;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      color: #0a53d1;
      cursor: pointer;
    }
  </style>


{{-- <section class="destaques">
  <!-- Notícia principal -->
  <div class="principal">
    <img src="site/assets/img/capa 29.jpg" alt="Dívidas">
    <div class="principal-content">
      <div class="tag">Sair das dívidas</div>
      <h2>Como sair das dívidas sem dinheiro: dicas reais para limpar seu nome</h2>
      <div class="autor-data">Amanda Pessoa · 29 maio 2025</div>
    </div>
  </div>

  <!-- Notícias laterais -->
  <div class="lateral">
    <div class="mini-noticia">
      <img src="site/assets/img/capa 24.jpg" alt="Banco digital">
      <div class="mini-conteudo">
        <div class="tag">Bancos</div>
        <h3>Os melhores bancos digitais do Brasil em 2025</h3>
        <div class="autor-data">Gustavo Santos · 29 maio 2025</div>
      </div>
    </div>

    <div class="mini-noticia">
      <img src="site/assets/img/capa 24.jpg" alt="Pontos Livelo">
      <div class="mini-conteudo">
        <div class="tag">Programas de Pontos</div>
        <h3>Como transferir pontos BRB para Livelo: veja passo a passo e vantagens</h3>
        <div class="autor-data">Thiago Sousa · 29 maio 2025</div>
      </div>
    </div>
  </div>
</section>

  <style>

    section.destaques {
      max-width: 1200px;
      margin: 40px auto;
      padding: 0 20px;
      display: flex;
      gap: 20px;
    }

    .principal {
    flex: 2;
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    height: 360px; /* Altura ajustada */
    }

    .principal img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .principal-content {
      position: absolute;
      bottom: 0;
      padding: 20px;
      color: #fff;
      background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0));
    }

    .tag {
      background-color: #6a0dad;
      display: inline-block;
      padding: 4px 12px;
      border-radius: 20px;
      font-size: 13px;
      margin-bottom: 10px;
      color: #fff;
    }

    .principal-content h2 {
      font-size: 24px;
      margin: 0 0 10px;
      line-height: 1.3;
    }

    .autor-data {
      font-size: 13px;
      opacity: 0.9;
    }

    .lateral {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .mini-noticia {
      display: flex;
      gap: 12px;
    }

    .mini-noticia img {
      width: 120px;
      height: 120px;
      border-radius: 12px;
      object-fit: cover;
    }

    .mini-conteudo {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .mini-conteudo .tag {
      font-size: 12px;
      padding: 3px 10px;
      margin-bottom: 6px;
    }

    .mini-conteudo h3 {
      font-size: 18px;
      margin: 0 0 8px;
      color: #14142b;
    }

    .mini-conteudo .autor-data {
      color: #4a4a4a;
      font-size: 13px;
    }
  </style> --}}


<section class="finance-tips-section">
  <div class="container">
    <h2 class="tips-title"> Dicas do Dia: Finanças Pessoais</h2>

    <div class="tips-grid">
      
      <div class="tip-card">
        <h3>Organize suas dívidas</h3>
        <p>Liste todas as dívidas, priorize as com maiores juros e tente renegociar parcelas atrasadas.</p>
      </div>

      <div class="tip-card">
        <h3>Entenda seu score</h3>
        <p>Seu score de crédito é importante para empréstimos. Pague em dia e evite atrasos.</p>
      </div>

      <div class="tip-card">
        <h3>Contribuição ao INSS</h3>
        <p>Contribuir ao INSS garante aposentadoria e benefícios como auxílio-doença e maternidade.</p>
      </div>

      <div class="tip-card">
        <h3>Declare o Imposto de Renda</h3>
        <p>Se você teve rendimentos tributáveis acima do limite, é obrigatório declarar. Evite multas!</p>
      </div>

    </div>
  </div>
</section>

<style>
    .finance-tips-section {
  background: linear-gradient(to bottom, #f7f9fc, #ffffff);
  padding: 60px 20px;
}

.tips-title {
  text-align: center;
  font-size: 32px;
  font-weight: 700;
  margin-bottom: 48px;
  color: #2c3e50;
}

.tips-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 32px;
}

.tip-card {
  background: #ffffff;
  border-radius: 20px;
  padding: 28px 24px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border: 1px solid #e1e5ee;
  position: relative;
  overflow: hidden;
}

.tip-card::before {
  content: '';
  position: absolute;
  top: -40px;
  right: -40px;
  width: 100px;
  height: 100px;
  background: #00b894;
  opacity: 0.05;
  transform: rotate(45deg);
  border-radius: 20px;
}

.tip-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 16px 32px rgba(0, 0, 0, 0.12);
}

.tip-card h3 {
  font-size: 20px;
  margin-bottom: 12px;
  color: #1e272e;
  font-weight: 600;
}

.tip-card p {
  color: #636e72;
  font-size: 16px;
  line-height: 1.6;
}

</style>

<style>
    .quick-actions {
  text-align: center;
  padding: 50px 20px;
  background: white;
  font-family: Arial, sans-serif;
    }

    .quick-actions h2 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 40px;
    }

    .actions-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    }

    .action-card {
    background: white;
    border: 1px solid #ddd;
    border-radius: 12px;
    padding: 20px;
    width: 160px;
    text-align: left;
    transition: box-shadow 0.3s ease;
    }

    .action-card:hover {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .action-card .icon {
    border: 2px solid #0a53d1;
    border-radius: 50%;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px;
    }

    .action-card svg {
    width: 20px;
    height: 20px;
    }

    .action-card strong {
    display: block;
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 4px;
    }

    .action-card p {
    font-size: 13px;
    color: #555;
    margin: 0;
    }

</style>
<!-- Faq Section -->
<section class="faq-9 faq section light-background" id="faq">
  <div class="container">
    <div class="row">

      <div class="col-lg-5 d-flex flex-column justify-content-between" data-aos="fade-up">
        <div>
          <h2 class="faq-title">Tem alguma pergunta? Confira as perguntas frequentes</h2>
          <p class="faq-description">Veja respostas para as dúvidas mais comuns sobre empréstimos, dívidas, impostos e finanças pessoais.</p>
        </div>

        <div class="faq-image-wrapper mt-4" data-aos="fade-up" data-aos-delay="200">
          <img src="site/assets/img/capa 40.png" alt="FAQ Ilustração" class="faq-image">
        </div>
      </div>

      <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
        <div class="faq-container">

          <div class="faq-item faq-active">
            <h3>Como posso solicitar um empréstimo?</h3>
            <div class="faq-content">
              <p>Você pode solicitar um empréstimo diretamente com o seu banco, instituição financeira ou cooperativa. É importante comparar as taxas de juros e prazos antes de decidir.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3>O que acontece se eu atrasar o pagamento de uma dívida?</h3>
            <div class="faq-content">
              <p>O atraso pode gerar juros, multa e negativação do seu nome nos órgãos de proteção ao crédito. Negocie sempre que possível para evitar complicações.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3>Como funciona o desconto do INSS?</h3>
            <div class="faq-content">
              <p>O INSS é descontado automaticamente do salário dos trabalhadores com carteira assinada. O valor varia conforme a faixa salarial e garante benefícios como aposentadoria e auxílio-doença.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3>Quem precisa declarar o IRT?</h3>
            <div class="faq-content">
              <p>O Imposto sobre o Rendimento do Trabalho (IRT) é obrigatório para quem recebe acima do limite de isenção definido pelo governo. Verifique as faixas atualizadas para saber se você deve declarar.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3>O que é o Kixikila e como funciona?</h3>
            <div class="faq-content">
              <p>O Kixikila é uma prática tradicional de empréstimo informal entre amigos, familiares ou membros da comunidade. Baseia-se na confiança e no compromisso de devolver o valor emprestado em um prazo acordado.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

          <div class="faq-item">
            <h3>Como organizar minhas finanças pessoais?</h3>
            <div class="faq-content">
              <p>Comece criando um orçamento mensal, controle seus gastos e priorize o pagamento de dívidas. Economizar uma parte da renda e evitar compras por impulso são hábitos fundamentais.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>


   <style>
    .faq.section {
  padding-top: 40px;
  padding-bottom: 40px;
}

.faq .faq-title {
    margin-left: 70px;
  font-size: 1.8rem;
  font-weight: 700;
  margin-bottom: 1rem;
  color: var(--heading-color);
}

.faq .faq-description {
    margin-left: 70px;
  font-size: 0.95rem;
  color: black;
  margin-bottom: 2rem;
}

.faq .faq-arrow {
  color: var(--accent-color);
}
.faq .faq-container {
  max-width: 550px; /* Ajuste esse valor conforme quiser */
  margin: 0 auto;   /* Centraliza as caixas dentro da coluna */
}

.faq .faq-container .faq-item {
  background-color: var(--surface-color);
  position: relative;
  padding: 20px;
  margin-bottom: 15px;
  border-radius: 10px;
  overflow: hidden;
}

.faq .faq-container .faq-item:last-child {
  margin-bottom: 0;
}

.faq .faq-container .faq-item h3 {
  font-weight: 600;
  font-size: 16px;
  line-height: 24px;
  margin: 0 30px 0 0;
  transition: 0.3s;
  cursor: pointer;
  display: flex;
  align-items: center;
}

.faq .faq-container .faq-item h3:hover {
  color: var(--accent-color);
}

.faq .faq-container .faq-item .faq-content {
  display: grid;
  grid-template-rows: 0fr;
  transition: 0.3s ease-in-out;
  visibility: hidden;
  opacity: 0;
  padding-top: 0;
}

.faq .faq-container .faq-item .faq-content p {
  margin-bottom: 0;
  overflow: hidden;
  color: black !important; /* Corrige texto branco */
}

.faq .faq-container .faq-item .faq-toggle {
  position: absolute;
  top: 20px;
  right: 20px;
  font-size: 16px;
  line-height: 0;
  transition: 0.3s;
  cursor: pointer;
}

.faq .faq-container .faq-item .faq-toggle:hover {
  color: var(--accent-color);
}

.faq .faq-container .faq-active h3 {
  color: var(--accent-color);
}

.faq .faq-container .faq-active .faq-content {
  grid-template-rows: 1fr;
  visibility: visible;
  opacity: 1;
  padding-top: 10px;
}

.faq .faq-container .faq-active .faq-toggle {
  transform: rotate(90deg);
  color: var(--accent-color);
}

.faq .faq-image-wrapper {
  width: 100%;
  max-width: 100%;
}

.faq .faq-image {
  width: 100%;
  height: auto;
  border-radius: 20px;
  object-fit: cover;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}


   </style>
</main>

@endsection