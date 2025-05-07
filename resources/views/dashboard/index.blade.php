@extends('layouts.app')
@section('title', 'Kivula')
@section('content')

<!-- Main Content -->
<main>
    <h1>Analytics</h1>
    <!-- Analyses -->

{{--     <video autoplay loop muted playsinline id="background-video">
        <source src="/assets/img/video1.mp4" type="video/mp4">
        Seu navegador não suporta vídeos.
    </video>
    <style>
        #background-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            z-index: -1;
        }
    </style> --}}
  {{--   <div class="card entradas">
        <p>Entradas</p>
        <h3>{{ number_format($entradas, 2, ',', '.') }} Kz</h3>
    </div>
    
    <div class="card saidas">
        <p>Saídas</p>
        <h3>{{ number_format($saidas, 2, ',', '.') }} Kz</h3>
    </div>
    
    <div class="card saldo">
        <p>Saldo até o fim de {{ ucfirst($month) }}</p>
        <h3>{{ number_format($saldo, 2, ',', '.') }} Kz</h3>
    </div> --}}
<!-- Receita -->
{{-- <form method="POST" action="{{ route('transactions.store') }}">
    @csrf
    <input type="hidden" name="type" value="receita">
    <input type="hidden" name="month" value="{{ $month }}">
    <input type="hidden" name="year" value="{{ date('Y') }}">
    <input type="number" step="0.01" name="value" required placeholder="Valor da Receita">
    <button type="submit">+ Receita</button>
</form>

<!-- Despesa -->
<form method="POST" action="{{ route('transactions.store') }}">
    @csrf
    <input type="hidden" name="type" value="despesa">
    <input type="hidden" name="month" value="{{ $month }}">
    <input type="hidden" name="year" value="{{ date('Y') }}">
    <input type="number" step="0.01" name="value" required placeholder="Valor da Despesa">
    <button type="submit">– Despesa</button>
</form> --}}
    


<div class="analyse">
    <div class="sales">
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
        <form method="POST" action="{{ route('transactions.store') }}">
            @csrf
            <input type="hidden" name="type" value="receita">
            <input type="hidden" name="month" value="{{ $month }}">
            <input type="hidden" name="year" value="{{ date('Y') }}">
            <input type="number" step="0.01" name="value" required placeholder="Valor da Receita">
            <button type="submit">+ Receita</button>
        </form>
    </div>

    <div class="visits">
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
        <form method="POST" action="{{ route('transactions.store') }}">
            @csrf
            <input type="hidden" name="type" value="despesa">
            <input type="hidden" name="month" value="{{ $month }}">
            <input type="hidden" name="year" value="{{ date('Y') }}">
            <input type="number" step="0.01" name="value" required placeholder="Valor da Despesa">
            <button type="submit">– Despesa</button>
        </form>
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
            width: 400px;
            height: 300px;
            padding: 15px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        canvas {
            width: 200px !important;
            height: 200px !important;
        }
        .legenda {
            display: flex;
            flex-direction: column;
            text-align: left;
        }
        .legenda div {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }
        .cor {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 5px;
        }

    </style>
    <!-- End of Analyses -->

    <!-- New Users Section -->
    <div class="new-users">
        <h2>Despesas por Categoria</h2>
        <div class="user-list">
            <div class="pizza">
                <canvas id="grafico"></canvas>
                <div class="legenda">
                    <div><span class="cor" style="background: rgb(0, 128, 32);"></span> Educação - 650,00 kz</div>
                    <div><span class="cor" style="background: blue;"></span> Casa - 276,00 kz</div>
                    <div><span class="cor" style="background: red;"></span> Alimentação - 220,00 kz</div>
                    <div><span class="cor" style="background: gray;"></span> Outros - 290,00 kz</div>
                </div>
            </div>
            <div class="user">
                <img src="{{ asset('assets/img/bic.png') }}" alt="Profile Image">
                <h2>BIC</h2>
                <p>54 Min Ago</p>
            </div>
            <div class="user">
                <img src="{{ asset('assets/img/bfa.png') }}" alt="Profile Image">
                <h2>BAI</h2>
                <p>3 Hours Ago</p>
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
            /* labels: ['Educação', 'Casa', 'Alimentação', 'Outros'], */
            datasets: [{
                data: [650, 276, 220, 290],
                backgroundColor: ['#0a53d1', '#00745c', '#c59e07', '#fb573b']

            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: true
        }
    });
</script>

@endsection