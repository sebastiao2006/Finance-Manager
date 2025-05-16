@extends('layouts.app2')

@section('title', 'Planejamento')

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

        #transacoes-btn:hover .dropdown-content {
            display: block;
        }

        .month-selector {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1px 0;
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
        .month-selector button:hover {
            color: #0049bf;
        }
        .month-selector span {
            padding: 5px 15px;
            color: #0f62e4;
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
            margin-top: -20px;
            margin-left: 300px;
            max-width: 100px;
            height: auto;
        }

        .no-results-button {
            margin-top: 20px;
            display: block;
            margin: 1px auto;
            padding: 12px 20px;
            background-color: #0f62e4;
            color: white;
            border-radius: 25px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            width: auto;
            max-width: 300px;
        }

        .no-results-button:hover {
            background-color: #0049bf;
        }
        .no-results p {
            color: #0049bf
        }

        /* NOVO: Estilo para status pago */
        .status-pago {
            background-color: #e6f4ea;
            color: #2e7d32;
            padding: 4px 10px;
            border-radius: 8px;
            font-weight: 500;
            display: inline-block;
        }

        /* NOVO: Estilo para botão Excluir */
        .btn-excluir {
            background-color: #fdecea;
            color: #c62828;
            border: none;
            padding: 8px 14px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s;
            font-weight: 500;
        }

        .btn-excluir:hover {
            background-color: #f8d7da;
        }
    </style>

    <div class="painel">
        <button id="transacoes-btn"><i class="fas fa-chevron-down"></i> Planejamento Mensal
            <div class="dropdown-content">
                <a href="#">Planejamento Personalizado</a>
            </div>
        </button>

        <a href="{{ route('planning.export.pdf') }}" class="no-results-button" style="margin: 20px 10px 10px auto; padding: 8px 16px; font-size: 14px; width: fit-content; display: block;">Exportar PDF</a>

        <div class="left-panel">
            <div class="month-selector">
                <button onclick="changeMonth(-1)"><i class="fas fa-chevron-left"></i></button>
                <span id="month"><b>Abril</b> 2025</span>
                <button onclick="changeMonth(1)"><i class="fas fa-chevron-right"></i></button>
            </div>

            @if($plannings->isEmpty())
                <table>
                    <tbody>
                        <tr>
                            <td colspan="7" class="no-results">
                                <div class="image-placeholder">
                                    <img src="assets/img/result.svg" alt="Imagem de placeholder" />
                                </div>
                                <a>Nenhum Planejamento</a>
                                <a href="{{ route('newplanning.index') }}" class="no-results-button" onclick="abrirModal()">Adicionar Novo Planejamento</a>
                                <a href=""><p style="margin-top: 10px">Copiar Planejamento do mês anterior</p></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>Categorias</th>
                            <th>Valor</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($plannings as $planning)
                            <tr>
                                <td>{{ $planning->category }}</td>
                                <td>kz{{ number_format($planning->amount, 2, ',', '.') }}</td>
                                <td>
                                    @php
                                        $status = $planning->status ?? 'pago';
                                    @endphp
                                    <span class="{{ $status === 'pago' ? 'status-pago' : '' }}">
                                        {{ ucfirst($status) }}
                                    </span>
                                </td>
                                <td>
                                    

                                    <form action="{{ route('planning.destroy', $planning->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este planejamento?')" class="btn-excluir">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

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
</main>
@endsection
