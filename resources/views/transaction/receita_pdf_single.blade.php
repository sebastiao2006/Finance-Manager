<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PDF da Receita</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        h2 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 30px; }
        td, th { padding: 10px; border: 1px solid #ccc; text-align: left; }
    </style>
</head>
<body>
    <div class="title">Detalhes da Receita</div>

    <div class="info"><span class="label">Situação:</span> {{ ucfirst($transaction->status ?? 'efectuada') }}</div>
    <div class="info"><span class="label">Data:</span> {{ $transaction->created_at->format('d/m/Y') }}</div>
    <div class="info"><span class="label">Descrição:</span> {{ $transaction->description ?? '-' }}</div>
    <div class="info"><span class="label">Categoria:</span> {{ $transaction->category ?? '-' }}</div>
    <div class="info"><span class="label">Conta:</span> {{ $transaction->account ?? '-' }}</div>
    <div class="info"><span class="label">Valor:</span> {{ number_format($transaction->value, 2, ',', '.') }} kz</div>
</body>
</html>
