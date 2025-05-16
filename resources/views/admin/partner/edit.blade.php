@extends('admin.layouts.app')

@section('title', 'Editar Parceiro')

@section('content')
    <div class="container mx-auto p-6">
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Editar Parceiro</h2>

            <form action="{{ route('admin.partner.update', $partner->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Nome</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $partner->name) }}" class="form-input mt-1 block w-full" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Descrição</label>
                    <textarea id="description" name="description" class="form-input mt-1 block w-full" required>{{ old('description', $partner->description) }}</textarea>
                </div>

                <div class="mb-4">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
