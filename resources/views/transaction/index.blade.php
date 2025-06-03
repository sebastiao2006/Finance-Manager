@extends('layouts.app6')
@section('title', 'Kivula')
@section('content')


{{-- <main>
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
            background-color: #0f62e4;
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
            color: #0f62e4; /* Cor da seta */
            font-size: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
        .month-selector button:hover {
            color: #0049bf; /* Tom mais claro no hover */
        }
        .month-selector span {
            padding: 5px 15px;
            color: #0f62e4; /* Mesma cor das setas */
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
                <a href="#"><span class="red"></span> Despesas</a>
                <a href="#"><span class="green"></span> Receitas</a>
                <a href="#"><span class="blue"></span> Transferências</a>
            </div>
        </button>
        <div class="left-panel">
            <div class="month-selector">
                <button onclick="changeMonth(-1)"><i class="fas fa-chevron-left"></i></button>
                <span id="month"><b>Abril</b> 2025</span> <!-- Apenas o mês em negrito -->
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

                    <tr>
                        
                        <td colspan="7" class="no-results">                                <!-- Imagem adicionada diretamente acima da palavra "Nenhum resultado" -->
                            <div class="image-placeholder">
                                <img src="assets/img/result.svg"  alt="Imagem de placeholder" />
                            </div>Nenhum resultado</td>
                    </tr>
                </tbody>
            </table>
            <!-- Barra de separação colocada ao final do painel -->
            <div class="horizontal-bar"></div>
        </div>
    </div>

    <script>
        const months = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
        let currentMonth = 3; 
        let currentYear = 2025;

        function changeMonth(direction) {
            currentMonth += direction;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            } else if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            document.getElementById("month").innerHTML = `<b>${months[currentMonth]}</b> ${currentYear}`;
        }
    </script>
</main> --}}

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
            background-color: #0f62e4;
            margin-top: 10px;
            color: white;
            padding: 15px 30px;
            border-radius: 25px;
            display: inline-block;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
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
        .dropdown-content a .red { background-color: red; }
        .dropdown-content a .green { background-color: green; }
        .dropdown-content a .blue { background-color: blue; }
        #transacoes-btn:hover .dropdown-content { display: block; }

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
            color: #0f62e4;
            font-size: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
        .month-selector button:hover { color: #0049bf; }
        .month-selector span {
            padding: 5px 15px;
            color: #0f62e4;
            border-radius: 10px;
        }
        .month-selector span b { font-weight: bold; }
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
        .action-links a {
            margin-right: 10px;
            color: gray;
            text-decoration: none;
            font-size: 14px;
        }
        .action-links a i { margin-right: 5px; }
    </style>

    <div class="painel">
        <!-- Botão suspenso -->
        <button id="transacoes-btn"><i class="fas fa-chevron-down"></i> Transações
            <div class="dropdown-content">
                <a href="{{ route('transaction.despesa') }}"><span class="red"></span> Despesas</a>
                <a href="{{ route('transaction.receita') }}"><span class="green"></span> Receitas</a>
                <a href="{{ route('transaction.index') }}"><span class="blue"></span> Transferências</a>
            </div>
        </button>

        <div style="text-align: right; margin-bottom: 20px;">
            <a href="{{ route('transaction.pdf') }}" target="_blank" class="btn-pdf" style="
                background-color: #e53935;
                color: white;
                padding: 10px 20px;
                border-radius: 20px;
                text-decoration: none;
                font-weight: bold;
            ">
                <i class="fas fa-file-pdf"></i> Baixar PDF
            </a>
        </div>
        

        <div class="left-panel">

            <!-- Filtro -->
     {{--        <form method="GET" action="{{ route('transaction.index') }}" style="text-align: center; margin-bottom: 20px;">
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

            <!-- Navegação por mês -->
            <div class="month-selector">
                <button onclick="changeMonth(-1)"><i class="fas fa-chevron-left"></i></button>
                <span id="month"><b>{{ $months[$month - 1] }}</b> {{ $year }}</span>
                <button onclick="changeMonth(1)"><i class="fas fa-chevron-right"></i></button>
            </div>

<!-- Tabela -->
<table>
    <thead>
        <tr>
            <th>Situação</th>
            <th>Data <i class="fas fa-sort-down"></i></th>
            <th>Descrição</th>
            <th>Conta</th>
            <th>Valor</th>
            <th>Transação</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse($transactions as $transaction)
            <tr>
                <td>{{ ucfirst($transaction->status ?? 'efectuada') }}</td>
                <td>{{ $transaction->created_at->format('d/m/Y') }}</td>
                <td>{{ $transaction->description ?? '-' }}</td>
                <td>{{ $transaction->account ?? 'Principal' }}</td>
                <td>{{ number_format($transaction->value, 2, ',', '.') }} kz</td>
                <td>
                    @if($transaction->type == 'receita')
                        <span style="background-color: #e0f7e9; color: green; padding: 5px 10px; border-radius: 20px;">Receita</span>
                    @elseif($transaction->type == 'despesa')
                        <span style="background-color: #fdecea; color: red; padding: 5px 10px; border-radius: 20px;">Despesa</span>
                    @elseif($transaction->type == 'transferencia')
                        <span style="background-color: #e3f2fd; color: blue; padding: 5px 10px; border-radius: 20px;">Transações</span>
                    @else
                        <span>{{ ucfirst($transaction->status ?? 'pendente') }}</span>
                    @endif
                </td>
                <td class="action-links">
                    <a href="{{ route('transaction.edit', $transaction->id) }}"><i class="fas fa-edit"></i> </a>
                    
                    <button 
                        class="delete-btn" 
                        data-id="{{ $transaction->id }}" 
                        style="background:none; border:none; color:rgb(88, 88, 88); cursor:pointer; padding:0; margin-left:10px;">
                        <i class="fas fa-trash-alt"></i> 
                    </button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" class="no-results">
                    <div class="image-placeholder">
                        <img src="{{ asset('assets/img/result.svg') }}" alt="Imagem de placeholder" />
                    </div>Nenhum resultado
                </td>
            </tr>
        @endforelse
    </tbody>
</table>


            <!-- Linha horizontal -->
            <div class="horizontal-bar"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.delete-btn').click(function(e) {
            e.preventDefault();

            if (!confirm('Tem certeza que deseja excluir?')) {
                return;
            }

            var button = $(this);
            var id = button.data('id');

            $.ajax({
                url: '/transaction/destroy/' + id,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    _method: 'DELETE'
                },
                success: function(response) {
                    // Remover a linha da tabela sem recarregar
                    button.closest('tr').fadeOut();

                    alert('Transação excluída com sucesso!');
                },
                error: function(xhr) {
                    alert('Erro ao excluir a transação.');
                }
            });
        });
    });
</script>


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