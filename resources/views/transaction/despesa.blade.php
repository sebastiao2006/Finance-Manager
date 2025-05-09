@extends('layouts.app5')
@section('title', 'Kivula')
@section('content')


<main>
    <style>
        .left-panel {
            flex: 3;
            background: white;
            width: 110%;
            padding: 50px;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
           
        }
        .right-panel {
            margin-top: 20%;
            flex: 1;
            margin-left: 100px;
        }

        #transacoes-btn {
            background-color: red;
            margin-top: 10px; /* Reduzi a margem superior para aproximar o botão do painel */
            color: white;
            padding: 15px 30px; /* Aumentei o tamanho do botão */
            border-radius: 25px; /* Aumentei o arredondamento */
            display: inline-block;
            border: none;
            cursor: pointer;
            font-size: 16px; /* Aumentei o tamanho da fonte */
        }

        /* Menu suspenso */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 10px;
            margin-top: 10px;
        }

        .dropdown-content a {
            color: black; /* Texto preto */
            padding: 10px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            border-radius: 5px;
            font-size: 14px;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown-content a span {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .dropdown-content a .red {
            background-color: red;
        }

        .dropdown-content a .green {
            background-color: green;
        }

        .dropdown-content a .blue {
            background-color: blue;
        }

        /* Mostrar o menu suspenso quando o botão for clicado */
        #transacoes-btn:hover .dropdown-content {
            display: block;
        }

        .month-selector {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
            gap: 15px; /* Afastamento das setas */
        }
        .month-selector button {
            background: none;
            border: none;
            color: red; /* Cor da seta */
            font-size: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
        .month-selector button:hover {
            color: red; /* Tom mais claro no hover */
        }
        .month-selector span {
            padding: 5px 15px;
            color: red; /* Mesma cor das setas */
            border-radius: 10px; /* Arredondamento leve */
        }
        .month-selector span b {
            font-weight: bold; /* Apenas o mês fica negrito */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th {
            padding: 10px;
            background-color: #e0e0e0; /* Barra cinza que ocupa toda a largura */
            text-align: left;
            font-weight: normal; /* Remove negrito */
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .no-results {
            text-align: center;
            padding: 50px;
        }

        /* Barra horizontal no final do painel */
        .horizontal-bar {
            width: 100%;
            height: 2px;
            background-color: #ccc; /* Cor da barra */
            margin-top: 90px; /* Aumentei a distância da barra em relação ao conteúdo */
        }

        /* Estilo para a imagem acima do "Nenhum resultado" */
        .image-placeholder {
            text-align: center;
            margin-bottom: 20px; /* Distância entre a imagem e o texto */
        }

        .image-placeholder img {
            margin-left: 300px;
            max-width: 100px; /* Ajuste o tamanho da imagem conforme necessário */
            height: auto;
        }
    </style>

    <div class="painel">
        <button id="transacoes-btn"><i class="fas fa-chevron-down"></i> Transações
            <div class="dropdown-content">
                <a href="{{ route('transaction.despesa') }}"><span class="red"></span> Despesas</a>
                <a href="{{ route('transaction.receita') }}"><span class="green"></span> Receitas</a>
                <a href="{{ route('transaction.index') }}"><span class="blue"></span> Transferências</a>
            </div>
        </button>
        <div class="left-panel">
            <div class="month-selector">
                <button onclick="changeMonth(-1)"><i class="fas fa-chevron-left"></i></button>
                <span id="month"><b>Abril</b> 2025</span> <!-- Apenas o mês em negrito -->
                <button onclick="changeMonth(1)"><i class="fas fa-chevron-right"></i></button>
            </div>
            

            
            
<!-- Filtro -->
{{-- <form method="GET" action="{{ route('transaction.despesa') }}">
    <label>Mês:</label>
    <select name="month">
        @for ($m = 1; $m <= 12; $m++)
            <option value="{{ $m }}" {{ $m == $month ? 'selected' : '' }}>{{ $m }}</option>
        @endfor
    </select>

    <label>Ano:</label>
    <select name="year">
        @for ($y = date('Y'); $y >= 2020; $y--)
            <option value="{{ $y }}" {{ $y == $year ? 'selected' : '' }}>{{ $y }}</option>
        @endfor
    </select>

    <button type="submit">Filtrar</button>
</form>
 --}}
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Situação</th>
            <th>Data</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Conta</th>
            <th>Valor</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($transactions as $transaction)
            <tr>
                <td>{{ ucfirst($transaction->status ?? 'efectuada') }}</td>
                <td>{{ $transaction->created_at->format('d/m/Y') }}</td>
                <td>{{ $transaction->description ?? '-' }}</td>
                <td>{{ $transaction->category ?? '-' }}</td>
                <td>{{ $transaction->account ?? '-' }}</td>
                <td>{{ number_format($transaction->value, 2, ',', '.') }} kz</td>
                <td>
                      <!-- Botão de Editar -->
                      <a href="{{ route('transaction.edit', $transaction->id) }}"><i class="fas fa-edit"></i> </a>|
                        
                      <!-- Formulário de Exclusão -->
                      <form action="{{ route('transaction.destroy', $transaction->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" style="background:none; border:none; color:rgb(72, 72, 72); cursor:pointer;">
                              <i class="fas fa-trash-alt"></i>
                          </button>
                      </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
            <!-- Barra de separação colocada ao final do painel -->
            <div class="horizontal-bar"></div>
        </div>
    </div>

    <script>
        const months = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
        let currentMonth = {{ $month - 1 }};
        let currentYear = {{ $year }};

        function changeMonth(direction) {
            currentMonth += direction;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            } else if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }

            let selectedMonth = currentMonth + 1; // Laravel espera 1-12
            window.location.href = `?month=${selectedMonth}&year=${currentYear}`;
        }
    </script>
</main>









@endsection