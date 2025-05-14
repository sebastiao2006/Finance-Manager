@extends('layouts.app3')
@section('title', 'Kivula')
@section('content')

<main>
    <style>
        table {
            margin-top: 50px;
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #f4f4f4;
            font-weight: bold;
        }
        .icon {
            font-size: 18px;
        }
        .color-circle {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            display: inline-block;
        }
        .actions i {
            margin: 0 5px;
            cursor: pointer;
            color: #666;
        }
        .actions .delete {
            color: red;
        }

        #transacoes-btn {
            background-color: #0f62e4;
            margin-top: 10px;
            color: white;
            padding: 15px 30px;
            border-radius: 25px;
            display: inline-block;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 10px;
            margin-top: 10px;
        }

        .dropdown-content a {
            color: black;
            padding: 10px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            border-radius: 5px;
            font-size: 14px;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown-content a span {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .dropdown-content a .red {
            background-color: red;
        }

        .dropdown-content a .green {
            background-color: green;
        }

        .dropdown-content a .blue {
            background-color: blue;
        }

        #transacoes-btn:hover .dropdown-content {
            display: block;
        }

        /* Responsivo */
        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }
            thead tr {
                display: none;
            }
            tr {
                margin-bottom: 15px;
                background: #fff;
                border-radius: 10px;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
                padding: 10px;
            }
            td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }
            td::before {
                content: attr(data-label);
                position: absolute;
                left: 15px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                text-align: left;
                font-weight: bold;
            }
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <button id="transacoes-btn"><i class="fas fa-chevron-down"></i> Categoria de Despesas
        <div class="dropdown-content">
            <a href="#"><span class="red"></span> Despesas</a>
            <a href="#"><span class="green"></span> Receitas</a>
            <a href="#"><span class="blue"></span> Transferências</a>
        </div>
    </button>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ícone</th>
                <th>Cor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td data-label="Nome">Alimentação</td>
                <td data-label="Ícone" class="icon"><i class="fas fa-utensils"></i></td>
                <td data-label="Cor"><span class="color-circle" style="background: red;"></span></td>
                <td data-label="Ações" class="actions">
                    <i class="far fa-file"></i>
                    <i class="fas fa-pencil-alt"></i>
                    <i class="fas fa-archive"></i>
                    <i class="fas fa-plus-circle delete"></i>
                </td>
            </tr>
            <tr>
                <td data-label="Nome">Assinatura</td>
                <td data-label="Ícone" class="icon"><i class="fas fa-dollar-sign"></i></td>
                <td data-label="Cor"><span class="color-circle" style="background: purple;"></span></td>
                <td data-label="Ações" class="actions">
                    <i class="far fa-file"></i>
                    <i class="fas fa-pencil-alt"></i>
                    <i class="fas fa-archive"></i>
                    <i class="fas fa-plus-circle delete"></i>
                </td>
            </tr>
            <tr>
                <td data-label="Nome">Casa</td>
                <td data-label="Ícone" class="icon"><i class="fas fa-home"></i></td>
                <td data-label="Cor"><span class="color-circle" style="background: blue;"></span></td>
                <td data-label="Ações" class="actions">
                    <i class="far fa-file"></i>
                    <i class="fas fa-pencil-alt"></i>
                    <i class="fas fa-archive"></i>
                    <i class="fas fa-plus-circle delete"></i>
                </td>
            </tr>
            <tr>
                <td data-label="Nome">Compras</td>
                <td data-label="Ícone" class="icon"><i class="fas fa-dollar-sign"></i></td>
                <td data-label="Cor"><span class="color-circle" style="background: purple;"></span></td>
                <td data-label="Ações" class="actions">
                    <i class="far fa-file"></i>
                    <i class="fas fa-pencil-alt"></i>
                    <i class="fas fa-archive"></i>
                    <i class="fas fa-plus-circle delete"></i>
                </td>
            </tr>
            <tr>
                <td data-label="Nome">Educação</td>
                <td data-label="Ícone" class="icon"><i class="fas fa-book"></i></td>
                <td data-label="Cor"><span class="color-circle" style="background: purple;"></span></td>
                <td data-label="Ações" class="actions">
                    <i class="far fa-file"></i>
                    <i class="fas fa-pencil-alt"></i>
                    <i class="fas fa-archive"></i>
                    <i class="fas fa-plus-circle delete"></i>
                </td>
            </tr>
            <tr>
                <td data-label="Nome">Lazer</td>
                <td data-label="Ícone" class="icon"><i class="fas fa-umbrella-beach"></i></td>
                <td data-label="Cor"><span class="color-circle" style="background: orange;"></span></td>
                <td data-label="Ações" class="actions">
                    <i class="far fa-file"></i>
                    <i class="fas fa-pencil-alt"></i>
                    <i class="fas fa-archive"></i>
                    <i class="fas fa-plus-circle delete"></i>
                </td>
            </tr>
            <tr>
                <td data-label="Nome">Operação bancária</td>
                <td data-label="Ícone" class="icon"><i class="fas fa-dollar-sign"></i></td>
                <td data-label="Cor"><span class="color-circle" style="background: purple;"></span></td>
                <td data-label="Ações" class="actions">
                    <i class="far fa-file"></i>
                    <i class="fas fa-pencil-alt"></i>
                    <i class="fas fa-archive"></i>
                    <i class="fas fa-plus-circle delete"></i>
                </td>
            </tr>
            <tr>
                <td data-label="Nome">Outros</td>
                <td data-label="Ícone" class="icon"><i class="fas fa-ellipsis-h"></i></td>
                <td data-label="Cor"><span class="color-circle" style="background: gray;"></span></td>
                <td data-label="Ações" class="actions">
                    <i class="far fa-file"></i>
                    <i class="fas fa-pencil-alt"></i>
                    <i class="fas fa-archive"></i>
                    <i class="fas fa-plus-circle delete"></i>
                </td>
            </tr>
        </tbody>
    </table>
</main>

@endsection
