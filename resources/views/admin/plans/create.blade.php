@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Criar Plano</h1>
    <form action="{{ route('admin.plans.store') }}" method="POST">
        @include('admin.plans._form')
    </form>
</div>
@endsection
