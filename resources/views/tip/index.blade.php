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
      flex-wrap: wrap;
    }

    /* Responsividade */
    @media (max-width: 768px) {
      .tabela-container {
        padding: 15px;
        margin: 30px 10px;
      }

      .tabela-container h2 {
        font-size: 18px;
      }

      .periodo-info {
        font-size: 14px;
      }

      .tabela th, .tabela td {
        font-size: 12px;
        padding: 10px;
      }

      .paginacao {
        justify-content: center;
        font-size: 12px;
      }

      .tabela {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
      }
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
            $mesAtualTest = Carbon\Carbon::createFromFormat('Y-m', '2025-'.$numMes);
          @endphp

          @if($mesAtualTest->gte($mesAtual) || $numMes == $mesAtual->month)
            @php
              $receitaDoMes = $receitasPorMes->firstWhere('mes', $numMes);
              $totalReceita = $receitaDoMes ? $receitaDoMes->total : 0;

              $despesaDoMes = $despesasPorMes->firstWhere('mes', $numMes);
              $totalDespesa = $despesaDoMes ? $despesaDoMes->total : 0;
            @endphp
            <tr>
              <td>{{ $nomeMes }} 2025</td>
              <td>kz 0,00</td>
              <td>kz 0,00</td>
              <td>{{ number_format($totalReceita, 2, ',', '.') }} kz</td>
              <td>{{ number_format($totalDespesa, 2, ',', '.') }} kz</td>
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
