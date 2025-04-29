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
              <!-- Categoria Casa -->
       {{--        <div class="planejamento-category-card">
                <div class="planejamento-icon planejamento-casa"><i class="fas fa-home"></i></div>
                <div class="planejamento-details">
                  <span class="planejamento-category-name">Casa</span>
                  <div class="planejamento-total">
                    <label>Total</label>
                    <div class="planejamento-value">€ 0,00</div>
                    <input type="text">
                  </div>
                </div>
              </div> --}}
          
              <!-- Categoria Educação -->
              <div class="planejamento-category-card">
                <div class="planejamento-icon planejamento-educacao"><i class="fas fa-book"></i></div>
                <div class="planejamento-details">
                  <span class="planejamento-category-name">Educação</span>
                  <div class="planejamento-total">
                    <label>Total</label>
                    <div class="planejamento-value">€ 0,00</div>
                    <input type="text">
                  </div>
                </div>
              </div>
          
              <!-- Categoria Lazer -->
              <div class="planejamento-category-card">
                <div class="planejamento-icon planejamento-lazer"><i class="fas fa-umbrella-beach"></i></div>
                <div class="planejamento-details">
                  <span class="planejamento-category-name">Lazer</span>
                  <div class="planejamento-total">
                    <label>Total</label>
                    <div class="planejamento-value">€ 0,00</div>
                    <input type="text">
                  </div>
                </div>
              </div>
          
              <!-- Mais categorias -->
              <div class="planejamento-category-card">
                <div class="planejamento-icon planejamento-transporte"><i class="fas fa-car"></i></div>
                <div class="planejamento-details">
                  <span class="planejamento-category-name">Transporte</span>
                  <div class="planejamento-total">
                    <label>Total</label>
                    <div class="planejamento-value">€ 0,00</div>
                    <input type="text">
                  </div>
                </div>
              </div>
          
              <div class="planejamento-category-card">
                <div class="planejamento-icon planejamento-saude"><i class="fas fa-heartbeat"></i></div>
                <div class="planejamento-details">
                  <span class="planejamento-category-name">Saúde</span>
                  <div class="planejamento-total">
                    <label>Total</label>
                    <div class="planejamento-value">€ 0,00</div>
                    <input type="text">
                  </div>
                </div>
              </div>
          
              <div class="planejamento-category-card">
                <div class="planejamento-icon planejamento-alimentacao"><i class="fas fa-utensils"></i></div>
                <div class="planejamento-details">
                  <span class="planejamento-category-name">Alimentação</span>
                  <div class="planejamento-total">
                    <label>Total</label>
                    <div class="planejamento-value">€ 0,00</div>
                    <input type="text">
                  </div>
                </div>
              </div>
          
              <div class="planejamento-category-card">
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
          
              <div class="planejamento-category-card">
                <div class="planejamento-icon planejamento-outros"><i class="fas fa-ellipsis-h"></i></div>
                <div class="planejamento-details">
                  <span class="planejamento-category-name">Outros</span>
                  <div class="planejamento-total">
                    <label>Total</label>
                    <div class="planejamento-value">€ 0,00</div>
                    <input type="text">
                  </div>
                </div>
              </div>
            </div>
          </div>
          

        
    
        <div class="planejamento-right-panel">
          <div class="planejamento-circle"></div>
          <div class="planejamento-summary">
            <h4>Total categorizado</h4>
            <p class="planejamento-amount">€ 0,00</p>
            <p class="planejamento-uncategorized">€ 8,00 sem categorização</p>
          </div>
    
          <div class="planejamento-tip">
            <p><strong><i class="fas fa-info-circle"></i> Dica:</strong> Para remover ou adicionar categorias ao seu planejamento mensal, clique em “Gerenciar categorias”.</p>
          </div>
    
          <button class="planejamento-button">GERENCIAR CATEGORIAS</button>
        </div>
      </div>
      
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