   <!-- Right Section -->
<div class="right-section">
<<<<<<< HEAD
  <div class="nav" style="position: relative;">
    <button id="menu-btn">
        <span class="material-icons-sharp">
            menu
        </span>
    </button>


    <!-- Perfil com clique -->
=======
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
>>>>>>> bc205fd0eca1e6c550476cc0e36bcb8dcd048751
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
<<<<<<< HEAD
          <li><a href="{{ route('settings.index') }}" class="{{ request()->routeIs('settings.index') ? 'active' : '' }} "style=" display: block; padding: 10px; color: #333; text-decoration: none;">Perfil</a></li>
=======
          <li><a href="{{ route('settings.index') }}" style="display: block; padding: 10px; color: #333; text-decoration: none;">Perfil</a></li>
>>>>>>> bc205fd0eca1e6c550476cc0e36bcb8dcd048751
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



<style>
  
</style>
    <!-- End of Nav -->
        
        

    <div class="user-profile">
        <form method="GET" action="{{ route('dashboard.index') }}" id="filtroForm">
    <div class="saldo-container">
        <div class="saldo-header" style="display: flex; align-items: center; gap: 10px;">
            @php
                $meses = [
                    1 => 'janeiro', 2 => 'fevereiro', 3 => 'março', 4 => 'abril',
                    5 => 'maio', 6 => 'junho', 7 => 'julho', 8 => 'agosto',
                    9 => 'setembro', 10 => 'outubro', 11 => 'novembro', 12 => 'dezembro'
                ];
            @endphp

            <!-- Mês -->
            <select name="month" id="mesSelect" style="font-size: 18px; font-weight: bold;">
                @foreach ($meses as $num => $nome)
                    <option value="{{ $num }}" {{ $num == $month ? 'selected' : '' }}>
                        {{ ucfirst($nome) }}
                    </option>
                @endforeach
            </select>

            <!-- Ano -->
            <select name="year" id="anoSelect" style="font-size: 18px; font-weight: bold;">
                @foreach(range(date('Y') - 5, date('Y')) as $y)
                    <option value="{{ $y }}" {{ $y == $year ? 'selected' : '' }}>
                        {{ $y }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Descrição -->
        <p class="saldo-descricao">Saldo até o fim de {{ $meses[intval($month)] }}</p>

        <!-- Valor -->
        <p class="saldo-valor">
            <span id="saldoValor" contenteditable="true" inputmode="decimal">
                {{ number_format($saldo, 2, ',', '.') }}
            </span>
            <span> Kz</span>
        </p>
    </div>
</form>

<!-- JavaScript para envio automático do formulário -->
<script>
    document.getElementById('mesSelect').addEventListener('change', function () {
        document.getElementById('filtroForm').submit();
    });
    document.getElementById('anoSelect').addEventListener('change', function () {
        document.getElementById('filtroForm').submit();
    });
</script>

    </div>
    
    <script>
        document.getElementById('mesSelect').addEventListener('change', function() {
            const mes = this.value;
            window.location.href = "{{ route('dashboard.index') }}" + "?month=" + mes;
        });
    </script>
    <script>
      function salvarSaldoLocal() {
          const saldoValor = document.getElementById('saldoValor').innerText.replace(/\./g, '').replace(',', '.');
          const mesSelecionado = document.getElementById('mesSelect').value;
          localStorage.setItem('mesSelecionado', mesSelecionado);
          localStorage.setItem(mesSelecionado, saldoValor);
      }
  
      document.addEventListener('DOMContentLoaded', salvarSaldoLocal);
  </script>
  
    

  
    
 {{--    <script>
        const saldoEl = document.getElementById('saldoValor');
        const mesSelect = document.getElementById('mesSelect');



    
        // Função para recuperar o valor do mês no localStorage
        function recuperarValorMes(mes) {
            return localStorage.getItem(mes) || '0,00';
        }
    
        // Função para salvar o valor do mês no localStorage
        function salvarValorMes(mes, valor) {
            localStorage.setItem(mes, valor);
        }
    
        // Inicializa o valor do saldo baseado no mês selecionado
        function inicializarSaldo() {
            const mesSelecionado = mesSelect.value;
            saldoEl.textContent = recuperarValorMes(mesSelecionado);
        }
    
        // Inicializa o saldo ao carregar a página
        inicializarSaldo();
    
        saldoEl.addEventListener('focus', () => {
            const range = document.createRange();
            const sel = window.getSelection();
            range.selectNodeContents(saldoEl);
            range.collapse(false); // Coloca o cursor no final
            sel.removeAllRanges();
            sel.addRange(range);
        });
    
        saldoEl.addEventListener('blur', () => {
            let texto = saldoEl.textContent.replace(',', '.').replace(/[^\d.]/g, '');
            const valor = parseFloat(texto);
    
            if (!isNaN(valor)) {
                const mesSelecionado = mesSelect.value;
                const valorFormatado = valor.toLocaleString('pt-AO', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
    
                saldoEl.textContent = valorFormatado;
                salvarValorMes(mesSelecionado, valorFormatado); // Salva o valor no localStorage
            } else {
                saldoEl.textContent = '0,00';
            }
        });
    
        // Quando o mês for alterado
        mesSelect.addEventListener('change', () => {
            const mesSelecionado = mesSelect.value;
            saldoEl.textContent = recuperarValorMes(mesSelecionado); // Atualiza o saldo com o valor do mês selecionado
        });
    </script> --}}
    

    <div class="reminders">
        <div class="header">
          <h2>Dicas</h2>
          <span class="material-icons-sharp">notifications_none</span>
        </div>
      
    @php
  $tip = \App\Models\Tip::first();
@endphp

@if($tip)
<div class="finance-tip">
  <div class="icon">
    <span class="material-icons-sharp">savings</span>
  </div>
  <div class="content">
    <div class="info">
      <h3>{{ $tip->title }}</h3>
      <p class="tip-text">{{ $tip->text }}</p>
      <small class="text-muted">Atualizado: {{ $tip->updated_at_time }}</small>
    </div>
  </div>
</div>
@endif

<style>
  .finance-tip {
  display: flex;
  align-items: center;
  background-color: #f0f8ff;
  border-left: 5px solid #4caf50;
  padding: 1rem;
  margin-bottom: 1rem;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.finance-tip .icon {
  margin-right: 1rem;
  color: #4caf50;
}

.finance-tip .content {
  flex: 1;
  display: flex;
  justify-content: space-between;
  align-items: start;
}

.finance-tip .info h3 {
  margin: 0;
  font-size: 1.1rem;
  color: #333;
}

.finance-tip .tip-text {
  margin: 0.3rem 0;
  color: #555;
}

.text-muted {
  color: #888;
  font-size: 0.8rem;
}

.actions .material-icons-sharp {
  cursor: pointer;
  margin-left: 0.5rem;
  color: #888;
  transition: color 0.2s;
}

.actions .material-icons-sharp:hover {
  color: #000;
}

  </style>        
      
      <div class="finance-tip active">
  <div class="icon">
    <span class="material-icons-sharp">savings</span>
  </div>
  <div class="content">
    <div class="info">
      <h3>Dica Financeira</h3>
      <p class="tip-text">Reserva uma parte do teu rendimento mensal, mesmo que seja pequena, para criar um fundo de emergência.</p>
      <small class="text-muted">Atualizado: 08:00 AM</small>
    </div>
  </div>
</div>
      

      
      <style>
        
      </style>

      
        <script>
const addReminderBtn = document.querySelector('.add-reminder');
const remindersContainer = document.querySelector('.reminders');

addReminderBtn.addEventListener('click', () => {
  const newNotification = document.createElement('div');
  newNotification.className = 'notification';

  newNotification.innerHTML = `
    <div class="icon">
      <span class="material-icons-sharp">event</span>
    </div>
    <div class="content">
      <div class="info">
        <h3>Novo Lembrete</h3>
        <small class="text_muted">00:00 AM - 00:00 PM</small>
      </div>
      <div class="actions">
        <span class="material-icons-sharp edit-btn">edit</span>
        <span class="material-icons-sharp delete-btn">delete</span>
      </div>
    </div>
  `;

  // Inserir antes do botão "Add Reminder"
  remindersContainer.insertBefore(newNotification, addReminderBtn);

  attachActions(newNotification);
});

// Função para Editar e Apagar
function attachActions(notification) {
  const editBtn = notification.querySelector('.edit-btn');
  const deleteBtn = notification.querySelector('.delete-btn');
  const title = notification.querySelector('h3');

  editBtn.addEventListener('click', () => {
    const newTitle = prompt('Edite o lembrete:', title.textContent);
    if (newTitle) {
      title.textContent = newTitle;
    }
  });

  deleteBtn.addEventListener('click', () => {
    if (confirm('Deseja apagar este lembrete?')) {
      notification.remove();
    }
  });
}

// Aplica nas notificações já existentes
document.querySelectorAll('.notification').forEach(attachActions);

        </script>

    </div>


</div>

<style>
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

</style>


