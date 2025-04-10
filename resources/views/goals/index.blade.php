@extends('layouts.app2')
@section('title', 'Kivula')
@section('content')

<main>
    <h1>Objetivos</h1>
    <div class="dropdown-container">
        <button class="dropdown-button" onclick="toggleDropdown()">
            <i class="fas fa-chevron-down"></i>
            OBJETIVOS ATIVOS
        </button>
        <div class="dropdown-menu" id="dropdownMenu">
            <a href="#">Objetivos Alcançados</a>
            <a href="#">Objetivos Parados</a>
            <a href="#">Objetivos Ativos</a>
        </div>
    </div>
    <div class="card">
        <i class="fas fa-plus"></i>
        <p>Novo objetivo</p>
    </div>
    <script>
        function toggleDropdown() {
            const menu = document.getElementById('dropdownMenu');
            menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
        }
        
        document.addEventListener('click', function(event) {
            const dropdown = document.querySelector('.dropdown-container');
            if (!dropdown.contains(event.target)) {
                document.getElementById('dropdownMenu').style.display = 'none';
            }
        });
    </script>

    <style>

        h1 {
            margin-top: 80px;
            font-size: 28px;
            color: #222;
        }
        .dropdown-container {
            margin-top: 30px;
            position: relative;
            display: inline-block;
        }
        .dropdown-button {
            
            background: #0049bf;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            font-size: 14px;
            font-weight: normal;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.2);
        }
        .dropdown-button i {
            font-size: 12px;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 40px;
            left: 0;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 200px;
        }
        .dropdown-menu a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
            font-size: 14px;
            transition: background 0.3s;
        }
        .dropdown-menu a:hover {
            background: #e0e0e0;
        }
        .card {
            width: 400px;
            background: white;
            border-radius: 15px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
            padding: 60px;
            text-align: center;
            margin-top: 20px;
        }
        .card i {
            font-size: 24px;
            color: black;
        }
        .card p {
            font-size: 14px;
            color: #333;
            margin-top: 10px;
        }
    </style>
</main>

@endsection