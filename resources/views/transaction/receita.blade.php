@extends('layouts.app4')
@section('title', 'Kivula')
@section('content')

<main><style>
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
        background-color: green;
        margin-top: 10px;
        color: white;
        padding: 15px 30px;
        border-radius: 25px;
        display: inline-block;
        border: none;
        cursor: pointer;
        font-size: 16px;
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
        color: black;
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

    #transacoes-btn:hover .dropdown-content {
        display: block;
    }

    .month-selector {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px 0;
        gap: 15px;
    }

    .month-selector button {
        background: none;
        border: none;
        color: green;
        font-size: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .month-selector button:hover {
        color: green;
    }

    .month-selector span {
        padding: 5px 15px;
        color: green;
        border-radius: 10px;
    }

    .month-selector span b {
        font-weight: bold;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th {
        padding: 10px;
        background-color: #e0e0e0;
        text-align: left;
        font-weight: normal;
    }

    td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .no-results {
        text-align: center;
        padding: 50px;
    }

    .horizontal-bar {
        width: 100%;
        height: 2px;
        background-color: #ccc;
        margin-top: 90px;
    }

    .image-placeholder {
        text-align: center;
        margin-bottom: 20px;
    }

    .image-placeholder img {
        margin-left: 300px;
        max-width: 100px;
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
        <!-- Filtro -->
  {{--       <form method="GET" action="{{ route('transaction.receita') }}">
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
        </form> --}}

        <div class="month-selector">
            <button onclick="changeMonth(-1)"><i class="fas fa-chevron-left"></i></button>
            <span id="month"><b>Abril</b> 2025</span>
            <button onclick="changeMonth(1)"><i class="fas fa-chevron-right"></i></button>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Situação</th>
                    <th>Data <i class="fas fa-sort-down"></i></th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Conta</th>
                    <th>Valor</th>
                    <th>Ações</th>
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
                
            
                @if(count($transactions) == 0)
                    <tr>
                        <td colspan="7" class="no-results">
                            <div class="image-placeholder">
                                {{-- <img src="/assets/img/result.svg" alt="Imagem de placeholder" /> --}}
                            </div>
                            Nenhum resultado
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>

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