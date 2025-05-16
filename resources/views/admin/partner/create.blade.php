@extends('admin.layouts.app')

@section('title', 'create')

@section('content')
<h2>Adicionar Novo Parceiro</h2>

<form action="{{ route('admin.partner.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Nome:</label>
    <input type="text" name="name" required>

    <label>Logo:</label>
    <input type="file" name="logo" accept="image/*">

    <label>Site:</label>
    <input type="url" name="site">

    <label>Descrição:</label>
    <textarea name="description"></textarea>

    <button type="submit">Adicionar Parceiro</button>
</form>

<hr>
<a href="{{ route('admin.partner.index') }}">Voltar para a Lista de Parceiros</a>

@endsection
