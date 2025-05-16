@extends('admin.layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('admin.plans.create') }}" class="btn btn-success mb-3">+ Novo Plano</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Título</th>
                <th>Preço</th>
                <th>Popular?</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($plans as $plan)
                <tr>
                    <td>{{ $plan->title }}</td>
                    <td>Kz {{ number_format($plan->price, 0, ',', '.') }}</td>
                    <td>{{ $plan->is_popular ? 'Sim' : 'Não' }}</td>
                    <td>
                        <a href="{{ route('admin.plans.edit', $plan) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('admin.plans.destroy', $plan) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Deseja apagar este plano?')">Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
