@extends('admin.layouts.app')


@section('content')
    <h2>Criar Nova Dica</h2>

    <form action="{{ route('admin.tip.store') }}" method="POST">
        @csrf

        <label for="title">Título:</label>
        <input type="text" name="title" required>

        <label for="text">Texto da Dica:</label>
        <textarea name="text" required></textarea>

        <label for="updated_at_time">Hora de atualização:</label>
        <input type="text" name="updated_at_time" placeholder="Ex: 08:00 AM">

        <button type="submit">Salvar</button>
    </form>

    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f6f8;
        color: #333;
    }

    h2 {
        font-size: 26px;
        margin-bottom: 20px;
        color: #222;
    }

    form {
        background: #fff;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        max-width: 700px;
        margin-bottom: 40px;
    }

    label {
        display: block;
        margin-top: 15px;
        font-weight: 600;
        color: #444;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 12px;
        margin-top: 6px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 15px;
        transition: border 0.3s;
    }

    input[type="text"]:focus,
    textarea:focus {
        border-color: #3490dc;
        outline: none;
    }

    textarea {
        height: 120px;
        resize: vertical;
    }

    button[type="submit"],
    button,
    .btn {
        background-color: #3490dc;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 6px;
        font-size: 15px;
        margin-top: 20px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn:hover,
    button:hover {
        background-color: #2779bd;
    }

    .btn-warning {
        background-color: #f59e0b;
    }

    .btn-danger {
        background-color: #e3342f;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 40px;
        background-color: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }

    .table th,
    .table td {
        border: 1px solid #ddd;
        padding: 14px;
        text-align: left;
    }

    .table th {
        background-color: #f1f5f9;
        color: #333;
    }

    .table tr:nth-child(even) {
        background-color: #f9fafb;
    }

    .table tr:hover {
        background-color: #f1f5f9;
    }

    .btn-sm {
        padding: 6px 12px;
        font-size: 13px;
    }
</style>

@endsection
