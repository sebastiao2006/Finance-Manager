@extends('layouts.app3')
@section('title', 'Kivula')
@section('content')
<main>
    <style>
        h1, h2, h3 {
            margin: 0 0 10px;
        }

        .principal {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: 16px;
            padding: 20px;
            flex: 1 1 300px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .tab {
            padding: 10px 20px;
            border-radius: 20px;
            background: #eee;
            cursor: pointer;
            font-size: 14px;
        }

        .tab.active {
            background: #0a53d1;
            color: white;
        }

        .input-group {
            margin-bottom: 15px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border: none;
            border-bottom: 2px solid #ddd;
            border-radius: 5px 5px 0 0;
            background: transparent;
            font-size: 16px;
        }

        input:focus, select:focus {
            border-color: #0a53d1;
            outline: none;
        }

        .btn {
            display: inline-block;
            background: #0a53d1;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            text-align: center;
        }

        .btn.disabled {
            background: #ccc;
            cursor: not-allowed;
        }

        .progress {
            background: #ddd;
            height: 5px;
            border-radius: 5px;
            margin: 10px 0;
            width: 100%;
        }

        .progress-bar {
            height: 5px;
            border-radius: 5px;
            background: #0a53d1;
            width: 0%;
        }

        .preferences select {
            margin-top: 10px;
        }

        .hidden {
            display: none;
        }

        .form-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .form-column {
            flex: 1 1 300px;
        }
    </style>

    <h1>Meu perfil</h1>

    <div class="tabs">
        <div class="tab active" onclick="showSection('overview')">Visão geral</div>
        <div class="tab" onclick="showSection('cadastro')">Meu cadastro</div>
        <div class="tab">Assinatura</div>
        <div class="tab">Convidar amigos</div>
        <div class="tab">Privacidade</div>
    </div>

    <!-- Visão geral -->
    <div id="overviewSection" class="principal">
        <!-- Dados da Conta -->
<div class="card">
    <div class="profile-header">
        <h2>Dados da Conta</h2>
        <button class="btn" style="border-radius: 50%; padding: 10px;">✎</button>
    </div>

<form method="POST" action="{{ route('perfil.atualizar') }}" enctype="multipart/form-data">
        @csrf
        <div class="input-group">
            <label for="profile-image">Imagem de Perfil</label>
            <input type="file" id="profile-image" name="profile_image" accept="image/*" onchange="previewImage(event)">
            <br>
            <img id="image-preview" src="{{ Auth::user()->profile_image_url ?? '' }}" alt="Preview da Imagem" style="max-width: 150px; margin-top: 10px; display: {{ Auth::user()->profile_image_url ? 'block' : 'none' }};">
        </div>

        <div class="input-group">
            <label for="user-name">Nome</label>
            <input type="text" id="user-name" name="name" value="{{ Auth::user()->name ?? '' }}" required>
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="email" value="{{ Auth::user()->email ?? '' }}" disabled>
        </div>

        <button type="button" class="btn">ALTERAR E-MAIL</button>

{{--         <div class="input-group" style="margin-top: 20px;">
            <label>Objetivo Financeiro</label>
            <select name="financial_goal">
                <option value="">Selecione</option>
                <option {{ (Auth::user()->financial_goal ?? '') == 'Poupar' ? 'selected' : '' }}>Poupar</option>
                <option {{ (Auth::user()->financial_goal ?? '') == 'Investir' ? 'selected' : '' }}>Investir</option>
            </select>
        </div> --}}

        <button type="submit" class="btn" style="margin-top: 20px;">ATUALIZAR DADOS</button>
    </form>
</div>

<script>
function previewImage(event) {
    const input = event.target;
    const preview = document.getElementById('image-preview');

    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>


        <!-- Completar cadastro -->
        <div class="card">
            <h3>Quase lá!</h3>
            <p>Complete seu cadastro.</p>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <button class="btn" style="width: 100%; margin-top: 10px;">COMPLETAR CADASTRO</button>

            <div class="preferences" style="margin-top: 30px;">
                <h3>Preferências</h3>

                <label>Idioma</label>
                <select>
                    <option>Português Brasil</option>
                    <option>Inglês</option>
                </select>

                <label>Moeda</label>
                <select>
                    <option>France</option>
                    <option>Brasil</option>
                </select>

                <label>Aparência</label>
                <select>
                    <option>Modo claro</option>
                    <option>Modo escuro</option>
                </select>

                <button class="btn" style="width: 100%; margin-top: 20px;">SALVAR ALTERAÇÕES</button>
            </div>
        </div>
    </div>

    <!-- Meu cadastro -->
    <div id="cadastroSection" class="card hidden">
        <h2>Meus dados</h2>

        <div class="form-grid">
            <!-- Coluna 1 -->
            <div class="form-column">
                <div class="input-group">
                    <label>Nome completo</label>
                    <input type="text" placeholder="Seu nome">
                </div>

                <div class="input-group">
                    <label for="user-name">Como você gostaria de ser chamado?</label>
                    <input type="text" id="user-name" name="name" 
                        value="{{ Auth::user()->name ?? '' }}" required>
                </div>


                <div class="input-group">
                    <label for="user-email">Email</label>
                    <input type="email" id="user-email" name="email"
                        value="{{ Auth::user()->email ?? '' }}" required>
                </div>


                <div class="input-group">
                    <label>Telefone</label>
                    <input type="tel" placeholder="+55">
                </div>

                <div class="input-group">
                    <label>CEP</label>
                    <input type="text">
                </div>

                <div class="input-group">
                    <label>Estado</label>
                    <input type="text">
                </div>

                <div class="input-group">
                    <label>Cidade</label>
                    <input type="text">
                </div>
            </div>

            <!-- Coluna 2 -->
            <div class="form-column">
                <div class="input-group">
                    <label>Aniversário</label>
                    <input type="date">
                </div>

                <div class="input-group">
                    <label>Sexo</label>
                    <select>
                        <option>Masculino</option>
                        <option>Feminino</option>
                        <option>Outro</option>
                    </select>
                </div>

                <div class="input-group">
                    <label>Nacionalidade</label>
                    <select>
                        <option>Brasileiro</option>
                        <option>Estrangeiro</option>
                    </select>
                </div>

                <div class="input-group">
                    <label>CPF</label>
                    <input type="text">
                </div>

                <div class="input-group">
                    <label>Objetivo Financeiro</label>
                    <select>
                        <option>Poupar</option>
                        <option>Investir</option>
                    </select>
                </div>

                <div class="input-group">
                    <label>Deseja participar de pesquisas online?</label>
                    <select>
                        <option>Sim</option>
                        <option>Não</option>
                    </select>
                </div>
            </div>
        </div>

        <button class="btn" style="float: right; margin-top: 20px;">CONTINUAR</button>
    </div>

    <script>
        function showSection(section) {
            // Tabs
            document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
            if (section === 'overview') document.querySelectorAll('.tab')[0].classList.add('active');
            if (section === 'cadastro') document.querySelectorAll('.tab')[1].classList.add('active');

            // Sections
            document.getElementById('overviewSection').classList.add('hidden');
            document.getElementById('cadastroSection').classList.add('hidden');

            if (section === 'overview') document.getElementById('overviewSection').classList.remove('hidden');
            if (section === 'cadastro') document.getElementById('cadastroSection').classList.remove('hidden');
        }
    </script>

</main>
@endsection
