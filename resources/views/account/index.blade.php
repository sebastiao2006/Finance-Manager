@extends('layouts.app2')
@section('title', 'Kivula')
@section('content')

<main>
    <h1>Contas</h1>

    <div class="card" class="open-button" id="openModalBtn">
        <i class="fas fa-plus"></i>
        <p >Nova Conta</p>
    </div>



    <div class="modal-overlay" id="modalOverlay">
        <div class="modal" id="modalContent">
          <span class="close-btn" id="closeModalBtn">&times;</span>
          <h2>Qual é a instituição financeira da conta que você quer adicionar?</h2>
          <input type="text" class="search-input" placeholder="Buscar por nome">
          <ul class="bank-list">
            <li class="bank-item" id="abrirModalBtn" class="btn-abrir-modal">
              <div class="bank-icon"><img src="{{ asset('assets/img/bfa.png') }}" alt="BFA"></div>
              <span class="bank-name">BFA</span>
              <span class="info-icon">ℹ️</span>
              <span class="arrow-icon">›</span>
            </li>
            <li class="bank-item">
              <div class="bank-icon"><img src="{{ asset('assets/img/bic.png') }}" alt="BIC"></div>
              <span class="bank-name">BIC</span>
              <span class="info-icon">ℹ️</span>
              <span class="arrow-icon">›</span>
            </li>
            <li class="bank-item">
              <div class="bank-icon"><img src="{{ asset('assets/img/bai.png') }}" alt="BAI"></div>
              <span class="bank-name">BAI</span>
              <span class="info-icon">ℹ️</span>
              <span class="arrow-icon">›</span>
            </li>
            <li class="bank-item">
              <div class="bank-icon"><img src="{{ asset('assets/img/yetu.png') }}" alt="YETU"></div>
              <span class="bank-name">YETU</span>
              <span class="info-icon">ℹ️</span>
              <span class="arrow-icon">›</span>
            </li>
            <li class="bank-item">
              <div class="bank-icon"><img src="{{ asset('assets/img/bank.jpg') }}" alt="standardBank"></div>
              <span class="bank-name">standardBank</span>
              <span class="info-icon">ℹ️</span>
              <span class="arrow-icon">›</span>
            </li>
          </ul>
        </div>
      </div>
    
      <script>
        const openBtn = document.getElementById('openModalBtn');
        const closeBtn = document.getElementById('closeModalBtn');
        const overlay = document.getElementById('modalOverlay');
    
        openBtn.addEventListener('click', () => {
          overlay.style.display = 'flex';
        });
    
        closeBtn.addEventListener('click', () => {
          overlay.style.display = 'none';
        });
    
        overlay.addEventListener('click', (e) => {
          if (e.target === overlay) {
            overlay.style.display = 'none';
          }
        });
      </script>
    


    <style>

        h1 {
            margin-top: 80px;
            font-size: 28px;
            color: #222;
        }
        .card {
            cursor: pointer;
            width: 400px;
            background: white;
            border-radius: 15px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
            padding: 60px;
            text-align: center;
            margin-top: 20px;
        }
        .card i {
            font-size: 24px;
            color: black;
        }
        .card p {
            font-size: 14px;
            color: #333;
            margin-top: 10px;
        }
        
        button {
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 8px;
      border: none;
      background-color: #6200ee;
      color: white;
      cursor: pointer;
    }

    .modal-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background-color: rgba(0, 0, 0, 0.4);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 1000;
    }

    .modal {
      background-color: white;
      border-radius: 20px;
      width: 500px;
      max-width: 95%;
      padding: 30px;
      position: relative;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .modal h2 {
      font-size: 20px;
      margin-bottom: 20px;
    }

    .close-btn {
      position: absolute;
      top: 20px;
      right: 25px;
      font-size: 24px;
      cursor: pointer;
      color: #888;
    }

    .search-input {
      width: 100%;
      padding: 10px;
      border-radius: 10px;
      border: 1px solid #ccc;
      margin-bottom: 25px;
    }

    .bank-list {
      list-style: none;
    }

    .bank-item {
      display: flex;
      align-items: center;
      padding: 12px;
      border-radius: 10px;
      cursor: pointer;
      transition: background-color 0.2s;
    }

    .bank-item:hover {
      background-color: #f1f1f1;
    }

    .bank-icon img {
      width: 100px;
      height: 32px;
      border-radius: 50%;
      margin-right: 12px;
      object-fit: contain;
    }

    .bank-name {
      flex-grow: 1;
    }

    .info-icon {
      margin-left: auto;
      margin-right: 10px;
      color: #888;
    }

    .arrow-icon {
      font-size: 16px;
      color: #888;
    }
    </style>


<!-- Modal -->
<div class="conta-modal" id="contaModal" style="display: none;">
  <div class="modal-overlay"></div>
  <div class="modal-content">
    <button class="close-btn" id="fecharModalBtn">×</button>

    <h2>Nova conta</h2>

    <div class="valor">€ 0,00</div>

    <div class="input-group">
      <label>Instituição financeira</label>
      <div class="instituicao">
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/94/Santander_Logo.png" alt="Santander">
        <span>Santander</span>
      </div>
    </div>

    <div class="input-group">
      <input type="text" placeholder="Descrição">
    </div>

    <div class="input-group">
      <select>
        <option>Conta corrente</option>
      </select>
    </div>

    <div class="input-group">
      <label>Cor da conta</label>
      <div class="cores">
        <span class="cor azul selected"></span>
        <span class="cor roxo"></span>
        <span class="cor verde"></span>
        <span class="cor laranja"></span>
        <button class="outros">OUTROS</button>
      </div>
    </div>

    <div class="input-group switch-group">
      <span>Incluir na soma da tela inicial</span>
      <label class="switch">
        <input type="checkbox" checked>
        <span class="slider"></span>
      </label>
    </div>

    <div class="botoes">
      <button class="btn-secondary">Salvar e criar nova</button>
      <button class="btn-primary">Salvar</button>
    </div>
  </div>
</div>


<style>
  .conta-modal {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1000;
  font-family: Arial, sans-serif;
}

.modal-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
}

.modal-content {
  position: relative;
  background: #fff;
  border-radius: 20px;
  padding: 30px;
  width: 100%;
  max-width: 600px; /* <-- AUMENTADO */
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  z-index: 1001;
}


.close-btn {
  position: absolute;
  top: 20px;
  right: 20px;
  background: transparent;
  border: none;
  font-size: 24px;
  color: #aaa;
  cursor: pointer;
}

h2 {
  font-size: 24px;
  margin-bottom: 20px;
}

.valor {
  color: #7c3aed;
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 30px;
}

.input-group {
  margin-bottom: 20px;
}

.input-group label {
  display: block;
  font-size: 14px;
  margin-bottom: 8px;
  color: #555;
}

.instituicao {
  display: flex;
  align-items: center;
  border: 1px solid #ccc;
  padding: 10px;
  border-radius: 8px;
  cursor: pointer;
}

.instituicao img {
  width: 24px;
  height: 24px;
  margin-right: 10px;
}

.input-group input,
.input-group select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 14px;
}

.cores {
  display: flex;
  align-items: center;
  gap: 10px;
}

.cor {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  border: 2px solid #ccc;
  cursor: pointer;
}

.cor.azul { background-color: #06b6d4; }
.cor.roxo { background-color: #8b5cf6; }
.cor.verde { background-color: #65a30d; }
.cor.laranja { background-color: #f59e0b; }

.selected {
  border: 3px solid #000;
}

.outros {
  background: #eee;
  border: none;
  padding: 5px 10px;
  border-radius: 12px;
  font-size: 12px;
  cursor: pointer;
}

.switch-group {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.switch {
  position: relative;
  display: inline-block;
  width: 44px;
  height: 24px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  border-radius: 24px;
  transition: .4s;
}

.slider::before {
  position: absolute;
  content: "";
  height: 18px;
  width: 18px;
  left: 3px;
  bottom: 3px;
  background-color: white;
  transition: .4s;
  border-radius: 50%;
}

.switch input:checked + .slider {
  background-color: #7c3aed;
}

.switch input:checked + .slider::before {
  transform: translateX(20px);
}

.botoes {
  display: flex;
  justify-content: flex-end;
  gap: 10px;
  margin-top: 30px;
}

.btn-secondary {
  background: #e0e0e0;
  color: #555;
  border: none;
  padding: 10px 16px;
  border-radius: 10px;
  font-size: 14px;
  cursor: pointer;
}

.btn-primary {
  background: #7c3aed;
  color: #fff;
  border: none;
  padding: 10px 16px;
  border-radius: 10px;
  font-size: 14px;
  cursor: pointer;
}

/* Botão de abrir a modal */
.btn-abrir-modal {
  padding: 10px 20px;
  background-color: #7c3aed;
  color: white;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  font-size: 16px;
}

</style>

<script>
  const abrirModalBtn = document.getElementById('abrirModalBtn');
  const fecharModalBtn = document.getElementById('fecharModalBtn');
  const contaModal = document.getElementById('contaModal');

  abrirModalBtn.addEventListener('click', () => {
    contaModal.style.display = 'flex';
  });

  fecharModalBtn.addEventListener('click', () => {
    contaModal.style.display = 'none';
  });
</script>







</main>

@endsection