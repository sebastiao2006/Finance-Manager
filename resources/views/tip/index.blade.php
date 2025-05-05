@extends('layouts.app3')

@section('title', 'Kivula')

@section('content')
<main>
  <style>
   .desempenho {
  max-width: 1500px;
  margin: 75px auto; /* Abaixei mais */
  padding: 30px;
  background: white;
  border-radius: 20px;
  box-shadow: 0 0 10px rgba(0,0,0,0.05);
}

    .periodo {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 30px;
      gap: 30px;
      font-size: 14px;
      color: #666;
    }

    .dropdown {
      padding: 8px 24px;
      border: 2px solid #6a0dad;
      border-radius: 20px;
      color: #6a0dad;
      background: white;
      cursor: pointer;
      font-size: 14px;
      position: relative;
    }

    .dropdown::after {
      content: '▼';
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 12px;
      pointer-events: none;
    }

    .grafico-container {
      position: relative;
      width: 100%;
      height: 300px;
      background: linear-gradient(to top, rgba(140,198,63,0.1) 0%, rgba(140,198,63,0.1) 100%);
      border-radius: 10px;
      padding: 40px 60px 60px 100px;
      margin-bottom: 40px;
      border: 1px solid #eee;
    }

    .escala {
      position: absolute;
      left: 20px;
      top: 40px;
      bottom: 60px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      font-size: 14px;
      color: #555;
    }

    .linhas-horizontal {
      position: absolute;
      left: 100px;
      right: 60px;
      top: 40px;
      bottom: 60px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .linha {
      width: 100%;
      height: 1px;
      background: #ccc;
    }

    .linha-verde {
      position: absolute;
      left: 100px;
      right: 60px;
      top: 58px;
      height: 2px;
      background: green;
    }

    .pontos {
      position: absolute;
      left: 100px;
      right: 60px;
      top: 50px;
      height: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .ponto {
      width: 10px;
      height: 10px;
      background: green;
      border-radius: 50%;
    }

        .meses {
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
    font-size: 14px;
    color: #333;
    padding: 0 80px;
    }


    .legenda {
      margin-top: 30px;
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 14px;
      color: #333;
      padding: 0 60px;
    }

    .dot {
      width: 10px;
      height: 10px;
      background: purple;
      border-radius: 50%;
    }
  </style>

  
<div class="tabela-container">
    <h2>Saldo por mês</h2>
    <div class="periodo-info">janeiro 2025 - dezembro 2025</div>
  
    <table class="tabela">
      <thead>
        <tr>
          <th>Mês</th>
          <th>Transferências de entrada</th>
          <th>Transferências de saída</th>
          <th>Entradas</th>
          <th>Saídas</th>
          <th>Saldo previsto</th>
        </tr>
      </thead>
      <tbody>
       {{--  <tr>
          <td>janeiro 2025</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td><button class="botao-premium">PREMIUM</button></td>
        </tr>
        <tr>
          <td>fevereiro 2025</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td><button class="botao-premium">PREMIUM</button></td>
        </tr>
        <tr>
          <td>março 2025</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td><button class="botao-premium">PREMIUM</button></td>
        </tr>
        <tr>
          <td>abril 2025</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td><button class="botao-premium">PREMIUM</button></td>
        </tr>
        <tr> --}}
          <td>maio 2025</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td><button class="botao-premium">PREMIUM</button></td>
        </tr>
        <tr>
          <td>junho 2025</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td><button class="botao-premium">PREMIUM</button></td>
        </tr>
        <tr>
          <td>julho 2025</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td><button class="botao-premium">PREMIUM</button></td>
        </tr>
        <tr>
          <td>agosto 2025</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td><button class="botao-premium">PREMIUM</button></td>
        </tr>
        <tr>
          <td>setembro 2025</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td><button class="botao-premium">PREMIUM</button></td>
        </tr>
        <tr>
          <td>outubro 2025</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td><button class="botao-premium">PREMIUM</button></td>
        </tr>
        <tr>
          <td>novembro 2025</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td><button class="botao-premium">PREMIUM</button></td>
        </tr>
        <tr>
          <td>dezembro 2025</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td>€ 0,00</td>
          <td><button class="botao-premium">PREMIUM</button></td>
        </tr>
      </tbody>
      
    </table>
  
    <div class="paginacao">
      Linhas por página: 50
      <span>1-12 de 12</span>
      <button>❮</button>
      <button>❯</button>
    </div>
  </div>

  {{-- <div class="desempenho">
    <h2 style="text-align: center; color: #666; font-size: 16px; margin-bottom: 10px;">Período</h2>

    <div class="periodo">
      <div class="dropdown">janeiro 2025</div>
      <span>—</span>
      <div class="dropdown">dezembro 2025</div>
    </div>

    <div class="grafico-container">
      <div class="escala">
        <span>€ 1.000,00</span>
        <span>€ 800,00</span>
        <span>€ 600,00</span>
        <span>€ 400,00</span>
        <span>€ 200,00</span>
        <span>€ 0,00</span>
      </div>

      <div class="linhas-horizontal">
        <div class="linha"></div>
        <div class="linha"></div>
        <div class="linha"></div>
        <div class="linha"></div>
        <div class="linha"></div>
        <div class="linha"></div>
      </div>

      <div class="linha-verde"></div>

      <div class="pontos">
        @for ($i = 0; $i < 12; $i++)
          <div class="ponto"></div>
        @endfor
      </div>
    </div>

    <div class="meses">
      <span>jan 2025</span>
      <span>fev 2025</span>
      <span>mar 2025</span>
      <span>abr 2025</span>
      <span>mai 2025</span>
      <span>jun 2025</span>
      <span>jul 2025</span>
      <span>ago 2025</span>
      <span>set 2025</span>
      <span>out 2025</span>
      <span>nov 2025</span>
      <span>dez 2025</span>
    </div>

    <div class="legenda">
      <div class="dot"></div>
      <span>Todas as contas</span>
    </div>

  </div>
 --}}

  <style>
    .tabela-container {

  background: #f7faff;
  padding: 20px;
  border-radius: 20px;
  max-width: 1200px;
  margin: 70px auto;
  box-shadow: 0 0 10px rgba(0,0,0,0.03);
}

.tabela-container h2 {
  font-size: 20px;
  color: #222;
  margin-bottom: 20px;
}

.periodo-info {
  font-size: 16px;
  color: #444;
  margin-bottom: 20px;
}

.tabela {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0 10px;
}

.tabela th {
  text-align: left;
  font-size: 14px;
  color: #555;
  padding: 10px 15px;
}

.tabela td {
  background: white;
  padding: 12px 15px;
  font-size: 14px;
  color: #333;
  border-radius: 10px;
}

.tabela td:nth-child(5) {
  color: green;
}

.tabela td:nth-child(6) {
  color: red;
}

.botao-premium {
  background: linear-gradient(90deg, #6a0dad, #8e2de2);
  color: white;
  border: none;
  padding: 6px 16px;
  border-radius: 20px;
  font-size: 12px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
  cursor: pointer;
}

.paginacao {
  margin-top: 20px;
  font-size: 14px;
  color: #555;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  gap: 10px;
}

  </style>



</main>
@endsection
