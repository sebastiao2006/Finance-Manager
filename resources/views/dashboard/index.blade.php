@extends('layouts.app')
@section('title', 'Kivula')
@section('content')

<!-- Main Content -->
<main>
    <h1>Dashboard</h1>

<div class="analyse">
    <div class="sales" id="openModalBtn" type="button">
        <div class="status">
            <div class="info">
                <h3>Entradas</h3>
                <h1>
                    <span id="entradaValor">{{ number_format($entradas, 2, ',', '.') }}</span><span> kz</span>
                </h1>
            </div>
            <div class="enter">
                <img src="assets/img/income.svg" alt="Imagem de entradas" />
            </div>
        </div>
        

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


    </div>

    <div class="visits" id="openDespesaCard">
        <div class="status">
            <div class="info">
                <h3>Saídas</h3>
                <h1>
                    <span id="saidaValor">{{ number_format($saidas, 2, ',', '.') }}</span><span> kz</span>
                </h1>
            </div>
            <div class="progresss">
                <img src="assets/img/expense.svg" alt="Imagem de saídas">
            </div>
        </div>

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


    </div>
    <div class="searches"> 
        <div class="buttons" style="display: flex; gap: 10px; justify-content: center;">
    
            <!-- Botão Receita -->
            <a href="{{ route('transaction.receita') }}" 
               style="
                    border: 2px solid green; 
                    color: green; 
                    padding: 10px 20px; 
                    border-radius: 20px; 
                    text-decoration: none; 
                    font-weight: bold;
                    font-size: 16px;
                    display: flex;
                    align-items: center;
                    gap: 5px;
                    transition: background 0.3s;
               "
               onmouseover="this.style.background='rgba(0,128,0,0.1)'" 
               onmouseout="this.style.background='transparent'">
                <span class="icon">+</span> Receita
            </a>
    
            <!-- Botão Despesa -->
            <a href="{{ route('transaction.despesa') }}" 
               style="
                    border: 2px solid red; 
                    color: red; 
                    padding: 10px 20px; 
                    border-radius: 20px; 
                    text-decoration: none; 
                    font-weight: bold;
                    font-size: 16px;
                    display: flex;
                    align-items: center;
                    gap: 5px;
                    transition: background 0.3s;
               "
               onmouseover="this.style.background='rgba(255,0,0,0.1)'" 
               onmouseout="this.style.background='transparent'">
                <span class="icon">−</span> Despesa
            </a>
    
        </div>
    </div>
    
    
</div>


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
    background-color: white; /* se quiser manter o fundo branco */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
}

.pizza canvas {
    width: 100%;
    max-width: 300px;
    aspect-ratio: 1 / 1;
    height: auto;
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


    </style>
    <!-- End of Analyses -->

    <!-- New Users Section -->
    <div class="new-users">
        <h2>Despesas e Receitas</h2>
        <div class="user-list">
            <div class="pizza">
                <canvas id="grafico"></canvas>
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