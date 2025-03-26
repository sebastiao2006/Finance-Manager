@extends('layouts.app')
@section('title', 'Kivula')
@section('content')

<main>
    <div class="analyse">
        <div class="sales">
            <div class="status">
                <div class="info">
                    <h1>Receita</h1>
                </div>
                <div class="enter">
                    <img src="assets/img/receita.svg" alt="Imagem de entradas">
                </div>
            </div>
        </div>
        <div class="visits">
            <div class="status">
                <div class="info">
                    <h1>Saidas</h1>
                </div>
                <div class="progresss">
                    <img src="assets/img/despesa.svg" alt="Imagem de entradas">
                </div>
            </div>
        </div>
        <div class="searches">
            <div class="status">
                <div class="info">
                    <h1>Gerar Relatorio</h1>
                </div>
                {{-- <div class="progresss">
                    <img src="assets/img/despesa.svg" alt="Imagem de entradas">
                </div> --}}
            </div>
        </div>
    </div>
   <style>
        .buttons {
            margin-top: 10px;
            display: flex;
            gap: 10px;
        }
        .buttons button {
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 10px 20px;
            border: 2px solid;
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
            background: white;
        }
        .entry {
            border-color: green;
            color: green;
        }
        .exit {
            border-color: red;
            color: red;
        }
        .icon {
            font-size: 20px;
            font-weight: bold;
        }

        .info h1{
            margin-top: 10px
        }
   </style>
</main>

@endsection