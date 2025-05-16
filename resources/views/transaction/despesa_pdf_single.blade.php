<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Despesa #{{ $transaction->id }}</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 14px;
            padding: 20px;
        }
        .title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        .info {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
            display: inline-block;
            width: 120px;
        }
    </style>
</head>
<body>
    <div class="title">Detalhes da Despesa</div>

    <div class="info"><span class="label">Situação:</span> {{ ucfirst($transaction->status ?? 'efectuada') }}</div>
    <div class="info"><span class="label">Data:</span> {{ $transaction->created_at->format('d/m/Y') }}</div>
    <div class="info"><span class="label">Descrição:</span> {{ $transaction->description ?? '-' }}</div>
    <div class="info"><span class="label">Categoria:</span> {{ $transaction->category ?? '-' }}</div>
    <div class="info"><span class="label">Conta:</span> {{ $transaction->account ?? '-' }}</div>
    <div class="info"><span class="label">Valor:</span> {{ number_format($transaction->value, 2, ',', '.') }} kz</div>
</body>
</html>
