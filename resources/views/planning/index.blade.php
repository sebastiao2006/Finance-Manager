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
    </style>

    <div class="painel">
        <button id="transacoes-btn"><i class="fas fa-chevron-down"></i> Planejamento Mensal
            <div class="dropdown-content">
                <a href="#">Planejamento Personalizado</a>
            </div>
        </button>
        <div class="left-panel">
            <div class="month-selector">
                <button onclick="changeMonth(-1)"><i class="fas fa-chevron-left"></i></button>
                <span id="month"><b>Abril</b> 2025</span>
                <button onclick="changeMonth(1)"><i class="fas fa-chevron-right"></i></button>
            </div>

            <table>
                <tbody>
                    <tr>
                        <td colspan="7" class="no-results">
                            <div class="image-placeholder">
                                <img src="assets/img/result.svg" alt="Imagem de placeholder" />
                            </div>
                            <a>Nenhum Planejamento</a>
                            <!-- Apenas o botão abaixo -->
                            <a href="#" class="no-results-button" class="btn-open" onclick="abrirModal()">Adicionar Novo Planejamento</a>
                            <a href=""><p style="margin-top: 10px">Copiar Planejamento do mês anterior</p></a>
                        </td>
                    </tr>
                </tbody>
            </table>

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

<style>


    .btn-open {
      padding: 0.75rem 1.5rem;
      background-color: #0f62e4;
      color: white;
      font-size: 1rem;
      border: none;
      border-radius: 0.5rem;
      cursor: pointer;
    }

    /* Modal Overlay */
    .modal-overlay {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 100vw;
      background-color: rgba(0, 0, 0, 0.4);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    .modal {
      background-color: white;
      width: 90%;
      max-width: 600px;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      position: relative;
    }

    .close-btn {
      position: absolute;
      top: 1rem;
      right: 1rem;
      background: transparent;
      border: none;
      font-size: 1.25rem;
      cursor: pointer;
    }

    h2 {
      font-size: 1.25rem;
      margin-bottom: 1.5rem;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 0.5rem;
    }

    input[type="number"] {
      font-size: 1.5rem;
      border: none;
      border-bottom: 2px solid #0f62e4;
      outline: none;
      width: 100%;
      background: transparent;
      color: #0f62e4;
    }

    .input-group {
      margin-bottom: 2rem;
    }

    .input-prefix {
      display: flex;
      align-items: baseline;
      gap: 0.5rem;
      font-weight: bold;
      font-size: 1.5rem;
      color: #0f62e4;
    }

    .info-box {
      background-color: #ebe6fe;
      padding: 1.5rem;
      border-radius: 1rem;
      margin-top: 1rem;
    }

    .info-box p {
      margin: 0.5rem 0;
    }

    .orcamento {
      font-size: 1.5rem;
      font-weight: bold;
      color: #0f62e4;
    }

    .economia {
      font-size: 1.5rem;
      font-weight: bold;
      color: #16a34a;
    }

    .btn-next {
      margin-top: 2rem;
      float: right;
      background: #ccc;
      border: none;
      padding: 0.5rem 1rem;
      border-radius: 999px;
      opacity: 0.5;
      cursor: not-allowed;
    }

    .small {
      font-size: 0.875rem;
      color: #555;
    }
  </style>
</head>
<body>

  <!-- Modal -->
  <div class="modal-overlay" id="modalOverlay">
    <div class="modal">
      <button class="close-btn" onclick="fecharModal()">✖</button>
      <h2>Renda mensal</h2>

      <div class="input-group">
        <label>Quanto você ganha por mês?</label>
        <div class="input-prefix">
          <span>€</span>
          <input type="number" id="renda" value="0">
        </div>
      </div>

      <div class="input-group">
        <label>E quanto você quer economizar por mês?</label>
        <p class="small">Essa porcentagem será utilizada para calcular seu orçamento mensal de gastos.</p>
        <div class="input-prefix">
          <input type="number" id="percentual" value="20">
          <span>%</span>
        </div>
      </div>

      <div class="info-box">
        <p><strong>💲 Seu orçamento mensal de gastos será:</strong></p>
        <p class="orcamento" id="orcamento">€ 0,00</p>
        <p class="small">E você economizará mensalmente:</p>
        <p class="economia" id="economia">€ 0,00</p>
      </div>

      <button class="btn-next" disabled>➝</button>
    </div>
  </div>

  <script>
    const rendaInput = document.getElementById('renda');
    const percentualInput = document.getElementById('percentual');
    const orcamentoText = document.getElementById('orcamento');
    const economiaText = document.getElementById('economia');
    const modalOverlay = document.getElementById('modalOverlay');

    function abrirModal() {
      modalOverlay.style.display = 'flex';
      calcular();
    }

    function fecharModal() {
      modalOverlay.style.display = 'none';
    }

    function calcular() {
      const renda = parseFloat(rendaInput.value) || 0;
      const percentual = parseFloat(percentualInput.value) || 0;

      const economia = renda * (percentual / 100);
      const orcamento = renda - economia;

      economiaText.textContent = `€ ${economia.toFixed(2)}`;
      orcamentoText.textContent = `€ ${orcamento.toFixed(2)}`;
    }

    rendaInput.addEventListener('input', calcular);
    percentualInput.addEventListener('input', calcular);
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const saldoAtual = document.querySelector('.info-box strong');
      const mesSelecionado = localStorage.getItem('mesSelecionado') || 'janeiro';
      const valorSalvo = localStorage.getItem(mesSelecionado) || '0,00';

      if (saldoAtual) {
        saldoAtual.textContent = `€ ${valorSalvo}`;
      }
    });
  </script>

  

</main>


@endsection