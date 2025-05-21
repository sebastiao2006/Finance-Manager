@extends('admin.layouts.app')

@section('title', 'Dicas')

@section('content')
    <h2>Dica Financeira</h2>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    @if($tip)
      <form action="{{ route('admin.tip.update', $tip->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Título:</label>
            <input type="text" name="title" value="{{ old('title', $tip->title) }}">

            <label>Texto da Dica:</label>
            <textarea name="text">{{ old('text', $tip->text) }}</textarea>

            <label>Hora de atualização:</label>
            <input type="text" name="updated_at_time" value="{{ old('updated_at_time', $tip->updated_at_time) }}">

            <button type="submit">Salvar</button>
      </form>
    @else
        <p>Nenhuma dica cadastrada.</p>
        <a href="{{ route('admin.tip.create') }}"><button>Criar primeira dica</button></a>
    @endif

    <a href="{{ route('admin.tip.create') }}" class="btn btn-primary">Criar nova dica</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Texto</th>
                <th>Atualizado em</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tips as $tip)
            <tr>
                <td>{{ $tip->id }}</td>
                <td>{{ $tip->title }}</td>
                <td>{{ $tip->text }}</td>
                <td>{{ $tip->updated_at_time ?? $tip->updated_at }}</td>
                <td>
                    <a href="{{ route('admin.tip.edit', $tip->id) }}" class="btn btn-sm btn-warning">Editar</a>

                    <form action="{{ route('admin.tip.destroy', $tip->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Tem certeza que deseja apagar?')" class="btn btn-sm btn-danger">Apagar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <style>
    h2 {
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }

    form {
        background: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        max-width: 600px;
        margin-bottom: 30px;
    }

    label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
        color: #333;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
    }

    textarea {
        height: 100px;
        resize: vertical;
    }

    button[type="submit"],
    button,
    .btn {
        background-color: #3490dc;
        color: white;
        padding: 10px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        margin-right: 10px;
        transition: background-color 0.3s ease;
    }

    .btn-warning {
        background-color: #ff9800;
    }

    .btn-danger {
        background-color: #e3342f;
    }

    .btn:hover {
        opacity: 0.9;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 30px;
    }

    .table th,
    .table td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    .table th {
        background-color: #f2f2f2;
        color: #333;
    }

    .table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .table tr:hover {
        background-color: #f1f1f1;
    }

    .btn-sm {
        padding: 6px 10px;
        font-size: 13px;
    }
</style>

@endsection
