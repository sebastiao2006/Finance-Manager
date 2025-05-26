<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Despesa #{{ $transaction->id }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 13px;
            padding: 40px;
            color: #333;
        }

        .header {
            text-align: center;
            border-bottom: 2px solid #0f62e4;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }

        .logo {
            width: 80px;
            height: auto;
            margin-bottom: 10px;
        }

        .header h2 {
            color: #0f62e4;
            margin: 0;
            font-size: 22px;
        }

        .sub-header {
            text-align: center;
            font-size: 13px;
            color: #666;
            margin-bottom: 30px;
        }

        .details {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .details td {
            padding: 10px 6px;
            vertical-align: top;
        }

        .label {
            font-weight: bold;
            width: 180px;
            color: #222;
        }

        .value {
            color: #000;
        }

        .support {
            font-size: 11px;
            text-align: center;
            margin-top: 50px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
            color: #777;
        }

        .iban-footer {
            font-size: 11px;
            text-align: center;
            color: #777;
            margin-top: 10px;
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
        <h2>Comprovativo Digital</h2>
    </div>

    <div class="sub-header">
        Detalhe da operação realizada no sistema Kumbu.
    </div>

    <table class="details">
        <tr>
            <td class="label">Despesa Nº</td>
            <td class="value">#{{ $transaction->id }}</td>
        </tr>
        <tr>
            <td class="label">Situação</td>
            <td class="value">{{ ucfirst($transaction->status ?? 'efectuada') }}</td>
        </tr>
        <tr>
            <td class="label">Data</td>
            <td class="value">{{ $transaction->created_at->format('d/m/Y H:i:s') }}</td>
        </tr>
        <tr>
            <td class="label">Descrição</td>
            <td class="value">{{ $transaction->description ?? '-' }}</td>
        </tr>
        <tr>
            <td class="label">Categoria</td>
            <td class="value">{{ $transaction->category ?? '-' }}</td>
        </tr>
        <tr>
            <td class="label">Conta</td>
            <td class="value">{{ $transaction->account ?? '-' }}</td>
        </tr>
        <tr>
            <td class="label">Valor</td>
            <td class="value">{{ number_format($transaction->value, 2, ',', '.') }} kz</td>
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
