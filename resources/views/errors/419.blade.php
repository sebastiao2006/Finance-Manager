@extends('layouts.error')


@section('title', 'Sessão Expirada')

@section('content')
<div class="text-center mt-5">
    <h1 class="display-1">419</h1>
    <p class="lead">Sua sessão expirou. Por favor, atualize a página e tente novamente.</p>
    <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Voltar</a>
</div>
@endsection

