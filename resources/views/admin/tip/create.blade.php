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
@endsection
