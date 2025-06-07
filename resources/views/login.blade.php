<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Modern Login Page | AsmrProg</title>
    <style>
        /* Todo o CSS que você enviou (já está correto) */
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Montserrat', sans-serif; }
        body {
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  height: 100vh;
  overflow: hidden;
  position: relative;
  background: none; /* remove gradient */
}
        .container { background-color: #fff; border-radius: 30px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35); position: relative; overflow: hidden; width: 768px; max-width: 100%; min-height: 480px; }
        .container p { font-size: 14px; line-height: 20px; letter-spacing: 0.3px; margin: 20px 0; }
        .container span { font-size: 12px; }
        .container a { color: #333; font-size: 13px; text-decoration: none; margin: 15px 0 10px; }
        .container button { background-color: #0f62e4; color: #fff; font-size: 12px; padding: 10px 45px; border: 1px solid transparent; border-radius: 8px; font-weight: 600; letter-spacing: 0.5px; text-transform: uppercase; margin-top: 10px; cursor: pointer; }
        .container button.hidden { background-color: transparent; border-color: #fff; }
        .container form { background-color: #fff; display: flex; align-items: center; justify-content: center; flex-direction: column; padding: 0 40px; height: 100%; }
        .container input { background-color: #eee; border: none; margin: 8px 0; padding: 10px 15px; font-size: 13px; border-radius: 8px; width: 100%; outline: none; }
        .form-container { position: absolute; top: 0; height: 100%; transition: all 0.6s ease-in-out; }
        .sign-in { left: 0; width: 50%; z-index: 2; }
        .container.active .sign-in { transform: translateX(100%); }
        .sign-up { left: 0; width: 50%; opacity: 0; z-index: 1; }
        .container.active .sign-up { transform: translateX(100%); opacity: 1; z-index: 5; animation: move 0.6s; }
        @keyframes move { 0%, 49.99% { opacity: 0; z-index: 1; } 50%, 100% { opacity: 1; z-index: 5; } }
        .social-icons { margin: 20px 0; }
        .social-icons a { border: 1px solid #ccc; border-radius: 20%; display: inline-flex; justify-content: center; align-items: center; margin: 0 3px; width: 40px; height: 40px; }
        .toggle-container { position: absolute; top: 0; left: 50%; width: 50%; height: 100%; overflow: hidden; transition: all 0.6s ease-in-out; border-radius: 150px 0 0 100px; z-index: 1000; }
        .container.active .toggle-container { transform: translateX(-100%); border-radius: 0 150px 100px 0; }
        .toggle { background-color: #0f62e4; height: 100%; background: linear-gradient(to right, #5c6bc0, #0f62e4); color: #fff; position: relative; left: -100%; height: 100%; width: 200%; transform: translateX(0); transition: all 0.6s ease-in-out; }
        .container.active .toggle { transform: translateX(50%); }
        .toggle-panel { position: absolute; width: 50%; height: 100%; display: flex; align-items: center; justify-content: center; flex-direction: column; padding: 0 30px; text-align: center; top: 0; transform: translateX(0); transition: all 0.6s ease-in-out; }
        .toggle-left { transform: translateX(-200%); }
        .container.active .toggle-left { transform: translateX(0); }
        .toggle-right { right: 0; transform: translateX(0); }
        .container.active .toggle-right { transform: translateX(200%); }

        /* Remove o background antigo */
        .video-bg {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: -1;
  overflow: hidden;
}

.video-bg video {
  min-width: 100%;
  min-height: 100%;
  object-fit: cover;
}

#password-strength-text {
    font-size: 0.9em;
    margin-top: 4px;
}

#password-strength-bar {
    transition: all 0.3s ease-in-out;
    border-radius: 4px;
}

.error-message {
    color: #ff4d4f; /* vermelho estilo alert */
    font-size: 0.9rem;
    margin-top: 5px;
    /* pode ajustar a posição aqui */
}


    </style>
</head>

<body>
      <div class="video-bg">
    <video autoplay muted loop playsinline>
      <source src="assets/img/Luanda   -  Angola 4k ULTRA HD.mp4" type="video/mp4">
      Seu navegador não suporta vídeo em HTML5.
    </video>
  </div>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Criar Conta</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>ou use seu e-mail para se registrar</span>
                <input type="text" name="name" placeholder="Nome" required>
                <input type="email" name="email" placeholder="E-mail" required>

                <input type="password" name="password" id="password" placeholder="Senha" required>
                <div id="password-strength-text"></div>
                <div id="password-strength-bar" style="height: 5px; background-color: #ccc; margin-top: 5px;"></div>
                <input type="password" name="password_confirmation" placeholder="Confirmar Senha" required>
                <button type="submit">Cadastrar</button>
            </form>
        </div>

        <div class="form-container sign-in">
            {{-- Exibe erros --}}
{{--             @if ($errors->any())
                <div style="color: red;">
                    {{ $errors->first() }}
                </div>
            @endif --}}



            {{-- Formulário conectado no Laravel --}}
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Entrar</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>ou use seu e-mail e senha</span>
                <input type="email" name="email" placeholder="E-mail" required>
                                @if ($errors->has('email'))
                <div class="error-message">
                    {{ $errors->first('email') }}
                </div>
                 @endif
                <input type="password" name="password" placeholder="Senha" required>
                <a href="{{ route('password.request') }}">Esqueceu sua senha?</a>
                <button type="submit">Entrar</button>
            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bem-vindo de volta!</h1>
                    <p>Informe seus dados pessoais para utilizar todos os recursos do site</p>
                    <button class="hidden" id="login">Entrar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Olá, Kamba!</h1>
                    <p>Cadastre-se com seus dados pessoais para utilizar todos os recursos do site</p>
                    <button class="hidden" id="register">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');

        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
        });
    </script>

    <script>
    document.querySelector('form[action="{{ route('register') }}"]').addEventListener('submit', function(e) {
        const password = document.querySelector('input[name="password"]').value;
        const confirmPassword = document.querySelector('input[name="password_confirmation"]').value;

        const passwordRegex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;

        if (!passwordRegex.test(password)) {
            e.preventDefault(); // Impede o envio do formulário
            alert('A senha deve ter no mínimo 8 caracteres, incluindo pelo menos uma letra maiúscula e um número.');
            return;
        }

        if (password !== confirmPassword) {
            e.preventDefault();
            alert('As senhas não coincidem.');
            return;
        }
    });
</script>

<script>
    const passwordInput = document.getElementById('password');
    const strengthBar = document.getElementById('password-strength-bar');
    const strengthText = document.getElementById('password-strength-text');

    passwordInput.addEventListener('input', function () {
        const value = passwordInput.value;

        let strength = 0;
        if (value.length >= 8) strength++;
        if (/[A-Z]/.test(value)) strength++;
        if (/\d/.test(value)) strength++;
        if (/[\W]/.test(value)) strength++; // Caracteres especiais (opcional)

        // Atualiza a barra e o texto
        let color = "#ccc";
        let text = "Muito fraca";

        switch (strength) {
            case 1:
                color = "red";
                text = "Muito fraca";
                break;
            case 2:
                color = "orange";
                text = "Fraca";
                break;
            case 3:
                color = "yellowgreen";
                text = "Boa";
                break;
            case 4:
                color = "green";
                text = "Forte";
                break;
        }

        strengthBar.style.width = `${(strength / 4) * 100}%`;
        strengthBar.style.backgroundColor = color;
        strengthText.textContent = text;
    });
</script>



</body>
{{-- <div class="video-bg">
    <video autoplay muted loop playsinline>
      <source src="assets/img/Luanda   -  Angola 4k ULTRA HD.mp4" type="video/mp4">
      Seu navegador não suporta vídeo em HTML5.
    </video>
  </div> --}}


</html>
