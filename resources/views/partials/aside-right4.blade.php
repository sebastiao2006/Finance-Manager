      
   
   <!-- Right Section -->
   <div class="right-section">
    <div class="nav">
      <button id="menu-btn">
        <span class="material-icons-sharp">
            menu
        </span>
    </button>
        <div class="dark-mode">
            <span class="material-icons-sharp active">
                light_mode
            </span>
            <span class="material-icons-sharp">
                dark_mode
            </span>
        </div>

          <!-- Perfil com clique -->
    <!-- Perfil com clique -->
    <div class="profile" onclick="toggleUserMenu()" style="cursor: pointer;">
      <div class="info">
    <p>Olá, <b>{{ Auth::user()->name }}</b></p>
    {{-- <small class="text-muted">Admin</small> --}}
</div>

  <div class="profile-photo">
    <img src="{{ Auth::user()->profile_image_url }}" alt="Foto de Perfil">
</div>
  </div>
  
  <div id="userDropdown" style="display: none; position: absolute; top: 60px; right: 20px; background-color: white; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.3); width: 180px; z-index: 999;">
      <ul style="list-style: none; margin: 0; padding: 10px;">
          <li><a href="/perfil" style="display: block; padding: 10px; color: #333; text-decoration: none;">Perfil</a></li>
          <li><a href="/notificacoes" style="display: block; padding: 10px; color: #333; text-decoration: none;">Notificações</a></li>
          <li>
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" style="background-color: transparent; border: none; display: block; width: 100%; padding: 10px; text-align: left; color: #333; cursor: pointer;">
                      Logout
                  </button>
              </form>
          </li>
      </ul>
  </div>

    </div>

    <script>
  function toggleUserMenu() {
      const dropdown = document.getElementById('userDropdown');
      dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
  }

  // Fecha o menu ao clicar fora
  window.addEventListener('click', function (event) {
      const dropdown = document.getElementById('userDropdown');
      const profile = document.querySelector('.profile');

      if (!profile.contains(event.target) && !dropdown.contains(event.target)) {
          dropdown.style.display = 'none';
      }
  });
</script>
    <!-- End of Nav -->

    <style>
       
    
        .button-container {
          display: flex;
          gap: 10px;
          align-items: center;
        }
    
        .btn {
          display: flex;
          align-items: center;
          justify-content: center;
          border: none;
          cursor: pointer;
          box-shadow: 0 1px 2px rgba(0,0,0,0.1);
          transition: background-color 0.3s;
        }
    
        .btn:focus {
          outline: none;
        }
    
        .btn-text {
          background-color: white;
          border-radius: 999px;
          padding: 10px 20px;
          color: green;
          font-weight: normal;
          font-size: 14px;
          display: flex;
          align-items: center;
          gap: 5px;
        }
        .btn.active {
        background-color: green !important;
        color: white;
        }

    
        .btn-icon {
          background-color: white;
          border-radius: 50%;
          width: 40px;
          height: 40px;
          font-size: 20px;
          color: #555;
        }
    
        .material-icons {
          font-size: 20px;
        }
    
        .btn-icon:hover, .btn-text:hover {
          background-color: #f0f0f0;
        }
      </style>
    
    
      <div class="button-container">
        <!-- Botão Nova Receita -->
        <button class="btn btn-text" id="openModalBtn">
        <span class="material-icons" style="font-size:18px; color:green;">add</span>
        <span style="margin-left:5px; white-space: nowrap;">NOVA RECEITA</span>
        </button>

          
    
        <!-- Botão de pesquisa -->
        <button class="btn btn-icon">
          <span class="material-icons">search</span>
        </button>
    
        <!-- Botão de filtro -->
        <button class="btn btn-icon">
          <span class="material-icons">filter_list</span>
        </button>
    
        <!-- Botão de mais opções -->
        <button class="btn btn-icon">
          <span class="material-icons">more_vert</span>
        </button>
      </div>
        
        



 <div class="painel">
    <div class="right-panel">
        <div class="info-box">
            <div class="info-text">
                <span>Saldo atual ></span>
                <strong>kz 0,00</strong> 
            </div>
            <div class="icon-circle blue">
                <i class="fas fa-university"></i>
            </div>
        </div>

        <script>
          document.addEventListener('DOMContentLoaded', () => {
              const saldoAtual = document.querySelector('.info-box strong');
              const mesSelecionado = localStorage.getItem('mesSelecionado') || 'janeiro';
              let valorSalvo = localStorage.getItem(mesSelecionado) || '0.00';
      
              // Converte para formato "0,00"
              valorSalvo = parseFloat(valorSalvo).toFixed(2).replace('.', ',');
      
              if (saldoAtual) {
                  saldoAtual.textContent = `kz ${valorSalvo}`;
              }
          });
      </script>
      
          

    
        <div class="info-box">
            <div class="info-text">
                <span>Receitas ></span>
                <strong>kz 0,00</strong> 
            </div>
            <div class="icon-circle green">
                <i class="fas fa-arrow-up"></i>
            </div>
        </div>
    
        <div class="info-box">
            <div class="info-text">
                <span>Despesas ></span>
                <strong>kz 0,00</strong> 
            </div>
            <div class="icon-circle red">
                <i class="fas fa-arrow-down"></i>
            </div>
        </div>
    
        <div class="info-box">
            <div class="info-text">
                <span>Balanço mensal ></span>
                <strong>kz 0,00</strong> 
            </div>
            <div class="icon-circle dark-green">
                <i class="fas fa-balance-scale"></i>
            </div>
        </div>
    </div>
    
    
 </div>
    </div>


</div>

<style>
.right-panel {
margin-top: 5%;
flex: 1;
display: flex;
flex-direction: column;
gap: 10px;
}

.info-box {
background: white;
padding: 20px;
border-radius: 20px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
display: flex;
justify-content: space-between;
align-items: center;
width: 100%;
}

.info-text {
display: flex;
flex-direction: column;
}

.info-text span {
font-size: 14px;
color: gray;
}

.info-text strong {
font-size: 20px;
color: black;
font-weight: normal; /* Remover o negrito */
}

.icon-circle {
width: 40px;
height: 40px;
display: flex;
align-items: center;
justify-content: center;
border-radius: 50%;
color: white;
font-size: 20px;
}

.blue {
background-color: #007bff;
}

.green {
background-color: #28a745;
}

.red {
background-color: #dc3545;
}

.dark-green {
background-color: #046c4e;
}

</style>


    
 <!-- Modal -->
 <style>


    .open-btn {
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      background-color: green;
      color: white;
      border-radius: 10px;
      cursor: pointer;
    }

    .modal-overlay {
      position: fixed;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0,0,0,0.5);
      display: flex;
      align-items: center;
      justify-content: center;
      visibility: hidden;
      opacity: 0;
      transition: 0.3s ease;
    }

    .modal-overlay.active {
      visibility: visible;
      opacity: 1;
    }

    .modal {
      background-color: white;
      border-radius: 20px;
      width: 400px;
      padding: 20px 25px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      position: relative;
    }

    .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .close-btn {
      cursor: pointer;
      font-size: 24px;
      color: #999;
    }

    .input-amount {
      font-size: 28px;
      border: none;
      width: 100%;
      color: green;
      margin-bottom: 5px;
    }

    .input-amount:focus {
      outline: none;
    }

    .error-text {
      color: orange;
      font-size: 12px;
      margin-bottom: 15px;
    }

    .switch-container {
      display: flex;
      align-items: center;
      margin: 15px 0;
      justify-content: space-between;
    }

    .switch {
      position: relative;
      display: inline-block;
      width: 34px;
      height: 20px;
    }

    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0; left: 0; right: 0; bottom: 0;
      background-color: #ccc;
      transition: .4s;
      border-radius: 20px;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 14px;
      width: 14px;
      left: 3px;
      bottom: 3px;
      background-color: white;
      transition: .4s;
      border-radius: 50%;
    }

    input:checked + .slider {
      background-color: green;
    }

    input:checked + .slider:before {
      transform: translateX(14px);
    }

    .btn-group {
      display: flex;
      gap: 10px;
      margin-bottom: 15px;
    }

    .btn {
      flex: 1;
      padding: 8px;
      border-radius: 20px;
      border: none;
      cursor: pointer;
      font-size: 14px;
    }

    .btn.active {
      background-color: #e0e0e0;
    }

    .input-line {
      border: none;
      border-bottom: 1px solid #ccc;
      width: 100%;
      padding: 8px 0;
      margin-bottom: 15px;
      font-size: 14px;
    }

    .input-line:focus {
      outline: none;
      border-bottom: 1px solid green;
    }

    .select {
      display: flex;
      align-items: center;
      justify-content: space-between;
      border: 1px solid #ccc;
      border-radius: 20px;
      padding: 5px 10px;
      font-size: 14px;
      margin-bottom: 15px;
      cursor: pointer;
    }

    .select .label {
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .badge {
      border: 1px solid purple;
      color: purple;
      padding: 2px 8px;
      border-radius: 20px;
      font-size: 12px;
    }

    .badge-red {
      border: 1px solid #00bcd4;
      color: #00bcd4;
    }

    .badge-red .material-icons {
      color: red;
    }

    .footer-links {
      font-size: 14px;
      color: #333;
      margin: 20px 0;
      text-align: right;
      cursor: pointer;
    }

    .btn-footer {
      width: 100%;
      display: flex;
      gap: 10px;
      margin-top: 10px;
    }

    .btn-footer .btn {
      flex: 1;
      border-radius: 20px;
      font-size: 14px;
      padding: 10px;
    }

    .btn-footer .btn:disabled {
      background-color: #eee;
      color: #aaa;
      cursor: not-allowed;
    }

    .info-line {
      display: flex;
      align-items: center;
      gap: 5px;
      color: #777;
      font-size: 14px;
      margin-bottom: 10px;
      cursor: pointer;
    }

  </style>


  {{-- <button class="open-btn" id="openModalBtn">Abrir Modal</button> --}}

  <div class="modal-overlay" id="modalOverlay">

    <div class="modal" id="modalContent">
      <!-- Header -->
      <div class="modal-header">
        Nova receita
        <span class="material-icons close-btn" id="closeModalBtn">close</span>
      </div>

      <!-- Valor -->
      <div>
        <input type="text" class="input-amount" placeholder="kz 0,00" value="kz 0,00" id="amountInput" inputmode="decimal">
        <div class="error-text">Deve ter um valor maior que 0</div>
      </div>

      <!-- Switch -->
      <div class="switch-container">
        <span>Foi recebida</span>
        <label class="switch">
          <input type="checkbox" checked>
          <span class="slider"></span>
        </label>
      </div>

      <!-- Data -->
      <div class="btn-group">
        <button class="btn active">Hoje</button>
        <button class="btn">Ontem</button>
        <button class="btn">Outros...</button>
      </div>

      <!-- Descrição -->
      <input type="text" class="input-line" placeholder="Descrição">

    <!-- Categoria -->
<div class="select" style="position: relative; cursor: pointer; user-select: none;" id="categoriaSelect">
  <div class="label">
    <span class="material-icons" style="color: purple;">category</span>
    <span class="badge" id="categoriaSelecionada">Categoria</span>
  </div>
  <span class="material-icons">expand_more</span>

  <!-- Opções de categoria -->
  <ul class="category-options" style="
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background: white;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    list-style: none;
    padding: 10px 0;
    margin: 0;
    z-index: 10;
  ">
    <li class="categoria-item" style="padding: 10px 20px; cursor: pointer;">Alimentação</li>
    <li class="categoria-item" style="padding: 10px 20px; cursor: pointer;">Transporte</li>
    <li class="categoria-item" style="padding: 10px 20px; cursor: pointer;">Educação</li>
    <li class="categoria-item" style="padding: 10px 20px; cursor: pointer;">Lazer</li>
    <li class="categoria-item" style="padding: 10px 20px; cursor: pointer;">Casa</li>
    <li class="categoria-item" style="padding: 10px 20px; cursor: pointer;">Saúde</li>
    <li class="categoria-item" style="padding: 10px 20px; cursor: pointer;">Outros</li>
  </ul>
</div>

<script>
  const select = document.getElementById('categoriaSelect');
  const options = select.querySelector('.category-options');
  const displayText = document.getElementById('categoriaSelecionada');
  const items = select.querySelectorAll('.categoria-item');

  // Abrir/fechar dropdown
  select.addEventListener('click', (e) => {
    options.style.display = options.style.display === 'block' ? 'none' : 'block';
  });

  // Selecionar uma categoria
  items.forEach(item => {
    item.addEventListener('click', (e) => {
      e.stopPropagation(); // evita reabrir o menu
      displayText.textContent = item.textContent;
      options.style.display = 'none';
    });
  });

  // Fechar dropdown ao clicar fora
  document.addEventListener('click', function (e) {
    if (!select.contains(e.target)) {
      options.style.display = 'none';
    }
  });
</script>


<!-- Conta / Banco -->
<div class="select" style="position: relative; cursor: pointer; user-select: none;" id="bancoSelect">
  <div class="label">
    <span class="material-icons" style="color: red;">account_balance</span>
    <span class="badge badge-red" id="bancoSelecionado">Banco</span>
  </div>
  <span class="material-icons">expand_more</span>

  <!-- Opções de conta/banco -->
  <ul class="banco-options" style="
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background: white;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    list-style: none;
    padding: 10px 0;
    margin: 0;
    z-index: 10;
  ">
    <li class="banco-item" style="padding: 10px 20px; cursor: pointer;">Caixa</li>
    <li class="banco-item" style="padding: 10px 20px; cursor: pointer;">Banco do Brasil</li>
    <li class="banco-item" style="padding: 10px 20px; cursor: pointer;">Nubank</li>
    <li class="banco-item" style="padding: 10px 20px; cursor: pointer;">Itaú</li>
    <li class="banco-item" style="padding: 10px 20px; cursor: pointer;">Santander</li>
    <li class="banco-item" style="padding: 10px 20px; cursor: pointer;">Carteira</li>
    <li class="banco-item" style="padding: 10px 20px; cursor: pointer;">Outros</li>
  </ul>
</div>

<script>
  const bancoSelect = document.getElementById('bancoSelect');
  const bancoOptions = bancoSelect.querySelector('.banco-options');
  const bancoTexto = document.getElementById('bancoSelecionado');
  const bancoItems = bancoSelect.querySelectorAll('.banco-item');

  // Abrir/fechar dropdown
  bancoSelect.addEventListener('click', () => {
    bancoOptions.style.display = bancoOptions.style.display === 'block' ? 'none' : 'block';
  });

  // Selecionar banco
  bancoItems.forEach(item => {
    item.addEventListener('click', (e) => {
      e.stopPropagation(); // Evita reabrir o menu
      bancoTexto.textContent = item.textContent;
      bancoOptions.style.display = 'none';
    });
  });

  // Fechar dropdown ao clicar fora
  document.addEventListener('click', function (e) {
    if (!bancoSelect.contains(e.target)) {
      bancoOptions.style.display = 'none';
    }
  });
</script>


      <!-- Anexar -->
      <div class="info-line">
        <span class="material-icons">attach_file</span>
        Anexar Arquivo
      </div>

      <!-- Ignorar -->
      <div class="switch-container">
        <span class="info-line">
          <span class="material-icons">info</span>
          Ignorar transação
        </span>
        <label class="switch">
          <input type="checkbox">
          <span class="slider"></span>
        </label>
      </div>

      <!-- Mais detalhes -->
      <div class="footer-links">Mais detalhes &gt;</div>

      <!-- Botões -->
      <div class="btn-footer">
        <button class="btn" disabled>SALVAR E CRIAR NOVA</button>
        <button class="btn" disabled>SALVAR</button>
      </div>

    </div>
  </div>

  <script>
    const openBtn = document.getElementById('openModalBtn');
    const closeBtn = document.getElementById('closeModalBtn');
    const modalOverlay = document.getElementById('modalOverlay');
    const modalContent = document.getElementById('modalContent');

    openBtn.addEventListener('click', () => {
      modalOverlay.classList.add('active');
    });

    closeBtn.addEventListener('click', () => {
      modalOverlay.classList.remove('active');
    });

    // Fechar ao clicar fora da modal
    modalOverlay.addEventListener('click', (e) => {
      if (e.target === modalOverlay) {
        modalOverlay.classList.remove('active');
      }
    });

    const amountInput = document.getElementById('amountInput');
const descriptionInput = document.querySelector('.input-line');
const saveButtons = document.querySelectorAll('.btn-footer .btn');

function formatMoney(value) {
  value = value.replace(/\D/g, ''); // remove não números
  value = (parseInt(value, 10) / 100).toFixed(2); // divide por 100 para decimal
  return 'kz ' + value.replace('.', ',');
}

amountInput.addEventListener('input', (e) => {
  let cursorPos = amountInput.selectionStart;
  amountInput.value = formatMoney(amountInput.value);
  amountInput.setSelectionRange(cursorPos, cursorPos);
  checkForm();
});

descriptionInput.addEventListener('input', checkForm);

function checkForm() {
  const amountValid = amountInput.value !== 'kz 0,00';
  const descriptionValid = descriptionInput.value.trim().length > 0;

  if (amountValid && descriptionValid) {
    saveButtons.forEach(btn => {
      btn.disabled = false;
      btn.style.backgroundColor = 'green';
      btn.style.color = 'white';
      btn.style.cursor = 'pointer';
    });
  } else {
    saveButtons.forEach(btn => {
      btn.disabled = true;
      btn.style.backgroundColor = '#eee';
      btn.style.color = '#aaa';
      btn.style.cursor = 'not-allowed';
    });
  }
}

const dateButtons = document.querySelectorAll('.btn-group .btn');

dateButtons.forEach(btn => {
  btn.addEventListener('click', () => {
    dateButtons.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
  });
});


  </script>

{{--  <style>
.saldo-container {
    text-align: center;
    margin-top: 20px;
    padding: 15px;
    border-radius: 10px;
    max-width: 300px;
    margin: 20px auto;
}

.saldo-header {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px;
}

.saldo-header h3 {
    font-size: 16px;
    color: #777;
    margin: 0;
}

.dropdown-icon {
    font-size: 14px;
    cursor: pointer;
}

.saldo-descricao {
    font-size: 14px;
    color: #555;
    margin-bottom: 5px;
}

.saldo-valor {
    font-size: 24px;
    font-weight: bold;
    color: #ffbf00;
}

.icon-visibility {
    font-size: 20px;
    color: #777;
    cursor: pointer;
    transition: color 0.3s;
}

.icon-visibility:hover {
    color: #333;
}

</style> --}}