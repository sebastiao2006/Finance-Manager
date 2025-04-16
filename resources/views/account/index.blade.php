@extends('layouts.app2')
@section('title', 'Kivula')
@section('content')

<main>
    <h1>Contas</h1>

    <div class="card" class="open-button" onclick="openModal()">
        <i class="fas fa-plus"></i>
        <p >Nova Conta</p>
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

  <div class="goal-modal-overlay" id="goalModal">
    <div class="goal-modal">
      <div class="goal-modal-header">
        <h2>Novo objetivo</h2>
        <button class="goal-close-btn" onclick="closeGoalModal()">&times;</button>
      </div>
      <div class="goal-modal-content">
        <div>
          <div class="goal-form-group">
            <label>Nome do objetivo</label>
            <div class="goal-input-icon">
              <span>📄</span>
              <input type="text" placeholder="Novo carro">
            </div>
          </div>
          <div class="goal-form-group">
            <label>Data</label>
            <div class="goal-input-icon">
              <span>📅</span>
              <input type="text" value="11 abril 2025">
            </div>
          </div>
          <div class="goal-form-group">
            <label>Ícone</label>
            <div class="goal-icon-set">
              <div style="background:#ddd">🍽️</div>
              <div class="goal-color-roxo">🚗</div>
              <div style="background:#ddd">👕</div>
              <div style="background:#ddd">🎭</div>
            </div>
            <div class="goal-btn-outros">OUTROS</div>
          </div>
          <div class="goal-form-group">
            <label>Descrição</label>
            <div class="goal-input-icon">
              <span>📝</span>
              <input type="text" placeholder="Digite uma descrição">
            </div>
          </div>
        </div>

        <div>
          <div class="goal-form-group">
            <label>Valor do objetivo</label>
            <div class="goal-input-icon">
              <span style="color: #0049bf;">€</span>
              <input type="text" value="0,00" style="color: #0049bf;">
            </div>
          </div>
          <div class="goal-form-group">
            <label>Valor inicial do objetivo</label>
            <div class="goal-input-icon">
              <span style="color: #0049bf;">€</span>
              <input type="text" value="0,00" style="color: #0049bf;">
            </div>
          </div>
          <div class="goal-form-group">
            <label>Cor</label>
            <div class="goal-color-set">
              <div class="goal-color-azul"></div>
              <div class="goal-color-roxo selected">&#10003;</div>
              <div class="goal-color-verde"></div>
              <div class="goal-color-laranja"></div>
            </div>
            <div class="goal-btn-outros">OUTROS</div>
          </div>
        </div>
      </div>
      <button class="goal-btn-salvar">SALVAR</button>
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
        .card {
            cursor: pointer;
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