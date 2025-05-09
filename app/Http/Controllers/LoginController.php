<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // Exibe o formulário de login
    public function showLoginForm()
    {
        return view('login');
    }

    // Processa o login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Email e senha predefinidos
        $validEmail = 'admin@example.com';
        $validPassword = '123456'; // senha simples para exemplo

        if ($request->email === $validEmail && $request->password === $validPassword) {
            // Login bem-sucedido -> armazena na sessão
            Session::put('user', $validEmail);
            return redirect()->route('dashboard.index');
        } else {
            return back()->withErrors(['email' => 'Credenciais inválidas.']);
        }
    }

    // Dashboard protegido
    public function dashboard()
    {
        if (!Session::has('user')) {
            return redirect()->route('login');
        }

        return view('dashboard.index');
    }

    // Logout
    public function logout()
    {
        Session::forget('user');
        return redirect()->route('login');
    }
}
