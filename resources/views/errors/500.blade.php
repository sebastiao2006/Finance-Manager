@extends('layouts.error')


@section('title', 'Erro no Servidor')

@section('content')
<div class="text-center mt-5">
    <h1 class="display-1">500</h1>
    <p class="lead">Algo deu errado no servidor. Estamos trabalhando para resolver isso.</p>
    <a href="{{ url('/') }}" class="btn btn-primary mt-3">Voltar para o início</a>
</div>
@endsection
