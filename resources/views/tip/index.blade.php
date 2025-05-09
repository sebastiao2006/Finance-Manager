@extends('layouts.app3')

@section('title', 'Kivula')

@section('content')
<main>
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

    /* Cor para as entradas (Receitas) */
    .tabela td:nth-child(4) {
      color: green;
    }

    /* Cor para as saídas (Despesas) */
    .tabela td:nth-child(5) {
      color: red;
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

  {{-- Tabela com RECEITAS e DESPESAS dinâmicas na coluna "Entradas" e "Saídas" --}}
  <div class="tabela-container">
    <h2>Saldo por mês</h2>
    <div class="periodo-info">Janeiro 2025 - Dezembro 2025</div>

    <table class="tabela">
      <thead>
        <tr>
          <th>Mês</th>
          <th>Transferências de entrada</th>
          <th>Saldo previsto</th>
          <th>Entradas</th>
          <th>Saídas</th>
        </tr>
      </thead>
      <tbody>
        @php
          $mesAtual = Carbon\Carbon::now(); // Data atual
        @endphp

        @foreach($meses as $numMes => $nomeMes)
          @php
            // Comparar se o mês é maior ou igual ao mês atual
            $mesAtualTest = Carbon\Carbon::createFromFormat('Y-m', '2025-'.$numMes); // Cria o mês de 2025
          @endphp

          @if($mesAtualTest->gte($mesAtual) || $numMes == $mesAtual->month) {{-- Verifica se o mês é o atual ou futuro --}}
            @php
              // Procurar receita do mês corrente
              $receitaDoMes = $receitasPorMes->firstWhere('mes', $numMes);
              $totalReceita = $receitaDoMes ? $receitaDoMes->total : 0;

              // Procurar despesa do mês corrente
              $despesaDoMes = $despesasPorMes->firstWhere('mes', $numMes);
              $totalDespesa = $despesaDoMes ? $despesaDoMes->total : 0;
            @endphp
            <tr>
              <td>{{ $nomeMes }} 2025</td>
              <td>kz 0,00</td> {{-- Transferências de entrada, caso queira adicionar esse dado --}}
              <td>kz 0,00</td> {{-- Transferências de saída, caso queira adicionar esse dado --}}
              <td>{{ number_format($totalReceita, 2, ',', '.') }} kz</td> {{-- RECEITA DINÂMICA AQUI --}}
              <td>{{ number_format($totalDespesa, 2, ',', '.') }} kz</td> {{-- DESPESA DINÂMICA AQUI --}}
            </tr>
          @endif
        @endforeach
      </tbody>
    </table>

    <div class="paginacao">
      Linhas por página: 50
      <span>1-12 de 12</span>
      <button>❮</button>
      <button>❯</button>
    </div>
  </div>

</main>
@endsection
