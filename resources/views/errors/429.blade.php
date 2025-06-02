@extends('layouts.error')

@section('title', 'Muitas Requisições')

@section('content')
<div class="text-center mt-5">
    <h1 class="display-1">429</h1>
    <p class="lead">Você fez muitas requisições em pouco tempo. Por favor, tente novamente mais tarde.</p>
    <a href="{{ url('/') }}" class="btn btn-primary mt-3">Voltar para o início</a>
</div>
@endsection

