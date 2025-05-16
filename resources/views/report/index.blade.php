
   
@extends('layouts.app2')
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

        /* Estilo do botão abaixo de "Nenhum resultado" */
        .no-results-button {
            margin-top: 20px;
            display: block;
            margin: 1px auto;
            padding: 12px 20px; /* Diminuí o padding horizontal */
            background-color: #0f62e4;
            color: white;
            border-radius: 25px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            width: auto; /* Permite que o botão tenha o tamanho ideal para o texto */
            max-width: 300px; /* Define uma largura máxima */
        }

        .no-results-button:hover {
            background-color: #0049bf;
        }
        .no-results p{
            color: #0049bf
        }
        .toggle-container {
            margin-top: 130px;
            display: flex;
            align-items: center;
            background: white;
            border-radius: 50px;
            padding: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: width 0.3s ease-in-out;
            width: 160px;
        }

        .toggle-button {
            background: #0f62e4;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s;
        }

        .toggle-button i {
            color: white;
        }

        .toggle-icons {
            display: flex;
            gap: 20px;
            padding: 0 15px;
            color: gray;
            transition: transform 0.3s ease-in-out, opacity 0.3s;
        }

        .toggle-container.collapsed {
            width: 60px;
        }

        .toggle-container.collapsed .toggle-icons {
            transform: translateX(-100%);
            opacity: 0;
        }

    </style>

    <div class="painel">
        <div class="toggle-container" id="toggleContainer">
            <button class="toggle-button" onclick="toggleMenu()">
                <i class="fas fa-chart-pie"></i>
            </button>
            <div class="toggle-icons">
                <i class="fas fa-wave-square"></i>
                <i class="fas fa-chart-bar"></i>
            </div>
        </div>

        <div class="left-panel">
            <div class="month-selector">
                <button onclick="changeMonth(-1)"><i class="fas fa-chevron-left"></i></button>
                <span id="month"><b>{{ $months[$month] }}</b> {{ $year }}</span>
                <button onclick="changeMonth(1)"><i class="fas fa-chevron-right"></i></button>
            </div>

            @if($planning->isEmpty())
                <table>
                    <tbody>
                        <tr>
                            <td colspan="7" class="no-results">
                                <div class="image-placeholder">
                                    <img src="assets/img/result1.svg" alt="Imagem de placeholder" />
                                </div>
                                <a>Nenhum Relatório</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            @else
                <div style="max-width: 400px; margin: 40px auto;">
                    <canvas id="planningChart"></canvas>
                </div>

            @endif

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
            let selectedMonth = currentMonth + 1;
            window.location.href = `?month=${selectedMonth}&year=${currentYear}`;
        }
    </script>

    {{-- Inclui o Chart.js (essencial) --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>

    @if(!$planning->isEmpty())
<script>
    const planningData = {
        labels: {!! json_encode($planning->pluck('category')) !!},
        datasets: [{
            label: 'Planejamento por Categoria',
            data: {!! json_encode($planning->pluck('amount')) !!},
            backgroundColor: [
                '#4CAF50', '#FF9800', '#F44336', '#2196F3', '#9C27B0',
                '#3F51B5', '#009688', '#CDDC39', '#FFC107', '#795548'
            ],
            borderWidth: 1
        }]
    };

    const config = {
        type: 'pie',
        data: planningData,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'right',
                    labels: {
                        boxWidth: 20,
                        padding: 15
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const value = context.raw;
                            return `${context.label}: kz ${value.toLocaleString('pt-AO', { minimumFractionDigits: 2 })}`;
                        }
                    }
                },
                datalabels: {
                    formatter: function(value) {
                        return 'kz ' + value.toLocaleString('pt-AO', { minimumFractionDigits: 2 });
                    },
                    color: '#ffffff',
                    font: {
                        weight: 'bold',
                        size: 7,
                    }
                }
            }
        },
        plugins: [ChartDataLabels]
    };

    new Chart(document.getElementById('planningChart'), config);
</script>


    @endif
</main>
@endsection
