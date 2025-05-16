@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Editar Plano</h1>
    <form action="{{ route('admin.plans.update', $plan) }}" method="POST">
        @method('PUT')
        @include('admin.plans._form')
    </form>
</div>
@endsection
