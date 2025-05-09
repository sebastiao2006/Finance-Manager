

    <div >
        
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

        <div class="profile">
            <div class="info">
                <p>Hey, <b>Reza</b></p>
                <small class="text-muted">Admin</small>
            </div>
            <div class="profile-photo">
                <img src="images/profile-1.jpg">
            </div>
        </div>

    </div>
    <!-- End of Nav -->
        
        

    <div class="user-profile">
        <div class="saldo-container">
            <div class="saldo-header">
                <select id="mesSelect" style="font-size: 18px; font-weight: bold;">
                    @php
                        $meses = [
                            'janeiro', 'fevereiro', 'marco', 'abril', 'maio', 'junho',
                            'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'
                        ];
                    @endphp
                    @foreach ($meses as $mes)
                        <option value="{{ $mes }}" {{ strtolower($month) == $mes ? 'selected' : '' }}>
                            {{ ucfirst($mes) }}
                        </option>
                    @endforeach
                </select>
            </div>
    
            <p class="saldo-descricao">Saldo até o fim de {{ ucfirst($month) }}</p>
            <p class="saldo-valor">
                <span id="saldoValor" contenteditable="true" inputmode="decimal">
                    {{ number_format($saldo, 2, ',', '.') }}
                </span>
                <span> Kz</span>
            </p>
        </div>
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
          <h2>Lembretes</h2>
          <span class="material-icons-sharp">notifications_none</span>
        </div>
      
        <div class="notification">
          <div class="icon">
            <span class="material-icons-sharp">volume_up</span>
          </div>
          <div class="content">
            <div class="info">
              <h3>Tarefas</h3>
              <small class="text_muted">08:00 AM - 12:00 PM</small>
            </div>
            <div class="actions">
              <span class="material-icons-sharp edit-btn">edit</span>
              <span class="material-icons-sharp delete-btn">delete</span>
            </div>
          </div>
        </div>
      
        <div class="notification deactive">
          <div class="icon">
            <span class="material-icons-sharp">edit</span>
          </div>
          <div class="content">
            <div class="info">
              <h3>Metas</h3>
              <small class="text_muted">08:00 AM - 12:00 PM</small>
            </div>
            <div class="actions">
              <span class="material-icons-sharp edit-btn">edit</span>
              <span class="material-icons-sharp delete-btn">delete</span>
            </div>
          </div>
        </div>
      
        <div class="notification add-reminder">
          <div>
            <span class="material-icons-sharp">add</span>
            <h3>Add Reminder</h3>
          </div>
        </div>
      </div>
      
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


