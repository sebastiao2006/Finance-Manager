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
{{--     <button id="transacoes-btn"><i class="fas fa-chevron-down"></i> Categoria de Despesas
        <div class="dropdown-content">
            <a href="#"><span class="red"></span> Despesas</a>
            <a href="#"><span class="green"></span> Receitas</a>
            <a href="#"><span class="blue"></span> Transferências</a>
        </div>
    </button> --}}
<style>
  /* Fundo do modal */
  .modal-overlay {
    display: none; /* Escondido por padrão */
    position: fixed;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0,0,0,0.5);
    justify-content: center;
    align-items: center;
    z-index: 999;
  }
  .modal-overlay.active {
    display: flex;
  }

  /* Caixa do modal */
  .modal {
    background: #fff;
    padding: 25px 30px 40px;
    border-radius: 10px;
    max-width: 400px;
    width: 90%;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    font-family: Arial, sans-serif;
    position: relative;
  }

  .modal h2 {
    margin-bottom: 20px;
    color: #333;
  }

  /* Inputs */
  input[type="text"] {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 15px;
    border: 1.5px solid #ccc;
    border-radius: 6px;
    font-size: 16px;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
  }
  input[type="text"]:focus {
    border-color: #007BFF;
    outline: none;
  }

  /* Botão submit */
  button.submit-btn {
    background-color: #007BFF;
    color: white;
    font-size: 16px;
    padding: 12px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    width: 100%;
    transition: background-color 0.3s ease;
  }
  button.submit-btn:hover {
    background-color: #0056b3;
  }

  /* Seletor de cor em círculos */
  .color-picker {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
    justify-content: center;
  }

  .color-option {
      display: inline-block; /* deixa respeitar largura/altura */
      width: 30px;
      height: 30px;
      border-radius: 50%;
      cursor: pointer;
      border: 2px solid transparent;
      transition: border-color 0.3s ease;
      box-sizing: border-box;
      vertical-align: middle; /* alinha direitinho */
  }

  /* Cores pré-definidas */
  .color-red { background-color: #e74c3c; }
  .color-green { background-color: #27ae60; }
  .color-blue { background-color: #3498db; }
  .color-yellow { background-color: #f1c40f; }
  .color-purple { background-color: #8e44ad; }

  /* Quando selecionado */
  input[type="radio"]:checked + .color-option {
      border-color: #000;
  }

  /* Esconder os radios */
  input[type="radio"] {
      display: none;
  }

  /* Botão para abrir modal */
  button.open-modal-btn {
      background-color: #007BFF;
      color: white;
      font-size: 16px;
      padding: 12px 30px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      margin-bottom: 20px;
  }
  button.open-modal-btn:hover {
      background-color: #0056b3;
  }

  /* Botão fechar */
  .close-btn {
      background: transparent;
      border: none;
      font-size: 22px;
      position: absolute;
      right: 20px;
      top: 15px;
      cursor: pointer;
  }

  /* Lista de ícones */
  .icon-picker {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-bottom: 20px;
    flex-wrap: wrap;
  }

  .icon-option {
    cursor: pointer;
    font-size: 26px;
    color: #666;
    padding: 8px;
    border-radius: 8px;
    border: 2px solid transparent;
    transition: border-color 0.3s ease, color 0.3s ease;
    width: 48px;
    height: 48px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .icon-option:hover {
    color: #007BFF;
    border-color: #007BFF;
  }
  .icon-option.selected {
    color: #007BFF;
    border-color: #007BFF;
  }
</style>

<!-- Botão para abrir modal -->
<button class="open-modal-btn" id="openModalBtn">Nova Categoria</button>

<!-- Modal -->
<div class="modal-overlay" id="modalOverlay">
  <div class="modal">
    <button class="close-btn" id="closeModalBtn">&times;</button>
    <h2>Nova Categoria</h2>
    <form action="{{ route('category.store') }}" method="POST">
      @csrf
      <input type="text" name="name" placeholder="Nome" required>

      <!-- Ícones pré-definidos -->
      <div class="icon-picker" id="iconPicker">
        <div class="icon-option" data-icon="fas fa-bus" title="Transporte"><i class="fas fa-bus"></i></div>
        <div class="icon-option" data-icon="fas fa-home" title="Casa"><i class="fas fa-home"></i></div>
        <div class="icon-option" data-icon="fas fa-book" title="Educação"><i class="fas fa-book"></i></div>
        <div class="icon-option" data-icon="fas fa-utensils" title="Alimentação"><i class="fas fa-utensils"></i></div>
        <div class="icon-option" data-icon="fas fa-heartbeat" title="Saúde"><i class="fas fa-heartbeat"></i></div>
        <div class="icon-option" data-icon="fas fa-ellipsis-h" title="Outros"><i class="fas fa-ellipsis-h"></i></div>
      </div>

      <!-- Input hidden para enviar o ícone selecionado -->
      <input type="hidden" name="icon" id="iconInput" required>

      <div class="color-picker">
        <label>
          <input type="radio" name="color" value="#e74c3c" required>
          <span class="color-option color-red"></span>
        </label>
        <label>
          <input type="radio" name="color" value="#27ae60" required>
          <span class="color-option color-green"></span>
        </label>
        <label>
          <input type="radio" name="color" value="#3498db" required>
          <span class="color-option color-blue"></span>
        </label>
        <label>
          <input type="radio" name="color" value="#f1c40f" required>
          <span class="color-option color-yellow"></span>
        </label>
        <label>
          <input type="radio" name="color" value="#8e44ad" required>
          <span class="color-option color-purple"></span>
        </label>
      </div>

      <button type="submit" class="submit-btn">Adicionar</button>
    </form>
  </div>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script>
  const openBtn = document.getElementById('openModalBtn');
  const modal = document.getElementById('modalOverlay');
  const closeBtn = document.getElementById('closeModalBtn');
  const iconPicker = document.getElementById('iconPicker');
  const iconInput = document.getElementById('iconInput');

  openBtn.addEventListener('click', () => {
    modal.classList.add('active');
  });

  closeBtn.addEventListener('click', () => {
    modal.classList.remove('active');
    clearIconSelection();
  });

  // Fecha modal clicando fora da caixa
  modal.addEventListener('click', (e) => {
    if(e.target === modal){
      modal.classList.remove('active');
      clearIconSelection();
    }
  });

  // Controla seleção de ícones
  iconPicker.querySelectorAll('.icon-option').forEach(option => {
    option.addEventListener('click', () => {
      clearIconSelection();
      option.classList.add('selected');
      iconInput.value = option.getAttribute('data-icon');
    });
  });

  function clearIconSelection() {
    iconPicker.querySelectorAll('.icon-option').forEach(o => o.classList.remove('selected'));
    iconInput.value = '';
  }
</script>




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
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td class="icon"><i class="{{ $category->icon }}"></i></td>
                <td><span class="color-circle" style="background: {{ $category->color }};"></span></td>
                <td class="actions">
                    <a href="{{ route('category.edit', $category->id) }}"><i class="fas fa-pencil-alt"></i></a>
                    <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Tem certeza que deseja remover esta categoria?')">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- <h2>Editar Categoria</h2>
<form action="{{ route('category.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $category->name }}" required>
    <input type="text" name="icon" value="{{ $category->icon }}" required>
    <input type="color" name="color" value="{{ $category->color }}" required>
    <button type="submit">Salvar</button>
</form> --}}

    
</main>

@endsection
