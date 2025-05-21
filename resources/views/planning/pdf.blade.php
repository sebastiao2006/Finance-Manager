<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Planejamento Mensal</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            padding: 40px;
            color: #000;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #0f62e4;
            padding-bottom: 10px;
        }

        .header h1 {
            font-size: 18px;
            color: #0f62e4;
            margin: 0;
        }

        .info {
            margin-bottom: 20px;
        }

        .info p {
            margin: 4px 0;
        }

        .section-title {
            background-color: #0f62e4;
            color: white;
            padding: 8px 12px;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }

        thead {
            background-color: #f2f2f2;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .status-pago {
            color: #2e7d32;
            font-weight: bold;
        }

        .status-pendente {
            color: #2e7d32;
            font-weight: bold;
        }

        .totals {
            margin-top: 30px;
            font-weight: bold;
        }

        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 11px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Planejamento Mensal</h1>
        <div style="text-align: right;">
            <p><strong>Data:</strong> {{ date('d/m/Y') }}</p>
            <h3>Planejamento - {{ ucfirst($monthName) }} de {{ $year }}</h3>

        </div>
    </div>

    <div class="info">
        <p><strong>Utilizador:</strong> {{ auth()->user()->name ?? 'Nome do Usuário' }}</p>
        <p><strong>Período:</strong> {{ $period ?? 'Mês Atual' }}</p>
    </div>

    <div class="section-title">Resumo</div>
    <table>
        <thead>
            <tr>
                <th>Categoria</th>
                <th>Valor (Kz)</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0; @endphp
            @foreach($plannings as $planning)
                <tr>
                    <td>{{ $planning->category }}</td>
                    <td>Kz {{ number_format($planning->amount, 2, ',', '.') }}</td>
                    <td class="{{ $planning->status === 'pago' ? 'status-pago' : 'status-pendente' }}">
                        {{ ucfirst($planning->status ?? 'pago') }}
                    </td>
                </tr>
                @php $total += $planning->amount; @endphp
            @endforeach
        </tbody>
    </table>

    <div class="totals">
        Total Planejado: Kz {{ number_format($total, 2, ',', '.') }}
    </div>

    <div class="footer">
        Gerado por Kumbu - Sistema de Gestão Financeira &copy; {{ date('Y') }}
    </div>
</body>
</html>
