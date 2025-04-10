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
</main>









@endsection