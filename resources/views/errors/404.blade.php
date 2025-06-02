@extends('layouts.error')

@section('title', 'Página Não Encontrada')

@section('content')
    <div class="custom-error">
        <div class="custom-error-icon">💸</div>
        <h1 class="custom-error-code">404</h1>
        <p class="custom-error-title">Ops financeiro! Página não encontrada.</p>
        <p class="custom-error-message">Parece que essa transação não existe ou foi removida do sistema.</p>
        <a href="{{ url('/') }}" class="custom-error-button">Voltar para o painel</a>
    </div>

    <style>
        .custom-error {
            text-align: center;
            padding: 60px 20px;
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            max-width: 480px;
            margin: 0 auto;
        }

        .custom-error-icon {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .custom-error-code {
            font-size: 6rem;
            font-weight: bold;
            color: #0a53d1;
            margin-bottom: 10px;
        }

        .custom-error-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }

        .custom-error-message {
            font-size: 1rem;
            color: #666;
            margin-bottom: 30px;
        }

        .custom-error-button {
            display: inline-block;
            padding: 12px 24px;
            background: #0a53d1;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .custom-error-button:hover {
            background: #0a53d1;
        }
    </style>
@endsection
