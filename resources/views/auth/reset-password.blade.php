<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Redefinir Senha</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            background: url('/caminho/para/sua/imagem-de-fundo.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: #fff;
            width: 800px;
            display: flex;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }

        .left, .right {
            padding: 50px;
            width: 50%;
        }

        .left {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .left h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .left input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 20px;
            width: 100%;
        }

        .left button {
            background-color: #005DFF;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        .left button:hover {
            background-color: #0045c7;
        }

        .right {
            background: linear-gradient(to bottom right, #005DFF, #0099FF);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .right h2 {
            font-size: 28px;
        }

        .right p {
            margin: 20px 0;
            text-align: center;
        }

        .right a {
            padding: 10px 25px;
            color: white;
            border: 2px solid white;
            border-radius: 30px;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .right a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .error {
            color: red;
            margin-bottom: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">

        <div class="left">
            <h2>Redefinir Senha</h2>

            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <input type="email" name="email" placeholder="Email" required>
                @error('email') <div class="error">{{ $message }}</div> @enderror

                <input type="password" name="password" placeholder="Nova senha" required>
                @error('password') <div class="error">{{ $message }}</div> @enderror

                <input type="password" name="password_confirmation" placeholder="Confirme a senha" required>

                <button type="submit">Redefinir senha</button>
            </form>
        </div>

        <div class="right">
            <h2>Olá de novo!</h2>
            <p>Já tem uma nova senha? Volte para o login e acesse sua conta.</p>
            <a href="{{ route('login') }}">ENTRAR</a>
        </div>

    </div>
</div>

</body>
</html>
