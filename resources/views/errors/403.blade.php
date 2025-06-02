@extends('layouts.error')


@section('title', 'Acesso Negado')

@section('content')
<div class="text-center mt-5">
    <h1 class="display-1">403</h1>
    <p class="lead">Você não tem permissão para acessar esta página.</p>
    <a href="{{ url('/') }}" class="btn btn-primary mt-3">Voltar para o início</a>
</div>
@endsection
