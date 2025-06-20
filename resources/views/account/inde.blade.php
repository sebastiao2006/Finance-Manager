@extends('layouts.app2')
@section('title', 'Kivula')
@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">


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
            <li class="bank-item" id="abrirModalBtn" class="btn-abrir-modal" data-nome="BFA" data-img="{{ asset('assets/img/bfa.png') }}">
              <div class="bank-icon"><img src="{{ asset('assets/img/bfa.png') }}" alt="BFA"></div>
              <span class="bank-name">BFA</span>
              <span class="info-icon">ℹ️</span>
              <span class="arrow-icon">›</span>
            </li>
            <li class="bank-item" id="abrirModalBtn" class="btn-abrir-modal" data-nome="BIC" data-img="{{ asset('assets/img/.png') }}">
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

<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Modal -->
<!-- Modal de Detalhes da Conta -->
<div id="modalDetalhesConta" style="display: none;">
  <div id="modalContentConta"></div>
  <button id="fecharModalConta" style="position: absolute; top: 10px; right: 10px;">×</button>
</div>

<!-- Container de Contas -->
<div id="contasContainer" style="margin-top: 20px;">
  @foreach($contas as $conta)
    <div class="conta-info" data-id="{{ $conta->id }}">
      <div style="display: flex; align-items: center; gap: 10px;">
        <div style="background: {{ $conta->cor }}; width: 40px; height: 40px; border-radius: 50%;"></div>
        <div style="font-weight: bold;">{{ $conta->instituicao }}</div>
      </div>
      <div style="margin-top: 10px;">
        <p style="margin: 0; font-size: 14px;">Saldo atual</p>
        <p style="margin: 0; font-size: 18px; color: green;">Kz {{ number_format($conta->valor, 2, ',', '.') }}</p>
      </div>
      <div style="margin-top: 10px; text-align: right;">
        <button class="verMaisBtn"
          data-instituicao="{{ $conta->instituicao }}"
          data-valor="{{ $conta->valor }}"
          data-descricao="{{ $conta->descricao ?? 'Não informada' }}"
          data-tipo="{{ $conta->tipo }}"
          data-cor="{{ $conta->cor }}"
          data-incluir="{{ $conta->incluir ? 'Sim' : 'Não' }}"
          style="background: none; border: none; color: #7c3aed; font-weight: bold; cursor: pointer;">
          VER MAIS
        </button>
        <button class="excluirBtn" 
          style="background: none; border: none; color: red; font-weight: bold; cursor: pointer; margin-left: 10px;">
          <i class="fas fa-trash"></i>
        </button>
      </div>
    </div>
  @endforeach
</div>


<!-- Modal Detalhes -->
<div id="modalDetalhesConta" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.6); align-items:center; justify-content:center;">
    <div style="background:white; padding:20px; border-radius:8px; width:300px; position:relative;">
      <button id="fecharModalConta" style="position:absolute; top:10px; right:10px;">×</button>
      <div id="modalContentConta"></div>
    </div>
  </div>
  
  <!-- Modal Criação de Conta -->
  <div class="conta-modal" id="contaModal" style="display: none;">
    <div class="modal-overlay" onclick="document.getElementById('contaModal').style.display = 'none';"></div>
    <div class="modal-content" style="background:#fff; padding:20px; border-radius:8px; width:650px; position:relative;">
      <button class="close-btn" id="fecharModalBtn" style="position:absolute; top:10px; right:10px;">×</button>
  
      <h2>Nova conta</h2>
  
      <div class="valor">
        <strong style="font-weight: 900;">Kz</strong>
        <input type="text" id="valorConta" class="valor-input" value="0,00" style="border: none; font-weight: bold; background: transparent; font-size: inherit; text-align: center; width: 100px;">
      </div>
  
      <div class="input-group">
        <label>Instituição financeira</label>
        <div class="instituicao">
          <img src="{{ asset('assets/img/bfa.png') }}" alt="BFA" style="width:30px;">
          <span>BFA</span>
        </div>
      </div>
  
      <div class="input-group">
        <input type="text" placeholder="Descrição">
      </div>
  
      <div class="input-group">
        <select id="tipoConta" name="tipoConta">
          <option value="corrente">Conta corrente</option>
          <option value="Salario">Conta salario</option>
        </select>
      </div>
  
      <div class="input-group">
        <label>Cor da conta</label>
        <div class="cores" id="coresConta">
          <span class="cor azul selected" data-color="blue" style="background:blue; display:inline-block; width:20px; height:20px; border-radius:50%;"></span>
          <span class="cor roxo" data-color="purple" style="background:purple; display:inline-block; width:20px; height:20px; border-radius:50%;"></span>
          <span class="cor verde" data-color="green" style="background:green; display:inline-block; width:20px; height:20px; border-radius:50%;"></span>
          <span class="cor laranja" data-color="orange" style="background:orange; display:inline-block; width:20px; height:20px; border-radius:50%;"></span>
        </div>
      </div>
  
      <div class="input-group switch-group">
        <span>Incluir na soma da tela inicial</span>
        <label class="switch">
          <input type="checkbox" checked>
          <span class="slider"></span>
        </label>
      </div>
  
      <div class="botoes">
        <button type="button" class="btn-primary" id="salvarBtn">Salvar</button>
      </div>
    </div>
  </div>




@section('scripts')



<script>
document.addEventListener('DOMContentLoaded', function () {
  // VER MAIS
  document.querySelectorAll('.verMaisBtn').forEach(btn => {
    btn.addEventListener('click', function () {
      const modal = document.getElementById('modalDetalhesConta');
      const content = document.getElementById('modalContentConta');
      const data = {
        instituicao: this.dataset.instituicao,
        valor: parseFloat(this.dataset.valor).toFixed(2).replace('.', ','),
        descricao: this.dataset.descricao,
        tipo: this.dataset.tipo,
        cor: this.dataset.cor,
        incluir: this.dataset.incluir
      };
      content.innerHTML = `
        <h3>Detalhes da Conta</h3>
        <p><strong>Instituição:</strong> ${data.instituicao}</p>
        <p><strong>Valor:</strong> Kz ${data.valor}</p>
        <p><strong>Descrição:</strong> ${data.descricao}</p>
        <p><strong>Tipo de Conta:</strong> ${data.tipo}</p>
        <p><strong>Cor:</strong> <span style="background:${data.cor}; width:15px; height:15px; display:inline-block; border-radius:50%;"></span> ${data.cor}</p>
        <p><strong>Incluir na Tela Inicial:</strong> ${data.incluir}</p>
      `;
      modal.style.display = 'flex';
    });
  });

  document.getElementById('fecharModalConta').addEventListener('click', () => {
    document.getElementById('modalDetalhesConta').style.display = 'none';
  });

  // EXCLUIR
  document.querySelectorAll('.excluirBtn').forEach(btn => {
    btn.addEventListener('click', function () {
      const contaDiv = this.closest('.conta-info');
      const id = contaDiv.dataset.id;
      if (confirm('Deseja realmente excluir esta conta?')) {
        fetch(`/account/${id}`, {
          method: 'DELETE',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
          }
        })
        .then(res => res.json())
        .then(data => {
          if (data.message.includes('sucesso')) {
            alert(data.message);
            contaDiv.remove();
          } else {
            alert('Erro ao excluir: ' + data.message);
          }
        })
        .catch(err => {
          console.error(err);
          alert('Erro ao excluir conta');
        });
      }
    });
  });

  // COR SELECIONADA
  document.querySelectorAll('#coresConta .cor').forEach(span => {
    span.addEventListener('click', function () {
      document.querySelectorAll('#coresConta .cor').forEach(c => c.classList.remove('selected'));
      this.classList.add('selected');
    });
  });

  // SALVAR
  document.getElementById('salvarBtn').addEventListener('click', () => {
    const valorRaw = document.getElementById('valorConta').value.replace(',', '.');
    const valor = parseFloat(valorRaw) || 0;
    const descricao = document.getElementById('descricaoConta')?.value || '';
    const tipoConta = document.getElementById('tipoConta')?.value || 'corrente';
    const incluir = document.getElementById('incluirConta')?.checked || false;
    const cor = document.querySelector('#coresConta .cor.selected')?.dataset.color || null;

    const payload = {
      valor,
      instituicao: 'BFA',
      descricao,
      tipoConta,
      cor,
      incluir
    };

    fetch('/account', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
      },
      body: JSON.stringify(payload)
    })
    .then(res => res.json())
    .then(data => {
      if (data.message.includes('sucesso')) {
        alert(data.message);
        location.reload();
      } else {
        alert('Erro ao salvar: ' + data.message);
      }
    })
    .catch(err => {
      console.error(err);
      alert('Erro ao salvar conta');
    });
  });
});
</script>


@endsection

<style>
  #modalDetalhesConta {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  align-items: center;
  justify-content: center;
  z-index: 1000;
}

#modalContentConta {
  background: #fff;
  padding: 20px;
  border-radius: 8px;
  max-width: 500px;
  margin: 50px auto;
}

#fecharModalConta {
  background: none;
  border: none;
  color: #ff0000;
  font-weight: bold;
  cursor: pointer;
}

</style>




<style>
  .conta-modal {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1000;
  font-family: Arial, sans-serif;
}

.modal-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
}

.modal-content {
  position: relative;
  background: #fff;
  border-radius: 20px;
  padding: 30px;
  width: 100%;
  max-width: 600px; /* <-- AUMENTADO */
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  z-index: 1001;
}


.close-btn {
  position: absolute;
  top: 20px;
  right: 20px;
  background: transparent;
  border: none;
  font-size: 24px;
  color: #aaa;
  cursor: pointer;
}

h2 {
  font-size: 24px;
  margin-bottom: 20px;
}

.valor {
  color: #000000;
  font-size: 24px;
 
  margin-bottom: 30px;
}



.input-group {
  margin-bottom: 20px;
}

.input-group label {
  display: block;
  font-size: 14px;
  margin-bottom: 8px;
  color: #555;
}

.instituicao {
  display: flex;
  align-items: center;
  border: 1px solid #ccc;
  padding: 10px;
  border-radius: 8px;
  cursor: pointer;
}

.instituicao img {
  width: 24px;
  height: 24px;
  margin-right: 10px;
}

.input-group input,
.input-group select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 14px;
}

.cores {
  display: flex;
  align-items: center;
  gap: 10px;
}

.cor {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  border: 2px solid #ccc;
  cursor: pointer;
}

.cor.azul { background-color: #06b6d4; }
.cor.roxo { background-color: #8b5cf6; }
.cor.verde { background-color: #65a30d; }
.cor.laranja { background-color: #f59e0b; }

.selected {
  border: 3px solid #000;
}

.outros {
  background: #eee;
  border: none;
  padding: 5px 10px;
  border-radius: 12px;
  font-size: 12px;
  cursor: pointer;
}

.switch-group {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.switch {
  position: relative;
  display: inline-block;
  width: 44px;
  height: 24px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  border-radius: 24px;
  transition: .4s;
}

.slider::before {
  position: absolute;
  content: "";
  height: 18px;
  width: 18px;
  left: 3px;
  bottom: 3px;
  background-color: white;
  transition: .4s;
  border-radius: 50%;
}

.switch input:checked + .slider {
  background-color: #7c3aed;
}

.switch input:checked + .slider::before {
  transform: translateX(20px);
}

.botoes {
  display: flex;
  justify-content: flex-end;
  gap: 10px;
  margin-top: 30px;
}

.btn-secondary {
  background: #e0e0e0;
  color: #555;
  border: none;
  padding: 10px 16px;
  border-radius: 10px;
  font-size: 14px;
  cursor: pointer;
}

.btn-primary {
  background: #7c3aed;
  color: #fff;
  border: none;
  padding: 10px 16px;
  border-radius: 10px;
  font-size: 14px;
  cursor: pointer;
}

/* Botão de abrir a modal */
.btn-abrir-modal {
  padding: 10px 20px;
  background-color: #7c3aed;
  color: white;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  font-size: 16px;
}
#contasContainer {
  margin-top: 20px;
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.conta-info {
  background-color: #ffffff;
  border-radius: 20px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  padding: 20px;
  width: 400px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  overflow: hidden;
  position: relative;
}

.conta-info:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

/* Topo */
.conta-topo {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.conta-topo img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: red;
}

.conta-nome {
  font-weight: 600;
  font-size: 16px;
  color: #666666;
  margin-left: 10px;
  flex: 1;
}

.conta-menu {
  font-size: 20px;
  color: #666;
  cursor: pointer;
}

/* Saldo */
.saldo-info {
  margin-top: 20px;
}

.saldo-info div {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 8px;
}

.saldo-info span {
  font-size: 14px;
  color: #555;
}

.saldo-info .info-icon {
  font-size: 14px;
  margin-left: 5px;
  color: #888;
}

.valor {
  font-weight: 1000;
  font-size: 16px;
  color: #000000;
}

/* Rodapé */
.conta-footer {
  margin-top: 20px;
  padding-top: 10px;
  border-top: 1px solid #f0f0f0;
  text-align: right;
}

.conta-footer a {
  color: #7c3aed;
  text-decoration: none;
  font-size: 14px;
  font-weight: 500;
}

</style>

<script>
  const abrirModalBtn = document.getElementById('abrirModalBtn');
  const fecharModalBtn = document.getElementById('fecharModalBtn');
  const contaModal = document.getElementById('contaModal');

  abrirModalBtn.addEventListener('click', () => {
    contaModal.style.display = 'flex';
  });

  fecharModalBtn.addEventListener('click', () => {
    contaModal.style.display = 'none';
  });
</script>







</main>

@endsection