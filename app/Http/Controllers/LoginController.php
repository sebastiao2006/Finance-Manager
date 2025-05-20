<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        if (Auth::user()->is_admin) {
            return redirect()->route('admin.dashboard.index');
        } else {
            return redirect()->route('dashboard.index');
        }
    }

    return back()->withErrors([
        'email' => 'Credenciais inválidas.',
    ]);
}

public function dashboard()
{
    if (!auth()->check()) {
        return redirect()->route('login');
    }

    return view('dashboard.index');
}

public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login');
}

public function showLoginForm()
{
    return view('login'); // ou 'auth.login', dependendo do seu blade
}



}
