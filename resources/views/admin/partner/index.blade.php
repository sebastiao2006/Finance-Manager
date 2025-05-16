@extends('admin.layouts.app')

@section('title', 'Partner')

@section('content')
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="container mx-auto p-6">
    <div class="bg-white shadow rounded-lg p-6">
        <h3 class="text-xl font-semibold text-gray-700 mb-4">Lista de Parceiros</h3>

        <div class="overflow-x-auto">
            <table class="w-full border border-gray-200 rounded-lg">
                <thead class="bg-gray-100 text-gray-600 uppercase text-sm">
                    <tr>
                        <th class="py-3 px-4 text-left">Nome</th>
                        <th class="py-3 px-4 text-left">Logo</th>
                        <th class="py-3 px-4 text-left">Site</th>
                        <th class="py-3 px-4 text-left">Descrição</th>
                        <th class="py-3 px-4 text-left">Ações</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach($partner as $p)
                        <tr class="border-t border-gray-200 hover:bg-gray-50 transition">
                            <td class="py-4 px-4 font-medium">{{ $p->name }}</td>
                            <td class="py-4 px-4">
                                @if($p->logo)
                                <img src="{{ asset('storage/' . $p->logo) }}" class="w-10 h-10 rounded-full" alt="{{ $p->name }}">
                                @else
                                    <span class="text-gray-400">Sem Logo</span>
                                @endif
                            </td>
                            <td class="py-4 px-4">
                                @if($p->site)
                                    <a href="{{ $p->site }}" target="_blank" class="text-blue-500 hover:underline">Visitar</a>
                                @else
                                    <span class="text-gray-400">Sem site</span>
                                @endif
                            </td>
                            <td class="py-4 px-4">{{ $p->description }}</td>
                            <td class="py-4 px-4 flex justify-center relative">
                                <!-- Botão de 3 pontos -->
                                <button onclick="toggleDropdown({{ $p->id }})" class="p-2 rounded-lg bg-gray-100 hover:bg-gray-200 transition">
                                    <span class="text-gray-500">⋮</span>
                                </button>

                                <!-- Dropdown de Ações -->
                                <div id="dropdown-{{ $p->id }}" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 pointer-events-none transition-all duration-300">
                                    <a href="{{ route('admin.partner.edit', $p->id) }}" class="block py-2 px-4 text-blue-500 hover:bg-blue-100">Editar</a>

                                    <form action="{{ route('admin.partner.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar este parceiro?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="block py-2 px-4 text-red-500 hover:bg-red-100">Deletar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    h3 {
        margin-top: 10px;
        margin-left: 5px;
        color: #3b414a; /* Cinza escuro */
    }

    /* Estilos da tabela */
    table {
        margin-top: 15px;
        width: 100%;
        border-collapse: collapse;
        border-radius: 8px;
        overflow: hidden;
    }

    th, td {
        padding: 12px 16px;
        text-align: left;
    }

    th {
        background-color: #F3F4F6; /* Cinza claro */
        color: #4B5563; /* Cinza escuro */
        text-transform: uppercase;
        font-size: 12px;
    }

    td {
        background-color: #ffffff;
        color: #374151;
    }

    /* Avatar dos usuários */
    td img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }

    /* Efeito hover na linha */
    tbody tr:hover {
        background-color: #F9FAFB;
    }

    /* Botões de ação */
    button {
        border: none;
        background: transparent;
        cursor: pointer;
        padding: 4px 8px;
        font-size: 18px;
    }

    button:hover {
        opacity: 0.8;
    }

    /* Estilo do dropdown */
    .hidden {
        display: none;
    }

    .hover\:bg-blue-100:hover {
        background-color: #E1F4FF;
    }

    .hover\:bg-red-100:hover {
        background-color: #FFE4E4;
    }
</style>

<script>
    // Função para alternar a visibilidade do dropdown
    function toggleDropdown(id) {
        // Esconde todos os dropdowns antes de abrir o selecionado
        document.querySelectorAll('.dropdown').forEach(function(dropdown) {
            dropdown.classList.add('hidden');
            dropdown.classList.remove('opacity-100');
            dropdown.classList.add('opacity-0');
            dropdown.classList.remove('pointer-events-auto');
            dropdown.classList.add('pointer-events-none');
        });

        const dropdown = document.getElementById('dropdown-' + id);

        // Alterna a visibilidade do dropdown
        dropdown.classList.toggle('hidden');
        dropdown.classList.toggle('opacity-0');
        dropdown.classList.toggle('opacity-100');
        dropdown.classList.toggle('pointer-events-none');
        dropdown.classList.toggle('pointer-events-auto');
    }

    // Fecha o dropdown se o usuário clicar fora dele
    document.addEventListener('click', function(event) {
        const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach(function(dropdown) {
            if (!dropdown.contains(event.target) && !event.target.matches('.p-2')) {
                dropdown.classList.add('hidden');
            }
        });
    });
</script>

@endsection
