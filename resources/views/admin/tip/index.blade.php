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
@endsection
