<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Extrato Integrado</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
            color: #000;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            width: 100px;
        }

        h2.title {
            text-align: center;
            margin-top: 10px;
            font-size: 18px;
        }

        .info-table {
            width: 100%;
            margin-top: 20px;
            font-size: 12px;
        }

        .info-table td {
            padding: 4px;
        }

        .section-title {
            background-color: #0f62e4;
            color: white;
            text-align: center;
            padding: 6px;
            font-weight: bold;
            margin-top: 20px;
        }

        table.transactions {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table.transactions th,
        table.transactions td {
            border: 1px solid #ccc;
            padding: 6px;
            font-size: 11px;
        }

        table.transactions th {
            background-color: #f2f2f2;
        }

        .right {
            text-align: right;
        }

        .bold {
            font-weight: bold;
        }

        .footer {
            margin-top: 30px;
            font-size: 11px;
            text-align: right;
        }
    </style>
</head>
<body>

    <div class="header">
@php
    $logoPath = public_path('img/logonovo.png');
@endphp

@if (file_exists($logoPath))
    <img src="data:image/png;base64,{{ base64_encode(file_get_contents($logoPath)) }}" class="logo" alt="Logotipo">
@else
    <p><strong>Logotipo não encontrado</strong></p>
@endif


    <div>
        <p><strong>EXTRACTO INTEGRADO</strong></p>
        <p><strong>Utilizador:</strong> {{ auth()->user()->name ?? 'Nome do Usuário' }}</p>
        <p>ANGOLA</p>
    </div>
</div>

    </div>

    <table class="info-table">
        <tr>
            <td><strong>Data:</strong> {{ date('Y-m-d') }}</td>
            <td><strong>Cliente:</strong> 141730031</td>
{{--             <td><strong>Local:</strong> AGENCIA DE VIANA (1801)</td>
            <td><strong>SWIFT:</strong> LUANDA</td> --}}
        </tr>
        <tr>
            <td colspan="4"><strong>Período:</strong> {{ $transactions->min('created_at')->format('Y-m-d') }} a {{ $transactions->max('created_at')->format('Y-m-d') }}</td>
        </tr>
    </table>

    <div class="section-title">RESUMO</div>
    <table class="info-table">
        <tr>
            <td><strong>Activo:</strong> D/O Conta Simplificada </td>
            <td><strong>Moeda:</strong> Kz</td>
            <td><strong>Saldo:</strong> {{ number_format($transactions->sum('value'), 2, ',', '.') }} Kz</td>
        </tr>
    </table>

    <div class="section-title">DETALHE</div>
    <table class="transactions">
        <thead>
            <tr>
                <th>Data do Movimento</th>
                <th>Descrição</th>
              {{--  <th>Categoria</th> --}}
                <th>Conta</th> 
                <th>Tipo de Movimento</th> {{-- Nova coluna --}}
                <th>Débito</th>
                <th>Crédito</th>
                <th>Saldo Após Movimento</th>
            </tr>
        </thead>
        <tbody>
            @php $saldo = 0; @endphp
            @foreach ($transactions as $transaction)
                @php
                    $debito = $transaction->type === 'despesa' ? $transaction->value : 0;
                    $credito = $transaction->type === 'receita' ? $transaction->value : 0;
                    $saldo += $credito - $debito;
                @endphp
                <tr>
                    <td>{{ $transaction->created_at->format('Y-m-d') }}</td>
                    <td>{{ $transaction->description ?? '-' }}</td>
 {{--                    <td>{{ $transaction->category ?? '-' }}</td> --}}
                    <td>{{ $transaction->account ?? 'Principal' }}</td>
                    <td>{{ ucfirst($transaction->type) }}</td> {{-- Aqui mostra Receita ou Despesa --}}
                    <td class="right">{{ $debito ? number_format($debito, 2, ',', '.') : '-' }}</td>
                    <td class="right">{{ $credito ? number_format($credito, 2, ',', '.') : '-' }}</td>
                    <td class="right">{{ number_format($saldo, 2, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        Página 1 de 1
    </div>

</body>
</html>
