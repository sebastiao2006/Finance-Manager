@extends('layouts.app2')
@section('title', 'Kivula')
@section('content')

<main>
    <h1>Contas</h1>

    <div class="card" class="open-button" id="openModalBtn">
        <i class="fas fa-plus"></i>
        <p >Nova Conta</p>
    </div>



    <div class="modal-overlay" id="modalOverlay">
        <div class="modal" id="modalContent">
          <span class="close-btn" id="closeModalBtn">&times;</span>
          <h2>Qual é a instituição financeira da conta que você quer adicionar?</h2>
          <input type="text" class="search-input" placeholder="Buscar por nome">
          <ul class="bank-list">
            <li class="bank-item">
              <div class="bank-icon"><img src="{{ asset('assets/img/bfa.png') }}" alt="BFA"></div>
              <span class="bank-name">BFA</span>
              <span class="info-icon">ℹ️</span>
              <span class="arrow-icon">›</span>
            </li>
            <li class="bank-item">
              <div class="bank-icon"><img src="{{ asset('assets/img/bic.png') }}" alt="BIC"></div>
              <span class="bank-name">BIC</span>
              <span class="info-icon">ℹ️</span>
              <span class="arrow-icon">›</span>
            </li>
            <li class="bank-item">
              <div class="bank-icon"><img src="{{ asset('assets/img/bai.png') }}" alt="BAI"></div>
              <span class="bank-name">BAI</span>
              <span class="info-icon">ℹ️</span>
              <span class="arrow-icon">›</span>
            </li>
            <li class="bank-item">
              <div class="bank-icon"><img src="{{ asset('assets/img/yetu.png') }}" alt="YETU"></div>
              <span class="bank-name">YETU</span>
              <span class="info-icon">ℹ️</span>
              <span class="arrow-icon">›</span>
            </li>
            <li class="bank-item">
              <div class="bank-icon"><img src="{{ asset('assets/img/bank.jpg') }}" alt="standardBank"></div>
              <span class="bank-name">standardBank</span>
              <span class="info-icon">ℹ️</span>
              <span class="arrow-icon">›</span>
            </li>
          </ul>
        </div>
      </div>
    
      <script>
        const openBtn = document.getElementById('openModalBtn');
        const closeBtn = document.getElementById('closeModalBtn');
        const overlay = document.getElementById('modalOverlay');
    
        openBtn.addEventListener('click', () => {
          overlay.style.display = 'flex';
        });
    
        closeBtn.addEventListener('click', () => {
          overlay.style.display = 'none';
        });
    
        overlay.addEventListener('click', (e) => {
          if (e.target === overlay) {
            overlay.style.display = 'none';
          }
        });
      </script>
    


    <style>

        h1 {
            margin-top: 80px;
            font-size: 28px;
            color: #222;
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
        
        button {
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 8px;
      border: none;
      background-color: #6200ee;
      color: white;
      cursor: pointer;
    }

    .modal-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background-color: rgba(0, 0, 0, 0.4);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 1000;
    }

    .modal {
      background-color: white;
      border-radius: 20px;
      width: 500px;
      max-width: 95%;
      padding: 30px;
      position: relative;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .modal h2 {
      font-size: 20px;
      margin-bottom: 20px;
    }

    .close-btn {
      position: absolute;
      top: 20px;
      right: 25px;
      font-size: 24px;
      cursor: pointer;
      color: #888;
    }

    .search-input {
      width: 100%;
      padding: 10px;
      border-radius: 10px;
      border: 1px solid #ccc;
      margin-bottom: 25px;
    }

    .bank-list {
      list-style: none;
    }

    .bank-item {
      display: flex;
      align-items: center;
      padding: 12px;
      border-radius: 10px;
      cursor: pointer;
      transition: background-color 0.2s;
    }

    .bank-item:hover {
      background-color: #f1f1f1;
    }

    .bank-icon img {
      width: 100px;
      height: 32px;
      border-radius: 50%;
      margin-right: 12px;
      object-fit: contain;
    }

    .bank-name {
      flex-grow: 1;
    }

    .info-icon {
      margin-left: auto;
      margin-right: 10px;
      color: #888;
    }

    .arrow-icon {
      font-size: 16px;
      color: #888;
    }
    </style>
</main>

@endsection