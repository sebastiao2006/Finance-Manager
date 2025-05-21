<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Comprovativo Digital</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            margin: 40px;
            color: #000;
        }

        .header {
            text-align: center;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
            margin-bottom: 20px;
        }

        .header h2 {
            color: #0f62e4;
            margin: 0;
        }

        .sub-header {
            text-align: center;
            font-size: 12px;
            margin-bottom: 30px;
        }

        .details {
            width: 100%;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .details td {
            padding: 8px 4px;
        }

        .label {
            font-weight: bold;
            color: #333;
            width: 150px;
        }

        .support {
            font-size: 11px;
            text-align: center;
            margin-top: 40px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
            color: #555;
        }

        .iban-footer {
            font-size: 11px;
            text-align: center;
            color: #555;
        }

        .right {
            text-align: right;
        }

        /* .orange-logo {
            position: absolute;
            top: 40px;
            right: 40px;
            width: 80px;
            height: 80px;
            background-color: #f26800;
            border-radius: 10px;
            color: white;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
        } */
    </style>
</head>
<body>
{{-- 
    <div class="orange-logo">LOGO</div> --}}

    <div class="header">
        <h2>Comprovativo Digital</h2>
    </div>

    <div class="sub-header">
        Detalhe da operação realizada através do Meu Kumbu.
    </div>

    <table class="details">
        <tr>
            <td class="label">Data - Hora</td>
            <td>{{ $transaction->created_at->format('Y-m-d H:i:s') }}</td>
        </tr>
        <tr>
            <td class="label">Operação</td>
            <td>{{ $transaction->type ?? 'Transferência Bancária' }}</td>
        </tr>
        <tr>
            <td class="label">Emissor</td>
            <td>{{ auth()->user()->name ?? 'Nome do Usuário' }}</td>
        </tr>
        <tr>
            <td class="label">IBAN</td>
            <td>{{ $transaction->iban ?? 'AO06.0006.0000.7406.6383.3010.6' }}</td>
        </tr>
        <tr>
            <td class="label">Montante</td>
            <td>{{ number_format($transaction->value, 2, ',', '.') }} Kz</td>
        </tr>
        <tr>
            <td class="label">Transação</td>
            <td>{{ $transaction->reference ?? '02938290' }}</td>
        </tr>
    </table>

    <div class="support">
        Caso necessite de obter alguma informação, contacte por favor a nossa linha de apoio MULTICAIXA (24h):<br>
        (+244) 222 641 840 | 923 168 840
    </div>

    <div class="iban-footer">
        IBAN: 000600009556799130148 | 500295*****0434
    </div>

</body>
</html>
