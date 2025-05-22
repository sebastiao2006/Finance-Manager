
@extends('layouts.app2')
@section('title', 'Kivula')
@section('content')

<main>



<style>
      .card-goals-list {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 20px;
    }

    .goal-card {
      width: 360px;
      background-color: white;
      border-radius: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      font-family: sans-serif;
    }

    .new-goal-card {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      text-align: center;
      font-size: 14px;
      color: #333;
      height: 200px;
    }

    .new-goal-card i {
      font-size: 32px;
      color: #000;
      margin-bottom: 10px;
    }

    .goal-header {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .goal-icon {
      width: 32px;
      height: 32px;
      background-color: #7c3aed;
      border-radius: 50%;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .goal-header h3 {
      font-size: 16px;
      font-weight: 600;
      margin: 0;
    }

    .goal-body {
      margin-top: 16px;
      position: relative;
    }

    .goal-label {
      font-size: 14px;
      color: #4b5563;
      margin: 0;
    }

    .goal-date {
      font-size: 14px;
      color: #4b5563;
      margin-bottom: 4px;
    }

    .goal-percentage {
      position: absolute;
      right: 0;
      top: 0;
      font-weight: bold;
      color: #333;
    }

    .progress-bar {
      height: 8px;
      border-radius: 4px;
      background-color: #e5e7eb;
      margin: 10px 0;
      overflow: hidden;
    }

    .progress-fill {
      height: 100%;
      background-color: #7c3aed;
      border-radius: 4px 0 0 4px;
    }

    .goal-values {
      font-size: 14px;
      color: #4b5563;
      margin-bottom: 10px;
    }

    .goal-actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 16px;
      color: #4b5563;
    }
</style>  

  
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
    <div class="card-goals-list">
      <!-- Card "Novo objetivo" -->
      <div class="goal-card new-goal-card" onclick="openModal()">
        <i class="fas fa-plus"></i>
        <p>Novo objetivo</p>
      </div>
  
      <div class="goals-container">
        
        

        @foreach($goals as $goal)
          @php
            $percent = $goal->valor_total != 0 ? ($goal->valor_inicial / $goal->valor_total) * 100 : 0;
          @endphp
          <div class="goal-card">
            <div class="goal-header">
              <div class="goal-icon">
                <i class="fas fa-car"></i>
              </div>
              <h3>{{ $goal->nome }}</h3>
            </div>
            <div class="goal-body">
              <p class="goal-label">Data final do objetivo</p>
              <div class="goal-date">{{ \Carbon\Carbon::parse($goal->data)->format('d \d\e M \d\e Y') }}</div>
              <div class="goal-percentage">{{ number_format($percent, 2) }}%</div>
              <div class="progress-bar">
                <div class="progress-fill" style="width: {{ $percent }}%;"></div>
              </div>
              <div class="goal-values">€ {{ number_format($goal->valor_inicial, 2, ',', '.') }} / € {{ number_format($goal->valor_total, 2, ',', '.') }}</div>
              <div class="goal-actions">
                <i class="fas fa-pause"></i>
                <!-- Editar valor_inicial -->
          <form action="{{ route('goals.update', $goal->id) }}" method="POST" style="display: inline-flex; align-items: center; gap: 5px;">
            @csrf
            @method('PUT')
            <input type="number" name="valor_inicial" value="{{ $goal->valor_inicial }}" step="0.01" style="width: 80px; padding: 2px;">
            <button type="submit" style="border: none; background: none; cursor: pointer;">
              <i class="fas fa-check" style="color: green;"></i>
            </button>
          </form>

                <form action="{{ route('goals.destroy', $goal->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Eliminar este objetivo?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" style="all: unset; cursor: pointer;">
                    <i class="fas fa-trash" style="color: red;"></i>
                  </button>
                </form>
                
              
                <i class="fas fa-check"></i>
                <i class="fas fa-list"></i>
              </div>
              
            </div>
          </div>
        @endforeach
      </div>
      
    </div>


  <!-- Modal -->
  <div class="modal-overlay" id="modal">
    <div class="modal">
      <div class="modal-header">
        <h2>Novo objetivo</h2>
        <button class="close-btn" onclick="closeModal()">&times;</button>
      </div>
      <div class="grid">
        <div class="item" onclick="openGoalModal()" class="open-button">
          <div class="icon azul">+</div>
          <span>Novo objetivo</span>
        </div>
        <div class="item" onclick="openGoalModal()" class="open-button">
          <div class="icon roxo">&#128663;</div>
          <span>Novo carro</span>
        </div>
        <div class="item" onclick="openGoalModal()" class="open-button">
          <div class="icon roxo-claro">&#127969;</div>
          <span>Nova casa</span>
        </div>
        <div class="item" onclick="openGoalModal()" class="open-button">
          <div class="icon vermelho-escuro">&#127958;</div>
          <span>Nova viagem<br>nas férias</span>
        </div>
        <div class="item" onclick="openGoalModal()" class="open-button">
          <div class="icon limao">&#128218;</div>
          <span>Educação</span>
        </div>
        <div class="item" onclick="openGoalModal()" class="open-button">
          <div class="icon verde-escuro">&#128176;</div>
          <span>Fundo de<br>emergência</span>
        </div>
        <div class="item" onclick="openGoalModal()" class="open-button">
          <div class="icon azul-claro">&#128138;</div>
          <span>Cuidados de<br>saúde</span>
        </div>
        <div class="item" onclick="openGoalModal()" class="open-button">
          <div class="icon amarelo">&#127864;</div>
          <span>Festa</span>
        </div>
        <div class="item" onclick="openGoalModal()" class="open-button">
          <div class="icon rosa">&#128118;</div>
          <span>Filhos</span>
        </div>
        <div class="item" onclick="openGoalModal()" class="open-button">
          <div class="icon vermelho">&#127873;</div>
          <span>Caridade</span>
        </div>
      </div>
    </div>
  </div>

    <!-- Modal -->

    <!-- Modal -->

    <div class="goal-modal-overlay" id="goalModal">
      <div class="goal-modal">
        <form action="{{ route('goals.store') }}" method="POST">
          @csrf
          <div class="goal-modal-header">
            <h2>Novo goal</h2>
            <button class="goal-close-btn" onclick="closeGoalModal()" type="button">&times;</button>
          </div>
    
          <div class="goal-modal-content">
            <div>
              <div class="goal-form-group">
                <label>Nome do goal</label>
                <div class="goal-input-icon">
                  <span>📄</span>
                  <input type="text" name="nome" placeholder="Novo carro" required>
                </div>
              </div>
    
              <div class="goal-form-group">
                <label>Data</label>
                <div class="goal-input-icon">
                  <span>📅</span>
                  <input type="date" name="data" required>
                </div>
              </div>
    
              <div class="goal-form-group">
                <label>Ícone</label>
                <div class="goal-icon-set">
                  <label><input type="radio" name="icone" value="🍽️"> 🍽️</label>
                  <label><input type="radio" name="icone" value="🚗" checked> 🚗</label>
                  <label><input type="radio" name="icone" value="👕"> 👕</label>
                  <label><input type="radio" name="icone" value="🎭"> 🎭</label>
                </div>
                <div class="goal-btn-outros">OUTROS</div>
              </div>
    
              <div class="goal-form-group">
                <label>Descrição</label>
                <div class="goal-input-icon">
                  <span>📝</span>
                  <input type="text" name="descricao" placeholder="Digite uma descrição">
                </div>
              </div>
            </div>
    
            <div>
              <div class="goal-form-group">
                <label>Valor do goal</label>
                <div class="goal-input-icon">
                  <span style="color: #0049bf;">€</span>
                  <input type="text" name="valor_total" value="0.00" style="color: #0049bf;" required>
                </div>
              </div>
    
              <div class="goal-form-group">
                <label>Valor inicial</label>
                <div class="goal-input-icon">
                  <span style="color: #0049bf;">€</span>
                  <input type="text" name="valor_inicial" value="0.00" style="color: #0049bf;">
                </div>
              </div>
    
              <div class="goal-form-group">
                <label>Cor</label>
                <div class="goal-color-set">
                  <label><input type="radio" name="cor" value="#0049bf"> <div class="goal-color-azul"></div></label>
                  <label><input type="radio" name="cor" value="#6f42c1" checked> <div class="goal-color-roxo selected">&#10003;</div></label>
                  <label><input type="radio" name="cor" value="#28a745"> <div class="goal-color-verde"></div></label>
                  <label><input type="radio" name="cor" value="#fd7e14"> <div class="goal-color-laranja"></div></label>
                </div>
                <div class="goal-btn-outros">OUTROS</div>
              </div>
            </div>
          </div>
    
          <button class="goal-btn-salvar" type="submit">SALVAR</button>
        </form>
      </div>
    </div>

  <script>
    function openGoalModal() {
      document.getElementById("goalModal").style.display = "flex";
    }

    function closeGoalModal() {
      document.getElementById("goalModal").style.display = "none";
    }
  </script>
    
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

    <script>
        function openModal() {
        document.getElementById("modal").style.display = "flex";
        }

        function closeModal() {
        document.getElementById("modal").style.display = "none";
        }
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

        .modal-overlay {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 999;
    }

    .modal {
      background: white;
      border-radius: 15px;
      padding: 30px;
      width: 600px;
      max-width: 95%;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }

    .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .modal-header h2 {
      margin: 0;
      font-size: 24px;
    }

    .close-btn {
      background: none;
      border: none;
      font-size: 24px;
      cursor: pointer;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 15px;
    }

    .item {
      display: flex;
      flex-direction: column;
      align-items: center;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 15px;
      cursor: pointer;
      transition: box-shadow 0.3s;
    }

    .item:hover {
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
    }

    .icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 8px;
      font-size: 20px;
      font-weight: bold;
    }

    /* Cores dos ícones */
    .azul     { background: #00bfff; }
    .roxo     { background: #0049bf; }
    .roxo-claro { background: #c58af9; }
    .vermelho-escuro { background: #8b0000; }
    .limao    { background: #bada55; }
    .verde-escuro { background: #004d00; }
    .azul-claro { background: #40c4ff; }
    .amarelo  { background: #ffc107; }
    .rosa     { background: #ffb6c1; }
    .vermelho { background: #ff0000; }

    .item span {
      text-align: center;
      font-size: 14px;
    }

    .open-button {
      padding: 10px 20px;
      background: #007bff;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }
    .goal-modal-overlay {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 999;
    }

    .goal-modal {
      background: #fff;
      border-radius: 20px;
      padding: 30px;
      width: 750px;
      max-width: 95%;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
    }

    .goal-modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }

    .goal-modal-header h2 {
      margin: 0;
      font-size: 24px;
    }

    .goal-close-btn {
      background: none;
      border: none;
      font-size: 24px;
      cursor: pointer;
    }

    .goal-modal-content {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 30px;
    }

    .goal-form-group {
      display: flex;
      flex-direction: column;
      margin-bottom: 15px;
    }

    .goal-form-group label {
      font-size: 14px;
      margin-bottom: 5px;
      color: #555;
    }

    .goal-input-icon {
      display: flex;
      align-items: center;
      gap: 8px;
      border-bottom: 1px solid #999;
      padding-bottom: 5px;
      font-size: 16px;
    }

    .goal-input-icon input {
      border: none;
      outline: none;
      width: 100%;
      background: transparent;
    }

    .goal-icon-set,
    .goal-color-set {
      display: flex;
      gap: 10px;
      margin-top: 10px;
    }

    .goal-icon-set div,
    .goal-color-set div {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      cursor: pointer;
    }

    .goal-color-set .selected {
      border: 2px solid #555;
    }

    .goal-color-set div {
      border: 2px solid transparent;
    }

    .goal-btn-outros {
      margin-top: 10px;
      padding: 6px 15px;
      background: #eee;
      border-radius: 20px;
      border: 1px solid #ccc;
      font-size: 13px;
      cursor: pointer;
      width: fit-content;
    }

    .goal-btn-salvar {
      margin-top: 20px;
      background: #0049bf;
      color: white;
      border: none;
      border-radius: 20px;
      padding: 10px 30px;
      font-size: 14px;
      float: right;
      cursor: pointer;
    }

    .goal-color-azul { background-color: #00bfff; }
    .goal-color-roxo { background-color: #0049bf; }
    .goal-color-verde { background-color: #8bc34a; }
    .goal-color-laranja { background-color: #ffa500; }

    .goal-input-icon span {
      font-size: 18px;
    }
    </style>
</main>

@endsection