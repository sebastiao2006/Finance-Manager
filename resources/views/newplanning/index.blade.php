@extends('layouts.app3')
@section('title', 'Kivula')
@section('content')

<!-- Ícones do FontAwesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<main>


    <div class="planejamento-container">
        <div class="planejamento-left-panel">
            <h2 class="planejamento-title">Hora de planejar!</h2>
            <p class="planejamento-subtitle">Preencha os campos abaixo com seus limites de gastos para cada categoria.</p>
            <h3 class="planejamento-categorias-title">Categorias</h3>
            <div class="planejamento-categorias-scroll">
              
              <!-- Categoria Educação -->
<form action="{{ route('planning.store') }}" method="POST">
    @csrf
    <div class="planejamento-categorias-scroll">
@foreach($categories as $category)
    <div class="planejamento-category-card">
        <div class="planejamento-icon" style="color: {{ $category->color }}">
            <i class="{{ $category->icon }}"></i>
        </div>
        <div class="planejamento-details">
            <span class="planejamento-category-name">{{ $category->name }}</span>
            <div class="planejamento-total">
                <label>Total</label>
                <input type="number" name="categories[{{ $category->name }}]" step="0.01" min="0">
            </div>
        </div>
    </div>
@endforeach

    </div>

    <button type="submit" style="margin-top: 20px;">Salvar Planejamento</button>
</form>

          
              <!-- Categoria Lazer -->
          {{--     <div class="planejamento-category-card">
                <div class="planejamento-icon planejamento-lazer"><i class="fas fa-umbrella-beach"></i></div>
                <div class="planejamento-details">
                  <span class="planejamento-category-name">Lazer</span>
                  <div class="planejamento-total">
                    <label>Total</label>
                    <div class="planejamento-value">€ 0,00</div>
                    <input type="text">
                  </div>
                </div>
              </div> --}}
              
              <!-- Categoria Transporte -->
          {{--     <div class="planejamento-category-card">
                <div class="planejamento-icon planejamento-transporte"><i class="fas fa-car"></i></div>
                <div class="planejamento-details">
                  <span class="planejamento-category-name">Transporte</span>
                  <div class="planejamento-total">
                    <label>Total</label>
                    <div class="planejamento-value">€ 0,00</div>
                    <input type="text">
                  </div>
                </div>
              </div> --}}
          
              <!-- Categoria Saúde -->
             {{--  <div class="planejamento-category-card">
                <div class="planejamento-icon planejamento-saude"><i class="fas fa-heartbeat"></i></div>
                <div class="planejamento-details">
                  <span class="planejamento-category-name">Saúde</span>
                  <div class="planejamento-total">
                    <label>Total</label>
                    <div class="planejamento-value">€ 0,00</div>
                    <input type="text">
                  </div>
                </div>
              </div> --}}
          
              <!-- Categoria Alimentação -->
            {{--   <div class="planejamento-category-card">
                <div class="planejamento-icon planejamento-alimentacao"><i class="fas fa-utensils"></i></div>
                <div class="planejamento-details">
                  <span class="planejamento-category-name">Alimentação</span>
                  <div class="planejamento-total">
                    <label>Total</label>
                    <div class="planejamento-value">€ 0,00</div>
                    <input type="text">
                  </div>
                </div>
              </div> --}}
          
              <!-- Categoria Investimentos -->
         {{--      <div class="planejamento-category-card">
                <div class="planejamento-icon planejamento-investimento"><i class="fas fa-piggy-bank"></i></div>
                <div class="planejamento-details">
                  <span class="planejamento-category-name">Investimentos</span>
                  <div class="planejamento-total">
                    <label>Total</label>
                    <div class="planejamento-value">€ 0,00</div>
                    <input type="text">
                  </div>
                </div>
              </div>
           --}}
              <!-- Categoria Outros -->
            {{--   <div class="planejamento-category-card">
                <div class="planejamento-icon planejamento-outros"><i class="fas fa-ellipsis-h"></i></div>
                <div class="planejamento-details">
                  <span class="planejamento-category-name">Outros</span>
                  <div class="planejamento-total">
                    <label>Total</label>
                    <div class="planejamento-value">€ 0,00</div>
                    <input type="text">
                  </div>
                </div>
              </div> --}}
            </div>
          </div>

        <div class="planejamento-right-panel">
          <div class="planejamento-circle"></div>
          <div class="planejamento-summary">
            <h4>Total categorizado</h4>
            <p class="planejamento-amount">€ 0,00</p>
            <p class="planejamento-uncategorized">€ 0,00 sem categorização</p>
          </div>
    
          <div class="planejamento-tip">
            <p><strong><i class="fas fa-info-circle"></i> Dica:</strong> Para remover ou adicionar categorias ao seu planejamento mensal, clique em “Gerenciar categorias”.</p>
          </div>
    
             <!-- Botão para abrir modal -->
    <button onclick="openModal()" style="margin: 20px; padding: 10px 20px; background-color: #7d3cff; color: white; border: none; border-radius: 10px; cursor: pointer;">
      Calcular Economia
    </button>
        </div>
      </div>

      <!-- Modal -->
      <div id="economiaModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); justify-content:center; align-items:center;">
        <div style="background:white; padding:30px; border-radius:20px; width:90%; max-width:400px; text-align:center;">
          <h2>Calcule sua economia</h2>
          <p>Informe seu salário e a porcentagem que deseja economizar.</p>

          <input type="number" id="salarioInput" placeholder="Salário (€)" style="width:100%; padding:10px; margin:10px 0; border:1px solid #ccc; border-radius:10px;">
          <input type="number" id="percentualInput" placeholder="% para economizar" style="width:100%; padding:10px; margin:10px 0; border:1px solid #ccc; border-radius:10px;">

          <button onclick="calcularEconomia()" style="background-color:#7d3cff; color:white; padding:10px 20px; border:none; border-radius:10px; cursor:pointer;">Calcular</button>
          <p id="resultado" style="margin-top:15px; font-weight:bold;"></p>

          <button onclick="closeModal()" style="margin-top:15px; background:none; border:none; color:#7d3cff; cursor:pointer;">Fechar</button>
        </div>
      </div>

      <script>
// Função para abrir o modal
function openModal() {
  document.getElementById('economiaModal').style.display = 'flex';
}

// Função para fechar o modal
function closeModal() {
  document.getElementById('economiaModal').style.display = 'none';
  document.getElementById('resultado').innerText = '';
}

// Função para atualizar visualmente os valores nas categorias (lado esquerdo)
function atualizarValoresCategorias() {
  let inputsCategorias = document.querySelectorAll('.planejamento-total input');
  let valoresCategorias = document.querySelectorAll('.planejamento-value');

  inputsCategorias.forEach((input, index) => {
    let valor = parseFloat(input.value.replace(',', '.')) || 0;
    valoresCategorias[index].innerText = `€ ${valor.toFixed(2)}`;
  });
}

// Função principal para calcular a economia
function calcularEconomia() {
  let salario = parseFloat(document.getElementById('salarioInput').value);
  let percentual = parseFloat(document.getElementById('percentualInput').value);

  if (isNaN(salario) || isNaN(percentual)) {
    alert('Por favor, preencha o salário e a % de economia corretamente!');
    return;
  }

  // Pega todos os inputs das categorias
  let inputsCategorias = document.querySelectorAll('.planejamento-total input');
  let totalGasto = 0;

  inputsCategorias.forEach(input => {
    let valor = parseFloat(input.value.replace(',', '.')) || 0; // trata valores vazios ou com vírgula
    totalGasto += valor;
  });

  let economia = (salario * percentual) / 100;
  let restante = salario - totalGasto - economia;

  if (restante < 0) {
    alert('Atenção! Seus gastos + economia superam o salário.');
  }

  document.getElementById('resultado').innerText = 
    `Total para gastar nas categorias: € ${totalGasto.toFixed(2)}\n` +
    `Você deve economizar: € ${economia.toFixed(2)}\n` +
    `Sobrará livre: € ${restante.toFixed(2)}`;

  // Atualiza o painel direito
  document.querySelector('.planejamento-amount').innerText = `€ ${totalGasto.toFixed(2)} gastos`;
  document.querySelector('.planejamento-uncategorized').innerText = `€ ${economia.toFixed(2)} economizados`;

  // Atualiza valores visuais nas categorias
  atualizarValoresCategorias();
}

// Detecta mudança nos inputs e já atualiza valores visuais
document.addEventListener('DOMContentLoaded', () => {
  let inputsCategorias = document.querySelectorAll('.planejamento-total input');
  inputsCategorias.forEach(input => {
    input.addEventListener('input', atualizarValoresCategorias);
  });
});

      </script>

 <style>


.planejamento-container {
  display: flex;
  gap: 20px;
  margin-right: -190px;
}
.planejamento-left-panel {
  margin-top: 50px;
  flex: 2;
  background: white;
  border-radius: 20px;
  padding: 30px;
  height: 650px; /* altura definida */
  overflow: hidden; /* remove scroll externo */
  display: flex;
  flex-direction: column;
}

.planejamento-right-panel {
  margin-top: 50px;
  flex: 1;
  background: white;
  border-radius: 20px;
  padding: 30px;
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 500px; /* altura reduzida */
  overflow-y: auto; /* permite scroll caso o conteúdo passe da altura */
}

.planejamento-title {
  font-size: 24px;
  margin-bottom: 5px;
}

.planejamento-subtitle {
  color: #555;
  font-size: 14px;
  margin-bottom: 20px;
}

.planejamento-categorias-title {
  margin-top: 20px;
  font-size: 20px;
}

.planejamento-category-card {
  display: flex;
  align-items: center;
  background: #fafafa;
  border: 1px solid #eee;
  border-radius: 20px;
  padding: 15px;
  margin-top: 15px;
}

.planejamento-icon {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  font-size: 20px;
}

.planejamento-casa {
  background: #00a8d6;
}

.planejamento-educacao {
  background: #9c27b0;
}

.planejamento-lazer {
  background: #ff9800;
}

.planejamento-details {
  margin-left: 15px;
  flex: 1;
}

.planejamento-category-name {
  font-weight: 600;
  display: block;
}

.planejamento-total {
  margin-top: 5px;
}

.planejamento-total label {
  font-size: 12px;
  color: #666;
}

.planejamento-value {
  color: #7d3cff;
  font-weight: bold;
  margin: 3px 0;
}

.planejamento-total input {
  width: 100%;
  border: none;
  border-bottom: 1px solid #ccc;
  font-size: 16px;
  padding: 5px;
  outline: none;
}

.planejamento-circle {
  width: 80px;
  height: 80px;
  border: 5px solid #ddd;
  border-radius: 50%;
  margin-bottom: 20px;
}

.planejamento-summary {
  text-align: center;
}

.planejamento-summary h4 {
  font-size: 16px;
  margin-bottom: 5px;
}

.planejamento-amount {
  font-size: 22px;
  font-weight: bold;
}

.planejamento-uncategorized {
  font-size: 14px;
  color: #666;
}

.planejamento-tip {
  background: #efe9ff;
  padding: 10px;
  border-radius: 10px;
  font-size: 13px;
  margin-top: 20px;
  width: 100%;
}

.planejamento-tip p {
  margin: 0;
}

.planejamento-button {
  margin-top: 20px;
  background: none;
  border: none;
  color: #7d3cff;
  font-weight: bold;
  cursor: pointer;
  font-size: 14px;
}


.planejamento-categorias-scroll {
  overflow-y: auto;
  padding-right: 10px;
  max-height: calc(90vh - 150px); /* ajusta com base no tamanho do painel */
}

/* Adiciona estilo de rolagem suave */
.planejamento-categorias-scroll::-webkit-scrollbar {
  width: 6px;
}

.planejamento-categorias-scroll::-webkit-scrollbar-thumb {
  background: #ccc;
  border-radius: 10px;
}

/* Novas cores para ícones */
.planejamento-transporte {
  background: #2196f3;
}

.planejamento-saude {
  background: #e91e63;
}

.planejamento-alimentacao {
  background: #4caf50;
}

.planejamento-investimento {
  background: #ffc107;
}

.planejamento-outros {
  background: #9e9e9e;
}



 </style>

</main>


@endsection