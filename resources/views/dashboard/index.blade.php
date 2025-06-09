@extends('layouts.app')
@section('title', 'Meu Kumbu')
@section('content')

<!-- Main Content -->
<main>
    <h1>Dashboard</h1>
<<<<<<< HEAD
  
<div class="analyse">

    <div class="sales">
=======

<div class="analyse">
    <div class="sales" id="openModalBtn" type="button">
>>>>>>> bc205fd0eca1e6c550476cc0e36bcb8dcd048751
        <div class="status">
            <div class="info">
                <h3>Entradas</h3>
                <h1>
                    <a href="{{ route('transaction.receita') }}" style="color: inherit; text-decoration: none;">
                        <span id="entradaValor">{{ number_format($entradas, 2, ',', '.') }}</span><span> kz</span>
                    </a>
                </h1>
            </div>
            <div class="enter">
                <img src="assets/img/income.svg" alt="Imagem de entradas" />
            </div>
        </div>
<<<<<<< HEAD
=======
        

<!-- Formulário Receita -->
<form method="POST" action="{{ route('transactions.store') }} " >
    @csrf
    <input type="hidden" name="type" value="receita">
    <input type="hidden" name="month" value="{{ $month }}">
    <input type="hidden" name="year" value="{{ date('Y') }}">
</form>


<!-- Modal -->
<div id="receitaModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%;
     background-color: rgba(0, 0, 0, 0.5); z-index: 1000; align-items: center; justify-content: center;">
  
  <div style="background: white; padding: 20px; border-radius: 8px; width: 90%; max-width: 400px; position: relative;">
    
    <!-- Botão de fechar -->
    <button id="closeModalBtn" style="position: absolute; top: 10px; right: 10px;">&times;</button>
    
    <!-- Formulário -->
    <form method="POST" action="{{ route('transactions.store') }}">
      @csrf
      <input type="hidden" name="type" value="receita">
      <input type="hidden" name="month" value="{{ $month }}">
      <input type="hidden" name="year" value="{{ date('Y') }}">

      <div>
        <label>Valor da Receita</label>
        <input type="number" step="0.01" name="value" required placeholder="Valor da Receita">
      </div>

      <div style="margin-top: 10px;">
        <label>Descrição</label>
        <input type="text" name="description" required placeholder="Descrição da Receita">
      </div>

      <div style="margin-top: 20px;">
        <button type="submit">Salvar Receita</button>
      </div>
    </form>
  </div>
</div>

<script>
  const modal = document.getElementById('receitaModal');
  const openBtn = document.getElementById('openModalBtn');
  const closeBtn = document.getElementById('closeModalBtn');

  openBtn.addEventListener('click', () => {
    modal.style.display = 'flex';
  });

  closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
  });

  // Também fecha clicando fora da modal
  window.addEventListener('click', (e) => {
    if (e.target === modal) {
      modal.style.display = 'none';
    }
  });
</script>


>>>>>>> bc205fd0eca1e6c550476cc0e36bcb8dcd048751
    </div>

    <div class="visits" id="openDespesaCard">
        <div class="status">
            <div class="info">
                <h3>Saídas</h3>
                <h1>
                    <a href="{{ route('transaction.despesa') }}" style="color: inherit; text-decoration: none;">
                        <span id="saidaValor">{{ number_format($saidas, 2, ',', '.') }}</span><span> kz</span>
                    </a>
                </h1>
            </div>
            <div class="progresss">
                <img src="assets/img/expense.svg" alt="Imagem de saídas" />
            </div>
        </div>
<<<<<<< HEAD
=======

        <!-- Formulário Despesa -->
<!-- Formulário Despesa -->
<form method="POST" action="{{ route('transactions.store') }}">
    @csrf
    <input type="hidden" name="type" value="despesa">
    <input type="hidden" name="month" value="{{ $month }}">
    <input type="hidden" name="year" value="{{ date('Y') }}">
</form>



<!-- Modal de Despesa -->
<div id="despesaModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%;
     background-color: rgba(0, 0, 0, 0.5); z-index: 1000; align-items: center; justify-content: center;">
  
  <div style="background: white; padding: 20px; border-radius: 8px; width: 90%; max-width: 400px; position: relative;">
    
    <!-- Botão de fechar -->
    <button id="closeDespesaModalBtn" style="position: absolute; top: 10px; right: 10px;">&times;</button>
    
    <!-- Formulário -->
    <form method="POST" action="{{ route('transactions.store') }}">
      @csrf
      <input type="hidden" name="type" value="despesa">
      <input type="hidden" name="month" value="{{ $month }}">
      <input type="hidden" name="year" value="{{ date('Y') }}">

      <div>
        <label>Valor da Despesa</label>
        <input type="number" step="0.01" name="value" required placeholder="Valor da Despesa">
      </div>

      <div style="margin-top: 10px;">
        <label>Descrição</label>
        <input type="text" name="description" required placeholder="Descrição da Despesa">
      </div>

      <div style="margin-top: 20px;">
        <button type="submit">Salvar Despesa</button>
      </div>
    </form>
  </div>
</div>

<script>
  const despesaModal = document.getElementById('despesaModal');
  const openDespesa = document.getElementById('openDespesaCard');
  const closeDespesa = document.getElementById('closeDespesaModalBtn');

  openDespesa.addEventListener('click', () => {
    despesaModal.style.display = 'flex';
  });

  closeDespesa.addEventListener('click', () => {
    despesaModal.style.display = 'none';
  });

  // Fecha ao clicar fora da modal
  window.addEventListener('click', (e) => {
    if (e.target === despesaModal) {
      despesaModal.style.display = 'none';
    }
  });
</script>

<style>


form div {
  margin-bottom: 15px;
}

form label {
  display: block;
  font-weight: 600;
  margin-bottom: 6px;
  color: #333;
}

form input[type="number"],
form input[type="text"] {
  width: 100%;
  padding: 10px 12px;
  border: 1.8px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  transition: border-color 0.3s ease;
  box-sizing: border-box;
}

form input[type="number"]:focus,
form input[type="text"]:focus {
  border-color: #0f62e4;
  outline: none;
}

form button {
  width: 100%;
  padding: 12px 0;
  background-color: #0f62e4;
  border: none;
  border-radius: 6px;
  color: white;
  font-size: 17px;
  font-weight: 700;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

form button:hover {
  background-color: #084bb5;
}

</style>


>>>>>>> bc205fd0eca1e6c550476cc0e36bcb8dcd048751
    </div>

    <!-- Botões para abrir os modais -->
    <div class="buttons" style="display: flex; gap: 10px; justify-content: center; margin-top: 15px;">
        <button type="button" onclick="openModal('receitaModal')" 
                style="border: 2px solid green; color: green; padding: 10px 20px; border-radius: 20px; font-weight: bold; font-size: 16px; background: transparent;">
            + Receita
        </button>

        <button type="button" onclick="openModal('despesaModal')" 
                style="border: 2px solid red; color: red; padding: 10px 20px; border-radius: 20px; font-weight: bold; font-size: 16px; background: transparent;">
            – Despesa
        </button>
    </div>

</div>

<!-- Modais (no final do arquivo Blade) -->
<div id="receitaModal" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close" onclick="closeModal('receitaModal')">&times;</span>
        <h2>Nova Receita</h2>
        <form method="POST" action="{{ route('transactions.store') }}">
            @csrf
            <input type="hidden" name="type" value="receita">
            <input type="hidden" name="month" value="{{ $month }}">
            <input type="hidden" name="year" value="{{ date('Y') }}">

            <label>Valor (Kz)</label>
            <input type="number" step="0.01" name="value" required>

            <label>Descrição</label>
            <input type="text" name="description" required>

            <label>Data</label>
            <input type="date" name="date" required>

            <label>Categoria</label>
            <select name="category" required>
                <option value="Salário">Salário</option>
                <option value="Kixikila">Kixikila</option>
                <option value="Dividendos">Dividendos</option>
                <option value="Empréstimo">Empréstimo</option>
            </select>

            <button type="submit">Salvar Receita</button>
        </form>
    </div>
</div>

<div id="despesaModal" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close" onclick="closeModal('despesaModal')">&times;</span>
        <h2>Nova Despesa</h2>
        <form method="POST" action="{{ route('transactions.store') }}">
            @csrf
            <input type="hidden" name="type" value="despesa">
            <input type="hidden" name="month" value="{{ $month }}">
            <input type="hidden" name="year" value="{{ date('Y') }}">

            <label>Valor (Kz)</label>
            <input type="number" step="0.01" name="value" required>

            <label>Descrição</label>
            <input type="text" name="description" required>

            <label>Data</label>
            <input type="date" name="date" required>

            <label>Categoria</label>
            <select name="category" required>
                <option value="Casa">Casa</option>
                <option value="Escola">Escola</option>
                <option value="TV">TV</option>
                <option value="Alimentação">Alimentação</option>
                <option value="Lazer">Lazer</option>
                <option value="Investimentos">Investimentos</option>
                <option value="Educação">Educação</option>
            </select>

            <button type="submit">Salvar Despesa</button>
        </form>
    </div>
</div>

<!-- CSS para os modais -->
<style>
.modal {
    position: fixed;
    z-index: 9999;
    left: 0; top: 0;
    width: 100%; height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
    display: none;
}
.modal-content {
    background-color: #fff;
    margin: 10% auto;
    padding: 20px;
    border-radius: 10px;
    width: 90%;
    max-width: 500px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}
.close {
    float: right;
    font-size: 28px;
    cursor: pointer;
}
.modal-content label {
    font-weight: 600;
    margin-top: 10px;
    display: block;
}
.modal-content input, .modal-content select, .modal-content button {
    display: block;
    width: 100%;
    margin-top: 5px;
    padding: 8px;
    font-size: 16px;
}
.modal-content button {
    margin-top: 15px;
    background-color: #28a745;
    border: none;
    color: white;
    font-weight: bold;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}
.modal-content button:hover {
    background-color: #218838;
}
</style>

<!-- Script para modais -->
<script>
function openModal(id) {
    document.getElementById(id).style.display = 'block';
}
function closeModal(id) {
    document.getElementById(id).style.display = 'none';
}
window.onclick = function(event) {
    ['receitaModal', 'despesaModal'].forEach(function(id) {
        if(event.target == document.getElementById(id)) {
            closeModal(id);
        }
    });
}
</script>


    <style>
        .buttons {
            margin-top: 10px;
            display: flex;
            gap: 10px;
        }
        .buttons button {
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 10px 20px;
            border: 2px solid;
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
            background: white;
        }
        .entry {
            border-color: green;
            color: green;
        }
        .exit {
            border-color: red;
            color: red;
        }
        .icon {
            font-size: 20px;
            font-weight: bold;
        }
        .pizza {
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    padding: 15px;
    border-radius: 10px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 20px;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
}

.pizza canvas {
    width: 100%;
    max-width: 300px;
    aspect-ratio: 1 / 1; /* Mantém o formato quadrado */
    height: auto;
    display: block;
}

.legenda {
    display: flex;
    flex-direction: column;
    text-align: left;
    min-width: 180px;
}

.legenda div {
    display: flex;
    align-items: center;
    margin-bottom: 5px;
    font-size: 14px;
}

.cor {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    margin-right: 5px;
}

.grafico-container {
    width: 100%;
    max-width: 300px;
    height: 300px; /* altura fixa controlada */
    position: relative; /* necessário para Chart.js funcionar corretamente */
}

.grafico-container canvas {
    width: 100% !important;
    height: 100% !important;
    display: block;
}


    </style>
    <!-- End of Analyses -->

    <!-- New Users Section -->
    <div class="new-users">
        <h2>Despesas e Receitas</h2>
        <div class="user-list">
<div class="pizza">
    <div class="grafico-container">
        <canvas id="grafico"></canvas>
    </div>
    <div class="legenda">
        <div><span class="cor" style="background: #0a53d1;"></span> Receitas - {{ number_format($entradas, 2, ',', '.') }} Kz</div>
        <div><span class="cor" style="background: #fb573b;"></span> Despesas - {{ number_format($saidas, 2, ',', '.') }} Kz</div>
    </div>
</div>

        </div>
    </div>

    
    <!-- End of New Users Section -->

    <!-- Recent Orders Table -->
    <div class="recent-orders">
        <table>
            <thead>
{{--                 <tr>
                    <th style="color: rgb(255, 255, 255)">Descrição</th>
                    <th>Valor</th>
                    <th>Categoria</th>
                    <th>Data</th>
                    <th></th>
                </tr> --}}
            </thead>
            
        </table>
    </div>
    <!-- End of Recent Orders -->
    
    

</main>
<!-- End of Main Content -->
<script>
    const ctx = document.getElementById('grafico').getContext('2d');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Receitas', 'Despesas'], // Definindo os rótulos para receita e despesa
            datasets: [{
                data: [{{ $entradas }}, {{ $saidas }}], // Dados de receitas e despesas
                backgroundColor: ['#0a53d1', '#fb573b'] // Cores para cada categoria
            }]
        },
        options: {
            responsive: true, // Tornar o gráfico responsivo
            maintainAspectRatio: false
        }
    });
</script>

@endsection