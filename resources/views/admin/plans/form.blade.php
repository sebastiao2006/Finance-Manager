@extends('admin.layouts.app')

@section('title', 'Criar Plano')

@section('content')
@csrf

<form action="{{ route('admin.plans.store') }}" method="POST">
    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Preço</label>
        <input type="number" name="price" class="form-control" step="0.01" value="{{ old('price') }}">
    </div>

    <div class="mb-3">
        <label for="period" class="form-label">Período</label>
        <input type="text" name="period" class="form-control" value="{{ old('period', '/ mês') }}">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrição</label>
        <textarea name="description" class="form-control">{{ old('description') }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Features</label>
        <input type="text" name="features[]" class="form-control mb-1">
        <button type="button" onclick="addFeature()" class="btn btn-secondary btn-sm mt-2">+ Add Feature</button>
    </div>

    <script>
        function addFeature() {
            let input = document.createElement('input');
            input.type = 'text';
            input.name = 'features[]';
            input.className = 'form-control mb-1';
            document.querySelector('.form-label + div').appendChild(input);
        }
    </script>

    <div class="mb-3 form-check">
        <input type="checkbox" name="is_popular" class="form-check-input" {{ old('is_popular') ? 'checked' : '' }}>
        <label class="form-check-label">Plano Popular?</label>
    </div>

    <button class="btn btn-primary">Salvar</button>
</form>

@endsection
