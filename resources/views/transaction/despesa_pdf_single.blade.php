<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Despesa #{{ $transaction->id }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 14px;
            padding: 40px;
            color: #000;
        }

        .header {
            text-align: center;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
            margin-bottom: 20px;
        }

        .header h2 {
            color: #d10000;
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

   /*      .orange-logo {
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

   {{--  <div class="orange-logo">LOGO</div> --}}

    <div class="header">
        <h2>Comprovativo Digital</h2>
    </div>

    <div class="sub-header">
        Detalhe da operação realizada no sistema Kumbu.
    </div>

    <table class="details">
        <tr>
            <td class="label">Despesa Nº</td>
            <td>#{{ $transaction->id }}</td>
        </tr>
        <tr>
            <td class="label">Situação</td>
            <td>{{ ucfirst($transaction->status ?? 'efectuada') }}</td>
        </tr>
        <tr>
            <td class="label">Data</td>
            <td>{{ $transaction->created_at->format('d/m/Y H:i:s') }}</td>
        </tr>
        <tr>
            <td class="label">Descrição</td>
            <td>{{ $transaction->description ?? '-' }}</td>
        </tr>
        <tr>
            <td class="label">Categoria</td>
            <td>{{ $transaction->category ?? '-' }}</td>
        </tr>
        <tr>
            <td class="label">Conta</td>
            <td>{{ $transaction->account ?? '-' }}</td>
        </tr>
        <tr>
            <td class="label">Valor</td>
            <td>{{ number_format($transaction->value, 2, ',', '.') }} kz</td>
        </tr>
    </table>

    <div class="support">
        Em caso de dúvidas sobre esta despesa, entre em contacto com o suporte técnico do sistema Kumbu.
    </div>

    <div class="iban-footer">
        ID Interno: {{ $transaction->uuid ?? '0000-xxxx-0000' }} | Referência: {{ $transaction->reference ?? '---' }}
    </div>

</body>
</html>
