@extends('layouts.app3')
@section('title', 'Kivula')
@section('content')
<main>
    
    <div class="simulator">
        <h1>Simulador de Kixikila</h1>

      
        <div class="row">
          <div class="options">
            <label style="font-size: 15px">Qual é a finalidade da Kixikila?</label>
                <!-- Inclua os ícones do Lucide no seu HTML -->
                <script src="https://unpkg.com/lucide@latest"></script>

                <div class="purpose">
                <div class="selected"><i data-lucide="car" class="icon"></i> Automóvel</div>
                <div><i data-lucide="shield" class="icon"></i> Seguro</div>
                <div><i data-lucide="user" class="icon"></i> Pessoal</div>
                <div><i data-lucide="dollar-sign" class="icon"></i> Salário</div>
                <div><i data-lucide="home" class="icon"></i> Habitação</div>
                </div>

                <style>
                 /*  .purpose div {
                    display: inline-flex;
                    align-items: center;
                    gap: 0.5rem;
                    padding: 10px 16px;
                    border: 1px solid #ccc;
                    border-radius: 10px;
                    cursor: pointer;
                    transition: background 0.3s, border-color 0.3s;
                  } */

                  .purpose div:hover {
                    background-color: #f5f5f5;
                  }

                  .purpose .selected {
                    background-color: #007bff;
                    color: white;
                    border-color: #007bff;
                  }

                </style>

                  <script>
                    document.querySelectorAll('.purpose div').forEach(item => {
                      item.addEventListener('click', () => {
                        document.querySelectorAll('.purpose div').forEach(i => i.classList.remove('selected'));
                        item.classList.add('selected');
                      });
                    });
                  </script>


                <!-- Ative os ícones depois que o DOM carregar -->
                <script>
                lucide.createIcons();
                </script>

      
            <div class="slider-group">
              <label>Quanto precisa? <span class="value" id="amountValue">500 000,00 AKZ</span></label>
              <input type="range" min="100000" max="1000000" step="10000" value="500000" id="amount">
            </div>
      
            <div class="slider-group">
              <label>Com que prazo? <span class="value" id="termValue">48 meses</span></label>
              <input type="range" min="12" max="60" step="1" value="48" id="term">
            </div>
      
            <div class="slider-group">
              <label>Quanto deseja pagar por mês? <span class="value" id="monthlyValue">1 699 113,00 AKZ</span></label>
              <input type="range" min="50000" max="2000000" step="10000" value="1699113" id="monthly">
            </div>
          </div>

          <div class="slider-group">
            <label>Quantas pessoas vão participar? <span class="value" id="peopleValue">5 pessoas</span></label>
            <input type="range" min="2" max="50" step="1" value="5" id="people">
          </div>
          
      
          <div class="result">
           {{--  <p class="monthly-info">*Simulação de prestação com valores indicativos. Para uma simulação completa, deve imprimir o documento completo em faça download da sua simulação, para tomar conhecimento dos termos e condições integrais do financiamento.</p> --}}
            <div class="circle">
              <div class="amount" id="monthlyDisplay">1 699 113,00 AKZ*</div>
              <div class="label"></div>
              <div class="label2"></div>
              <div class="details">
                <div>TAN<br><strong>26,47%</strong></div>
                <div>TAEG<br><strong>38,02%</strong></div>
              </div>
            </div>
            <button>Pedir Contacto</button>
            <div class="links">
              <div> Faça já download da sua simulação</div>
            </div>
          </div>
        </div>
      </div>

      <style>
        .simulator {
            flex: 3;
            background: white;
            width: 110%;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
            margin-top: 50px;
            color: #003087;
        }
/* 
        .simulator {
          font-family: Arial, sans-serif;
          padding: 50px;
          max-width: 1100px;
          margin: auto;
          color: #003087;
        } */
    
        .simulator h1 {
          text-align: center;
          color: #003087;
          font-size: 36px;
          font-weight: 800;
        }
    
        .simulator p.subtext {
          text-align: center;
          color: #333;
          font-size: 18px;
          margin-top: 5px;
        }
    
        .simulator .row {
          display: flex;
          justify-content: space-between;
          align-items: flex-start;
          margin-top: 40px;
          gap: 40px;
        }
    
        .simulator .options {
          flex: 1;
        }
    
        .simulator .result {
          flex: 1;
          text-align: center;
          
          padding-left: 40px;
        }
    
        .simulator .purpose {
          display: flex;
          justify-content: space-between;
          margin: 20px 0;
        }
    
        .simulator .purpose div {
          border: 2px solid #00AEEF;
          border-radius: 6px;
          padding: 12px 6px;
          text-align: center;
          flex: 1;
          margin: 0 5px;
          cursor: pointer;
          font-size: 14px;
          color: #00AEEF;
          font-weight: bold;
        }
    
        .simulator .purpose div.selected {
          background-color: #e6f6fd;
        }
    
        .simulator .slider-group {
            padding: 20px;
          margin: 24px 0;
        }
    
        .simulator .slider-group label {
          display: block;
          margin-bottom: 5px;
          font-weight: bold;
          font-size: 15px;
        }
    
        .simulator input[type="range"] {
          width: 100%;
          appearance: none;
          height: 6px;
          background: #dff1ff;
          border-radius: 5px;
        }
        .simulator input[id="term"] {
          width: 100%;
          appearance: none;
          height: 6px;
          background: linear-gradient(135deg, #0400d3 0%, #04b8ff 100%);
          border-radius: 5px;
        }
    
        .simulator input[type="range"]::-webkit-slider-thumb {
          appearance: none;
          width: 14px;
          height: 14px;
          background: #003087;
          border-radius: 50%;
          cursor: pointer;
        }

    
        .simulator .value {
          color: #00AEEF;
          font-weight: bold;
        }
    
        .simulator .monthly-info {
          font-size: 12px;
          margin-bottom: 16px;
          color: #333;
        }
    
        .simulator .circle {
          position: relative;
          width: 300px;
          height: 300px;
          background: #dff1ff;
          border-radius: 50%;
          margin: 0 auto 20px auto;
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
          box-shadow: inset 0 0 0 4px #74a9ff;
        }
    
        .simulator .circle .amount {
          font-size: 26px;
          font-weight: bold;
          color: #003087;
        }
    
        .simulator .circle .label {
          width: 80%;
          height: 10px;
          background: #003087;
          margin: 10px 0;
          border-radius: 10px;
        }


    
        .simulator .circle .details {
          display: flex;
          justify-content: space-between;
          width: 80%;
          font-size: 14px;
        }
    
        .simulator .circle .details div {
          flex: 1;
        }
    
        .simulator button {
          background: #0049bf;
          border: none;
          color: white;
          padding: 12px 30px;
          font-size: 16px;
          border-radius: 30px;
          cursor: pointer;
          margin-top: 5px;
        }
    
        .simulator .links {
          margin-top: 20px;
          font-size: 14px;
          text-align: center;
        }
    
        .simulator .links div {
          margin: 5px 0;
          color: #003087;
        }

        @media (max-width: 768px) {
  .simulator .row {
    flex-direction: column;
    gap: 20px;
  }

  .simulator .purpose {
    flex-wrap: wrap;
  }

  .simulator .purpose div {
    flex: 1 1 45%;
    margin: 5px;
  }

  .simulator .circle {
    width: 200px;
    height: 200px;
  }

  .simulator .circle .amount {
    font-size: 20px;
  }

  .simulator button {
    width: 100%;
  }

  .simulator {
    width: 100%;
    padding: 20px;
  }
}

      </style>

<script>
  const amount = document.getElementById('amount');
  const term = document.getElementById('term');
  const monthly = document.getElementById('monthly');
  const people = document.getElementById('people');

  const amountValue = document.getElementById('amountValue');
  const termValue = document.getElementById('termValue');
  const monthlyValue = document.getElementById('monthlyValue');
  const monthlyDisplay = document.getElementById('monthlyDisplay');
  const peopleValue = document.getElementById('peopleValue');

  // Atualizar valor do input de "Quanto precisa?"
  amount.addEventListener('input', () => {
    amountValue.textContent = Number(amount.value).toLocaleString('pt-PT') + ' AKZ';
    updateMonthly(); // recalcular com base na quantidade de pessoas
  });

  // Atualizar valor do input de "Prazo"
  term.addEventListener('input', () => {
    termValue.textContent = term.value + ' meses';
  });

  // Atualizar valor do input de "Número de pessoas"
  people.addEventListener('input', () => {
    const qtd = Number(people.value);
    peopleValue.textContent = `${qtd} ${qtd === 1 ? 'pessoa' : 'pessoas'}`;
    updateMonthly();
  });

  // Atualizar valor do input de "Mensalidade"
  monthly.addEventListener('input', () => {
    const formatted = Number(monthly.value).toLocaleString('pt-PT') + ' AKZ';
    monthlyValue.textContent = formatted;
    monthlyDisplay.textContent = formatted + '*';
  });

  function updateMonthly() {
    const total = Number(amount.value);
    const numPeople = Number(people.value);
    const monthlyAmount = total / numPeople;
    const rounded = Math.round(monthlyAmount);

    monthly.value = rounded;
    const formatted = rounded.toLocaleString('pt-PT') + ' AKZ';
    monthlyValue.textContent = formatted;
    monthlyDisplay.textContent = formatted + '*';
  }

  // Rodar cálculo inicial
  updateMonthly();
</script>


</main>
@endsection