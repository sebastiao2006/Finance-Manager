<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Comprovativo #{{ $transaction->id }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 13px;
            color: #000;
            background-color: #fff;
            padding: 40px;
        }
.header {
    text-align: center;
}

.logo {
    width: 140px;
    margin: 0 auto 20px auto;
    display: block;
}


        .title {
            text-align: center;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .section {
            margin-bottom: 25px;
        }

        .section-title {
            font-weight: bold;
            margin-bottom: 8px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 4px;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
        }

        .info-table td {
            padding: 4px 6px;
            vertical-align: top;
        }

        .info-label {
            font-weight: bold;
            width: 160px;
        }

        .footer {
            font-size: 11px;
            color: #555;
            margin-top: 40px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
            text-align: center;
        }

        .timestamp {
            margin-top: 20px;
            font-size: 12px;
            text-align: left;
        }

        .receipt {
            margin-top: 15px;
            font-size: 12px;
        }

        .receipt pre {
            background-color: #f8f8f8;
            padding: 10px;
            border: 1px solid #ccc;
            overflow-x: auto;
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
            <p><strong>Logotipo</strong></p>
        @endif
    </div>

    {{-- <div class="title">
        A operação que efectuou foi registada com sucesso através do sistema Kumbu.
    </div> --}}

    <div class="section">
        <div class="section-title">Dados do Ordenante</div>
        <table class="info-table">
            <tr>
                <td class="info-label">Utilizador</td>
                <td>{{ auth()->user()->name ?? 'Nome do Usuário' }}</td>
            </tr>
        </table>
    </div>

    <div class="section">
        <div class="section-title">Dados do Pagamento</div>
        <table class="info-table">
            <tr><td class="info-label">Número de Operação</td><td>{{ $transaction->id }}</td></tr>
            <tr><td class="info-label">Tipo de Pagamento</td><td>{{ $transaction->description ?? '---' }}</td></tr>
            <tr><td class="info-label">Montante</td><td>{{ number_format($transaction->value, 2, ',', '.') }} kz</td></tr>
            <tr><td class="info-label">Data do Pagamento</td><td>{{ $transaction->created_at->format('d/m/Y H:i:s') }}</td></tr>
            <tr><td class="info-label">Estado</td><td>{{ ucfirst($transaction->status ?? 'Sucesso') }}</td></tr>
            <tr><td class="info-label">Canal</td><td>{{ $transaction->channel ?? 'Meu Kumbu' }}</td></tr>
        </table>
    </div>

    <div class="section">
        <div class="section-title">Dados do Recibo</div>
        <div class="receipt">
            <strong>Tipo de Operação:</strong><br>
             <pre>{{ ucfirst($transaction->type ?? 'Receita') }}</pre>

        </div>
    </div>

    <div class="timestamp">
        Documento processado pelo sistema Kumbu em: {{ now()->format('d/m/Y H:i:s') }}
    </div>

    <div class="footer">
        Caso necessite de obter alguma informação adicional, contacte o suporte técnico do sistema Kumbu.<br>
        Email: suporte@kumbu.ao | Tel: +244 000 000 000
    </div>

</body>
</html>
