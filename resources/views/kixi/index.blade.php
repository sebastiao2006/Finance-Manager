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
                    background-color: #0f62e4;
                    color: white;
                    border-color: #0f62e4;
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



<style>
  .iban-container {
  margin-top: 20px;
  font-family: sans-serif;
}

.iban-container label {
  font-size: 14px;
  font-weight: 600;
  color: #333;
}

.iban-container input[type="text"] {
  width: 100%;
  padding: 10px 12px;
  margin-top: 5px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 14px;
  transition: border-color 0.3s, box-shadow 0.3s;
}

.iban-container input[type="text"]:focus {
  border-color: #0f62e4;
  outline: none;
  box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
}

</style>
          
      
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

                     <div class="iban-container">
  <label for="ibanInput">Seu IBAN:</label><br>
  <input type="text" id="ibanInput" placeholder="Digite seu IBAN">
</div>
            <div style="margin-top: 20px;">
              <button id="saveSimulation"> Salvar Simulação</button>

            <button id="generateInvitePdf" style="margin-top: 10px;">Gerar PDF de Convite</button>


              {{-- <button id="generatePdf"> Gerar PDF da Simulação</button> --}}
            </div>



            <div class="links">
              <div > Faça já download da sua simulação</div>
            </div>
          </div>
        </div>
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>


 <script>
  function formatCurrency(value) {
    return new Intl.NumberFormat('pt-AO', {
      style: 'currency',
      currency: 'AOA'
    }).format(value);
  }

  document.getElementById('generatePdf').addEventListener('click', async () => {
    const data = JSON.parse(localStorage.getItem('kixikila_simulacao'));

    if (!data) {
      alert('Nenhuma simulação salva encontrada.');
      return;
    }

    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    const blue = [0, 102, 204];
    const gray = [90, 90, 90];

    // Cabeçalho azul
    doc.setFillColor(...blue);
    doc.rect(0, 0, 210, 20, 'F');
    doc.setTextColor(255, 255, 255);
    doc.setFontSize(14);
    doc.text('SIMULAÇÃO KIXIKILA', 105, 13, { align: 'center' });

    // Dados do cliente/simulação
    doc.setFontSize(11);
    doc.setTextColor(...gray);
    doc.text(`Data: ${new Date().toLocaleDateString()}`, 15, 30);
    doc.text(`Simulador: Sistema Kixikila`, 15, 36);
    doc.text(`Referência: #${Math.floor(Math.random() * 1000000)}`, 15, 42);

    // RESUMO
    doc.setFillColor(...blue);
    doc.setTextColor(255, 255, 255);
    doc.rect(0, 50, 210, 8, 'F');
    doc.text('RESUMO', 15, 56);

    doc.setFontSize(10);
    doc.setTextColor(0, 0, 0);
    doc.text(`Finalidade: ${data.finalidade}`, 15, 65);
    doc.text(`Valor Necessário: ${data.valor}`, 15, 72);
    doc.text(`Prazo: ${data.prazo}`, 15, 79);
    doc.text(`Mensalidade: ${data.mensalidade}`, 15, 86);
    doc.text(`Participantes: ${data.participantes}`, 15, 93);

    // DETALHE
    doc.setFillColor(...blue);
    doc.setTextColor(255, 255, 255);
    doc.rect(0, 105, 210, 8, 'F');
    doc.text('DETALHE', 15, 111);

    // Tabela simples com campos simulados
    const headers = ['Data', 'Descrição', 'Débito', 'Crédito', 'Saldo'];
    const rows = [
      ['2025-05-16', 'Valor Total', data.valor, '', data.valor],
      ['2025-05-16', 'Mensalidade', data.mensalidade, '', data.mensalidade],
      ['2025-05-16', 'Participantes', '', data.participantes, data.mensalidade],
    ];

    let startY = 120;
    doc.setTextColor(0, 0, 0);
    doc.setFontSize(9);

    // Cabeçalho da tabela
    headers.forEach((h, i) => {
      doc.text(h, 15 + i * 40, startY);
    });

    startY += 6;

    // Linhas
    rows.forEach((row) => {
      row.forEach((cell, i) => {
        doc.text(cell.toString(), 15 + i * 40, startY);
      });
      startY += 6;
    });

    // Rodapé
    doc.setFontSize(8);
    doc.setTextColor(100, 100, 100);
    doc.text("*Esta simulação é apenas ilustrativa. Consulte os termos reais com a cooperativa.", 15, 280);

    doc.save("simulacao_kixikila.pdf");
  });
</script>

<script>
  window.loggedUser = {
    name: "{{ Auth::user()->name }}"
  };
</script>

<script>
  document.getElementById('generateInvitePdf').addEventListener('click', async () => {
  const data = JSON.parse(localStorage.getItem('kixikila_simulacao'));
  const iban = document.getElementById('ibanInput').value.trim();
  const userName = window.loggedUser?.name ?? 'Usuário Desconhecido';

  if (!data) {
    alert('Nenhuma simulação salva encontrada.');
    return;
  }

  if (!iban) {
    alert('Por favor, insira seu IBAN.');
    return;
  }

  const { jsPDF } = window.jspdf;
  const doc = new jsPDF();

  const blue = [0, 102, 204];
  const gray = [90, 90, 90];

  doc.setFillColor(...blue);
  doc.rect(0, 0, 210, 20, 'F');
  doc.setTextColor(255, 255, 255);
  doc.setFontSize(14);
  doc.text('CONVITE PARA PARTICIPAR NA KIXIKILA', 105, 13, { align: 'center' });

  doc.setFontSize(11);
  doc.setTextColor(...gray);
  doc.text(`Data: ${new Date().toLocaleDateString()}`, 15, 30);
  doc.text(`Convite enviado por: ${userName}`, 15, 36);

  doc.setTextColor(0, 0, 0);
  doc.setFontSize(10);
  doc.text(`Finalidade: ${data.finalidade}`, 15, 50);
  doc.text(`Valor a contribuir: ${data.valor}`, 15, 57);
  doc.text(`Mensalidade: ${data.mensalidade}`, 15, 64);
  doc.text(`Prazo: ${data.prazo} meses`, 15, 71);
  doc.text(`Participantes esperados: ${data.participantes}`, 15, 78);

  doc.setFontSize(11);
  doc.setTextColor(...blue);
  doc.text('INFORMAÇÕES DO PARTICIPANTE', 15, 95);

  doc.setTextColor(0, 0, 0);
  doc.setFontSize(10);
  doc.text(`Nome: ${userName}`, 15, 105);
  doc.text(`IBAN informado: ${iban}`, 15, 112);

  doc.setFontSize(9);
  doc.setTextColor(100, 100, 100);
  doc.text("*Este é um convite para participar da Kixikila. Contate o organizador para mais detalhes.", 15, 280);

  doc.save("convite_kixikila.pdf");
});

</script>



      <script>
    function formatCurrency(value) {
      return new Intl.NumberFormat('pt-AO', { style: 'currency', currency: 'AOA' }).format(value);
    }

document.getElementById('saveSimulation').addEventListener('click', async () => {
  const selectedPurpose = document.querySelector('.purpose .selected')?.innerText || '';
  const amount = document.getElementById('amount').value;
  const term = document.getElementById('term').value;
  const monthly = document.getElementById('monthly').value;
  const people = document.getElementById('people').value;

  try {
    const response = await fetch('/kixi/store', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({
        finalidade: selectedPurpose,
        valor: amount,
        prazo: term,
        mensalidade: monthly,
        participantes: people
      })
    });

    const data = await response.json();
    if (data.success) {
      alert('Simulação salva com sucesso no servidor!');
    }
  } catch (error) {
    alert('Erro ao salvar simulação.');
    console.error(error);
  }
});
    </script>


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
            color: #0f62e4;
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
          color: #0f62e4;
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
          border: 2px solid #0f62e4;
          border-radius: 6px;
          padding: 12px 6px;
          text-align: center;
          flex: 1;
          margin: 0 5px;
          cursor: pointer;
          font-size: 14px;
          color: #0f62e4;
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
          background: linear-gradient(135deg, #0400d3 0%, #0f62e4 100%);
          border-radius: 5px;
        }
    
        .simulator input[type="range"]::-webkit-slider-thumb {
          appearance: none;
          width: 14px;
          height: 14px;
          background: #0f62e4;
          border-radius: 50%;
          cursor: pointer;
        }

    
        .simulator .value {
          color: #0f62e4;
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
          box-shadow: inset 0 0 0 4px #0f62e4;
        }
    
        .simulator .circle .amount {
          font-size: 26px;
          font-weight: bold;
          color: #0f62e4;
        }
    
        .simulator .circle .label {
          width: 80%;
          height: 10px;
          background: #0f62e4;
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
          background: #0f62e4;
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
          color: #0f62e4;
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