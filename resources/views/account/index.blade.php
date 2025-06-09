@extends('layouts.app6')
@section('title', 'Kivula')
@section('content')

<main>
<div class="card-wrapper">
  <h2 class="card-title">Contas</h2>
  <div class="card-container">
    <div class="card-nova-conta btn-abrir" onclick="document.querySelector('.modal-overlay').classList.add('active')">
      <div class="plus-circle">+</div>
      <span class="card-label">Nova conta</span>
    </div>

{{-- <div class="carteira">
  <div class="carteira-header">
    <div class="carteira-title">
      <span class="carteira-icon"></span>
      <strong>Carteira</strong>
    </div>
    <div class="carteira-menu">⋮</div>
  </div>

  <div class="carteira-content">
    <div class="linha-saldo">
      <span class="label">Saldo atual</span>
      <span class="valor">kz 0,00</span>
    </div>
    <div class="linha-saldo">
      <span class="label">
        Saldo previsto
        <span class="info-icon" title="Estimativa com base nas despesas previstas">ℹ️</span>
      </span>
      <span class="valor">kz 0,00</span>
    </div>
  </div>

  <div class="carteira-footer">
    <a href="#" class="btn-despesa">Ver Mais</a>
  </div>
</div> --}}

</div>


<style>
  .carteira {
  background-color: #fff;
  border-radius: 1.5rem;
  width: 350px;
  max-width: 100%;
  box-shadow: 0 0 8px rgba(0, 0, 0, 0.05);
  padding: 1rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  font-family: sans-serif;
}
.card-container {
  display: flex;
  gap: 1rem;
  flex-wrap: wrap; /* para responsividade */
}

/* Header */
.carteira-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 1rem;
}

.carteira-title {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  font-weight: bold;
  color: #444;
  font-size: 1.1rem;
}

.carteira-icon {
  background-color: #f0f0f0;
  border-radius: 4px;
  padding: 2px 6px;
  font-size: 0.9rem;
}

/* Menu */
.carteira-menu {
  font-size: 1.2rem;
  color: #777;
  cursor: pointer;
}

/* Conteúdo */
.carteira-content {
  display: flex;
  flex-direction: column;
  gap: 0.8rem;
  margin-bottom: 1rem;
  border-bottom: 1px solid #ddd;
  padding-bottom: 1rem;
}

.linha-saldo {
  display: flex;
  justify-content: space-between;
  font-size: 0.95rem;
}

.label {
  color: #333;
  font-weight: 600;
}

.info-icon {
  font-size: 0.8rem;
  margin-left: 4px;
  cursor: help;
}

.valor {
  color: #2ecc71;
  font-weight: bold;
}

/* Rodapé */
.carteira-footer {
  text-align: right;
}

.btn-despesa {
  color: #8e44ad;
  font-size: 0.9rem;
  text-decoration: none;
  font-weight: 600;
  transition: color 0.2s;
}

.btn-despesa:hover {
  color: #5e3370;
}


</style>

    


<style>
 .card-wrapper {
  margin-top: 50px;
  display: flex;
  flex-direction: column;
  align-items: flex-start; /* alinha à esquerda */
  padding: 0 1rem; /* margem interna para não encostar nas bordas */
}

.card-title {
  font-size: 2rem;
  color: #222;
  margin-bottom: 1.5rem;
}

.card-nova-conta {
  background-color: #fff;
  border-radius: 1.5rem;
  width: 350px;
  max-width: 100%;
  height: 200px;
  box-shadow: 0 0 8px rgba(0, 0, 0, 0.05);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: transform 0.2s ease;
}

.card-nova-conta:hover {
  transform: translateY(-5px);
}

.plus-circle {
  width: 60px;
  height: 60px;
  border: 2px solid #0049bf;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 2rem;
  color: #0049bf;
}

.card-label {
  margin-top: 1rem;
  font-size: 1.1rem;
  color: #0049bf;
}

/* Responsividade */
@media (max-width: 480px) {
  .card-wrapper {
    align-items: center; /* centraliza no mobile */
    padding: 0 1rem; /* mantém margem interna */
  }

  .card-nova-conta {
    width: 100%;  /* ocupa toda a largura disponível no container */
    max-width: 400px; /* opcional, para não ficar gigante */
    height: 180px;
  }

  .card-title {
    font-size: 1.5rem;
    text-align: center;
  }

  .plus-circle {
    width: 50px;
    height: 50px;
    font-size: 1.7rem;
  }

  .card-label {
    font-size: 1rem;
  }
}
</style>

<!-- MODAL BANCOS -->

{{-- <button class="btn-abrir" onclick="document.querySelector('.modal-overlay').classList.add('active')">Nova conta</button> --}}

<div class="modal-overlay">
  <div class="modal">
    <span class="close-btn" onclick="document.querySelector('.modal-overlay').classList.remove('active')">&times;</span>
    <h2>Qual é a instituição financeira da conta que você quer adicionar?</h2>
    <input type="text" class="search" placeholder="🔍 Buscar por nome">

    <div class="bank-list">
      <!-- Exemplo de banco -->
      <div class="bank-item js-nova-conta" data-nome="BFA" data-img="{{ asset('assets/img/bfa.png') }}">
        <div class="bank-info">
          <img src="{{ asset('assets/img/bfa.png') }}" alt="BFA" />
          <span class="bank-name">BFA</span>
        </div>
        <span class="arrow">›</span>
      </div>

      <div class="bank-item js-nova-conta" data-nome="BIC" data-img="{{ asset('assets/img/bic.png') }}">
        <div class="bank-info">
          <img src="{{ asset('assets/img/bic.png') }}" alt="BIC" />
          <span class="bank-name">BIC</span>
        </div>
        <span class="arrow">›</span>
      </div>

      <div class="bank-item js-nova-conta" data-nome="YETU" data-img="{{ asset('assets/img/yetu.png') }}">
        <div class="bank-info">
          <img src="{{ asset('assets/img/yetu.png') }}" alt="YETU" />
          <span class="bank-name">YETU</span>
        </div>
        <span class="arrow">›</span>
      </div>

      <div class="bank-item js-nova-conta" data-nome="BAI" data-img="{{ asset('assets/img/bai.png') }}">
        <div class="bank-info">
          <img src="{{ asset('assets/img/bai.png') }}" alt="BAI" />
          <span class="bank-name">BAI</span>
        </div>
        <span class="arrow">›</span>
      </div>

      <div class="bank-item js-nova-conta" data-nome="standardBank" data-img="{{ asset('assets/img/bank.jpg') }}">
        <div class="bank-info">
          <img src="{{ asset('assets/img/bank.jpg') }}" alt="standardBank" />
          <span class="bank-name">standardBank</span>
        </div>
        <span class="arrow">›</span>
      </div>
    </div>
  </div>
</div>


  <script>
document.querySelectorAll('.js-nova-conta').forEach(item => {
    item.addEventListener('click', function () {
        const nome = this.getAttribute('data-nome');
        const img = this.getAttribute('data-img');

        document.getElementById('bancoSelecionadoImg').src = img;
        document.getElementById('bancoSelecionadoImg').alt = nome;
        document.getElementById('bancoSelecionadoNome').textContent = nome;

        document.querySelector('.novaconta-overlay').classList.add('active');
    });
});

</script>


<style>
    .modal-overlay {
  display: none;
  position: fixed;
  top: 0; left: 0;
  width: 100vw; height: 100vh;
  background-color: rgba(0, 0, 0, 0.6);
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

.modal-overlay.active {
  display: flex;
}

.modal {
  background-color: #fff;
  border-radius: 20px;
  padding: 2rem;
  width: 420px;
  max-height: 85vh;
  overflow-y: auto;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
  position: relative;
}

.modal h2 {
  font-size: 1.25rem;
  font-weight: 600;
  margin-bottom: 1rem;
}

.modal .close-btn {
  position: absolute;
  top: 1rem;
  right: 1.5rem;
  font-size: 1.5rem;
  cursor: pointer;
  color: #888;
}

.modal input.search {
  width: 100%;
  padding: 0.75rem 1rem;
  border: 1px solid #e0e0e0;
  border-radius: 12px;
  font-size: 1rem;
  margin-bottom: 1.5rem;
}

.bank-list {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.bank-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 12px 16px;
  border: 1px solid #eaeaea;
  border-radius: 12px;
  cursor: pointer;
  transition: background 0.2s;
}

.bank-item:hover {
  background-color: #f5f5f5;
}

.bank-info {
  display: flex;
  align-items: center;
  gap: 12px;
}

.bank-info img {
  width: 34px;
  height: 34px;
  border-radius: 50%;
  object-fit: cover;
}

.bank-name {
  font-size: 1rem;
  font-weight: 500;
}

.arrow {
  font-size: 1.3rem;
  color: #999;
}

</style>



  <!-- MODAL NOVA CONTA -->

  {{-- <button class="btn-nova-conta" onclick="document.querySelector('.novaconta-overlay').classList.add('active')">Nova conta</button>
 --}}
<form id="form-nova-conta" method="POST" action="{{ route('account.store') }}" onsubmit="handleSubmit()">


  @csrf
  <div class="novaconta-overlay">
    <div class="novaconta">
      <span class="close-btn" onclick="document.querySelector('.novaconta-overlay').classList.remove('active')">&times;</span>
      <h2>Nova conta</h2>

      <input class="valor-input" type="text" name="saldo_inicial" value="kz 0,00">

      <div class="form-group">
        <label>Instituição financeira</label>
        <div class="instituicao">
          <img id="bancoSelecionadoImg" src="https://via.placeholder.com/24" alt="Banco">
          <span id="bancoSelecionadoNome">Banco</span>
          <input type="hidden" name="instituicao" value="Banco">
        </div>
      </div>

      <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="descricao" placeholder="Descrição">
      </div>

      <div class="form-group">
        <label>Tipo</label>
        <select name="tipo">
          <option value="corrente">Conta corrente</option>
          <option value="poupanca">Poupança</option>
        </select>
      </div>

      <div class="form-group">
        <label>Cor da conta</label>
        <div class="cores">
          <div class="cor ativa" style="background: #00bcd4;" data-cor="#00bcd4"></div>
          <div class="cor" style="background: #9c27b0;" data-cor="#9c27b0"></div>
          <div class="cor" style="background: #ff9800;" data-cor="#ff9800"></div>
        </div>
        <input type="hidden" name="cor" value="#00bcd4">
        <div class="outros">OUTROS</div>
      </div>

      <div class="checkbox-group">
        <input type="checkbox" id="soma" name="incluir_soma" value="1">
        <label for="soma">Incluir na soma da tela inicial</label>
      </div>

      <div class="botoes">
        <button type="submit" class="salvar">SALVAR</button>
      </div>
    </div>
  </div>
</form>


<h1> Suas Contas</h1>
<div id="lista-contas" class="contas-grid">
  @foreach ($accounts as $account)
      <div class="conta-card" onclick="abrirModalConta({{ $account->id }})">
      <div class="card-topo">
        <div class="circulo-icone" style="background: {{ $account->cor }}"></div>
        <span class="descricao">{{ $account->descricao }}</span>

        <div class="menu-wrapper">
          <div class="menu">⋮</div>
          <div class="dropdown-menu">
        {{--     <a href="{{ route('account.edit', $account->id) }}">Editar</a> --}}
            <form action="{{ route('account.destroy', $account->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?')">
              @csrf
              @method('DELETE')
              <button type="submit">Excluir</button>
            </form>
          </div>
        </div>
      </div>

      <div class="saldos">
        <div class="linha-saldo">
          <span class="label">Saldo atual</span>
          <span class="valor">{{ number_format($account->valor, 2, ',', '.') }} kz</span>
        </div>
        <div class="linha-saldo">
          <span class="label">Saldo previsto <span title="Saldo estimado">ℹ️</span></span>
          <span class="valor">{{ number_format($account->valor, 2, ',', '.') }} kz</span>
        </div>
      </div>

      <div class="rodape">
 <a href="#" class="link-despesa" onclick="event.stopPropagation(); mostrarFormularioDespesa({{ $account->id }})">ADICIONAR DESPESA</a>


  <form action="{{ route('account.adicionarDespesa', $account->id) }}" method="POST" class="form-despesa" id="form-despesa-{{ $account->id }}" style="display: none; margin-top: 10px;">
    @csrf
    <input type="number" name="valor_despesa" step="0.01" min="0" placeholder="Valor da despesa" required>
    <button type="submit">Salvar</button>
  </form>
</div>
</div>

    <!-- Modal de detalhes -->
  <div class="modal-conta-overlay" id="modal-conta-{{ $account->id }}" style="display: none;">
    <div class="modal-conta">
      <span class="close-btn" onclick="fecharModalConta({{ $account->id }})">&times;</span>
      <h2>Detalhes da conta</h2>

      <div class="dropdown-wrapper">
        <select>
          <option selected>{{ $account->descricao }}</option>
          {{-- Poderia ter outras contas aqui se quiser --}}
        </select>
      </div>

      <div class="saldo-atual">
        <p>Saldo atual</p>
        <h3>{{ number_format($account->valor, 2, ',', '.') }} kz</h3>
        <button class="reajustar-saldo">REAJUSTE DE SALDO</button>
      </div>

      <ul class="detalhes-lista">
        <li><strong>Tipo de conta:</strong> {{ ucfirst($account->tipo) }}</li>
        <li><strong>Saldo inicial:</strong> {{ number_format($account->saldo_inicial, 2, ',', '.') }} kz</li>
        <li><strong>Quantidade de despesas:</strong> <span style="color:red;">{{ $account->despesas_count }} despesas</span></li>
        <li><strong>Quantidade de receitas:</strong> <span style="color:green;">0 receitas</span></li>
        <li><strong>Quantidade de transferências:</strong> 0 transferências</li>
        <li>
          <strong>Incluir na soma da tela inicial:</strong>
          <input type="checkbox" {{ $account->incluir_soma ? 'checked' : '' }} disabled>
        </li>
      </ul>

      <a href="#" class="editar-conta-link">EDITAR CONTA</a>
    </div>
  </div>
  @endforeach
</div>

<script>
  document.querySelectorAll('.form-despesa').forEach(form => {
    form.addEventListener('click', function(event) {
      event.stopPropagation(); // Para o clique de subir para a div conta-card
    });
  });
</script>


<script>
  function mostrarFormularioDespesa(accountId) {
    const form = document.getElementById('form-despesa-' + accountId);
    form.style.display = form.style.display === 'none' ? 'block' : 'none';
  }
</script>

<script>
  function abrirModalConta(accountId) {
    const modal = document.getElementById('modal-conta-' + accountId);
    if (modal) {
      modal.style.display = 'block';
    }
  }

  function fecharModalConta(accountId) {
    const modal = document.getElementById('modal-conta-' + accountId);
    if (modal) {
      modal.style.display = 'none';
    }
  }
</script>


<script>
  function handleSubmit() {
    // Esconde o modal para evitar bagunça visual
    document.querySelector('.novaconta-overlay').classList.remove('active');

    // Aguarda um pouco e força reload da página
    setTimeout(() => {
      location.reload();
    }, 100); // tempo mínimo só pra garantir transição
  }
</script>

<style>
.modal-conta-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.5);
  z-index: 1000;
  /* Remove o flexbox para este teste */
  display: block;
}

.modal-conta {
  background: #fff;
  padding: 20px;
  width: 400px;
  max-width: 95%;
  border-radius: 12px;
  position: fixed; /* fixo na tela */
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
  animation: fadeIn 0.3s ease;
}


.close-btn {
  position: absolute;
  top: 10px;
  right: 14px;
  font-size: 24px;
  cursor: pointer;
}

.reajustar-saldo {
  background-color: #0049bf;
  color: white;
  border: none;
  padding: 8px 16px;
  border-radius: 8px;
  cursor: pointer;
  margin-top: 10px;
}

.editar-conta-link {
  color: #0049bf;
  text-decoration: none;
  font-weight: bold;
  display: block;
  margin-top: 20px;
  text-align: right;
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}
</style>



<style>
  .menu-wrapper {
  position: relative;
  display: inline-block;
}

.menu {
  font-size: 20px;
  color: #999;
  cursor: pointer;
  padding: 4px;
}

.dropdown-menu {
  display: none;
  position: absolute;
  right: 0;
  top: 24px;
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  z-index: 10;
  min-width: 120px;
  padding: 8px 0;
}

.dropdown-menu a,
.dropdown-menu button {
  display: block;
  width: 100%;
  padding: 8px 16px;
  text-align: left;
  background: none;
  border: none;
  font-size: 14px;
  color: #333;
  cursor: pointer;
  text-decoration: none;
}

.dropdown-menu a:hover,
.dropdown-menu button:hover {
  background-color: #f5f5f5;
}

/* Classe ativada via JS */
.menu-wrapper.active .dropdown-menu {
  display: block;
}


  .conta-item {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 10px;
}

.cor-indicador {
  width: 16px;
  height: 16px;
  border-radius: 50%;
  flex-shrink: 0;
}

.detalhes {
  display: flex;
  flex-direction: column;
}

.contas-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 16px;
}

.conta-card {
  background: white;
  border-radius: 16px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  padding: 16px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  min-height: 180px;
}

.card-topo {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.circulo-icone {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.descricao {
  font-weight: bold;
  color: #555;
  margin-left: 8px;
  flex: 1;
}

.menu {
  font-size: 20px;
  color: #999;
  cursor: pointer;
}

.saldos {
  margin-top: 16px;
}

.linha-saldo {
  display: flex;
  justify-content: space-between;
  font-size: 14px;
  margin-bottom: 6px;
}

.label {
  font-weight: 500;
  color: #000;
}

.valor {
  color: green;
  font-weight: 500;
}

.rodape {
  border-top: 1px solid #eee;
  margin-top: 12px;
  padding-top: 10px;
  text-align: right;
}

.link-despesa {
  color: #0049bf;
  font-weight: bold;
  font-size: 14px;
  text-decoration: none;
}

.link-despesa:hover {
  text-decoration: underline;
}


</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.menu-wrapper .menu').forEach(menuBtn => {
      menuBtn.addEventListener('click', function (e) {
        e.stopPropagation();

        // Fecha outros menus abertos
        document.querySelectorAll('.menu-wrapper').forEach(wrapper => {
          if (wrapper !== this.parentElement) {
            wrapper.classList.remove('active');
          }
        });

        // Alterna o menu atual
        this.parentElement.classList.toggle('active');
      });
    });

    // Fecha menu se clicar fora
    document.addEventListener('click', function () {
      document.querySelectorAll('.menu-wrapper').forEach(wrapper => {
        wrapper.classList.remove('active');
      });
    });
  });
</script>


<script>
document.querySelectorAll('.cor').forEach(el => {
  el.addEventListener('click', function() {
    document.querySelectorAll('.cor').forEach(c => c.classList.remove('ativa'));
    this.classList.add('ativa');
    document.querySelector('input[name="cor"]').value = this.dataset.cor;
  });
});

document.getElementById('form-nova-conta').addEventListener('submit', function(e) {
  e.preventDefault();
  const form = this;
  const formData = new FormData(form);

  fetch("{{ route('account.store') }}", {
    method: 'POST',
    headers: {
      'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
    },
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    if (data.success) {
      document.querySelector('.novaconta-overlay').classList.remove('active');
      form.reset();

      const novaConta = document.createElement('div');
      novaConta.classList.add('conta-item');
      novaConta.innerHTML = `
        <div style="background:${data.account.cor}" class="cor-indicador"></div>
        <strong>${data.account.descricao}</strong>
        <span>${Number(data.account.saldo_inicial).toLocaleString('pt-AO', { style: 'currency', currency: 'AOA' })}</span>
      `;
      document.getElementById('lista-contas').appendChild(novaConta);
    }
  });
});
</script>




<style>
  .novaconta-overlay {
    display: none;
    position: fixed;
    top: 0; left: 0;
    width: 100vw; height: 100vh;
    background-color: rgba(0, 0, 0, 0.6);
    justify-content: center;
    align-items: center;
    z-index: 1000;
  }

  .novaconta-overlay.active {
    display: flex;
  }

  .novaconta {
    background-color: #fff;
    border-radius: 20px;
    width: 460px;
    padding: 32px;
    position: relative;
    box-shadow: 0 15px 45px rgba(0, 0, 0, 0.2);
    font-family: 'Segoe UI', sans-serif;
  }

  .novaconta h2 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 24px;
  }

  .close-btn {
    position: absolute;
    top: 24px;
    right: 28px;
    font-size: 24px;
    color: #888;
    cursor: pointer;
  }

  .valor-input {
    font-size: 28px;
    border: none;
    border-bottom: 2px solid #0049bf;
    outline: none;
    width: 100%;
    margin-bottom: 28px;
    color: #0049bf;
    font-weight: 500;
    padding-left: 0;
    background: transparent;
  }

  .valor-input::placeholder {
    color: #0049bf;
  }

  .form-group {
    margin-bottom: 24px;
  }

  .form-group label {
    display: block;
    font-size: 13px;
    margin-bottom: 8px;
    color: #888;
  }

  .form-group input,
  .form-group select {
    width: 100%;
    padding: 10px 0;
    border: none;
    border-bottom: 1px solid #ccc;
    font-size: 16px;
    outline: none;
    background: transparent;
  }

  .instituicao {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 0;
    border-bottom: 1px solid #ccc;
    cursor: pointer;
  }

  .instituicao img {
    width: 24px;
    height: 24px;
    border-radius: 50%;
  }

  .cores {
    display: flex;
    gap: 12px;
    margin: 10px 0;
  }

  .cores .cor {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    cursor: pointer;
    border: 2px solid transparent;
  }

  .cor.ativa {
    border-color: #000;
  }

  .outros {
    background: #f0f0f0;
    border-radius: 20px;
    padding: 4px 12px;
    display: inline-block;
    font-size: 12px;
    color: #555;
    margin-top: 8px;
  }

  .checkbox-group {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-top: 20px;
  }

  .checkbox-group input[type="checkbox"] {
    appearance: none;
    width: 32px;
    height: 18px;
    background-color: #ccc;
    border-radius: 999px;
    position: relative;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .checkbox-group input[type="checkbox"]::before {
    content: "";
    position: absolute;
    top: 2px;
    left: 2px;
    width: 14px;
    height: 14px;
    background-color: #fff;
    border-radius: 50%;
    transition: all 0.3s ease;
  }

  .checkbox-group input[type="checkbox"]:checked {
    background-color: #0049bf;
  }

  .checkbox-group input[type="checkbox"]:checked::before {
    transform: translateX(14px);
  }

  .checkbox-group label {
    font-size: 14px;
    color: #555;
  }

  .botoes {
    display: flex;
    justify-content: space-between;
    margin-top: 32px;
  }

  .botoes button {
    padding: 12px 20px;
    border-radius: 999px;
    font-size: 13px;
    border: none;
    cursor: pointer;
    font-weight: 500;
  }

  .botoes .salvar-novo {
    background: transparent;
    color: #bbb;
  }

  .botoes .salvar {
    background: #4d44f5;
    color: #ffffff;
  }
</style>

    
    <script>
    document.querySelectorAll('.btn-nova-conta').forEach(item => {
        item.addEventListener('click', function () {
        const nome = this.getAttribute('data-nome');
        const img = this.getAttribute('data-img');

        // Atualiza imagem e nome na modal nova conta
        document.getElementById('bancoSelecionadoImg').src = img;
        document.getElementById('bancoSelecionadoImg').alt = nome;
        document.getElementById('bancoSelecionadoNome').textContent = nome;

        // Abre a modal nova conta
        document.querySelector('.novaconta-overlay').classList.add('active');
        });
    });
    </script>

   <script>
  document.addEventListener('DOMContentLoaded', function () {
    const input = document.querySelector('.valor-input');

    input.addEventListener('input', function (e) {
      let value = e.target.value.replace(/[^\d]/g, '');

      if (value.length === 0) {
        e.target.value = 'kz 0,00';
        return;
      }

      // Remove zeros à esquerda
      value = value.replace(/^0+/, '');

      // Garante pelo menos 3 dígitos para centavos
      value = value.padStart(3, '0');

      const euros = value.slice(0, -2);
      const cents = value.slice(-2);

      const formatted = euros.replace(/\B(?=(\d{3})+(?!\d))/g, '.') + ',' + cents;

      e.target.value = 'kz ' + formatted;
    });

    input.addEventListener('focus', function (e) {
      // Remove € temporariamente se quiser editar
      if (e.target.value === 'kz 0,00') {
        e.target.value = '';
      }
    });

    input.addEventListener('blur', function (e) {
      if (e.target.value.trim() === '' || e.target.value === '€') {
        e.target.value = 'kz 0,00';
      }
    });
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const cores = document.querySelectorAll('.cores .cor');

    cores.forEach(cor => {
      cor.addEventListener('click', function () {
        cores.forEach(c => c.classList.remove('ativa'));
        this.classList.add('ativa');
      });
    });
  });
</script>



</main>

@endsection