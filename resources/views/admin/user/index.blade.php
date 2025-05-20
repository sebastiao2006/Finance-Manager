@extends('admin.layouts.app')

@section('title', 'User')

@section('content')
<h1>Lista de Usuários</h1>

    <input type="text" placeholder="Pesquisar por usuários..." class="search-box" />

    <table class="user-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Status</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Permissão</th>
                <th>Cadastro</th>
                <th>Último Acesso</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>
                    <span class="status {{ strtolower($user->status) }}">
                        {{ ucfirst($user->status) }}
                    </span>
                </td>
                <td>{{ $user->name }}</td>
                <td>
                    <span class="email-status {{ $user->email_verified ? 'valid' : 'invalid' }}"></span>
                    {{ $user->email }}
                </td>
                <td>{{ $user->permission }}</td>
                <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                <td>{{ $user->last_access ? $user->last_access->format('d/m/Y H:i') : '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

<style>
    .search-box {
        width: 300px;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 6px;
    }

    .user-table {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
    }

    .user-table th, .user-table td {
        padding: 12px 10px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }

    .user-table th {
        background-color: #f9f9f9;
    }

    .status {
        padding: 4px 10px;
        border-radius: 12px;
        font-size: 13px;
        font-weight: bold;
        display: inline-block;
        text-transform: capitalize;
    }

    .status.confirmado {
        background-color: #e6ffed;
        color: #2e7d32;
        border: 1px solid #a5d6a7;
    }

    .status.aguardando {
        background-color: #fff3e0;
        color: #ef6c00;
        border: 1px solid #ffcc80;
    }

    .status.ativo {
        background-color: #e3f2fd;
        color: #0277bd;
        border: 1px solid #81d4fa;
    }

    .email-status {
        display: inline-block;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        margin-right: 6px;
        vertical-align: middle;
    }

    .email-status.valid {
        background-color: #4caf50;
    }

    .email-status.invalid {
        background-color: #f44336;
    }
</style>


@endsection
