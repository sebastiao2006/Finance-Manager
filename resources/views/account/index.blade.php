@extends('layouts.app6')
@section('title', 'Kivula')
@section('content')

<main>

    <div class="card-wrapper">
    <h2 class="card-title">Contas</h2>
    <div class="card-nova-conta" class="btn-abrir" onclick="document.querySelector('.modal-overlay').classList.add('active')">
        <div class="plus-circle">+</div>
        <span class="card-label">Nova conta</span>
    </div>
    </div>



<style>


.card-wrapper {
    margin-top: 50px;
  display: flex;
  flex-direction: column;
  align-items: flex-start; /* alinha à esquerda */
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
  <div class="novaconta-overlay">
    <div class="novaconta">
      <span class="close-btn" onclick="document.querySelector('.novaconta-overlay').classList.remove('active')">&times;</span>
      <h2>Nova conta</h2>
      <input class="valor-input" type="text" value="kz 0,00">

      <div class="form-group">
        <label>Instituição financeira</label>
        <div class="instituicao">
            <img id="bancoSelecionadoImg" src="https://via.placeholder.com/24" alt="Banco">
            <span id="bancoSelecionadoNome">Banco</span>
        </div>
     </div>


      <div class="form-group">
         <label>Descrição</label> 
        <input type="text" placeholder="Descrição">
      </div>

      <div class="form-group">
        <label>Tipo</label>
        <select>
          <option>Conta corrente</option>
          <option>Poupança</option>
        </select>
      </div>

      <div class="form-group">
        <label>Cor da conta</label>
        <div class="cores">
          <div class="cor ativa" style="background: #00bcd4;"></div>
          <div class="cor" style="background: #9c27b0;"></div>
          <div class="cor" style="background: #ff9800;"></div>
        </div>
        <div class="outros">OUTROS</div>
      </div>

      <div class="checkbox-group">
        <input type="checkbox" id="soma">
        <label for="soma">Incluir na soma da tela inicial</label>
      </div>

      <div class="botoes">
        <button class="salvar-novo">SALVAR E CRIAR NOVA</button>
        <button class="salvar">SALVAR</button>
      </div>
    </div>
  </div>


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
    border-bottom: 2px solid #7f3dff;
    outline: none;
    width: 100%;
    margin-bottom: 28px;
    color: #7f3dff;
    font-weight: 500;
    padding-left: 0;
    background: transparent;
  }

  .valor-input::placeholder {
    color: #7f3dff;
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
    background-color: #7f3dff;
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
    background: #e0e0e0;
    color: #999;
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