<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class RegisteredUserController extends Controller
{
public function store(Request $request)
{
    // Validação
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => [
            'required',
            'string',
            'min:8',
            'regex:/^(?=.*[A-Z])(?=.*\d).+$/',
            'confirmed',
        ],
    ]);

    // Cria o usuário
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // ✅ Envia o e-mail de boas-vindas
    Mail::to($user->email)->send(new WelcomeMail($user));

    // Autentica o usuário após registrar
    Auth::login($user);

    // Redireciona
    return redirect('/dashboard');
}

public function messages()
{
    return [
        'password.regex' => 'A senha deve conter pelo menos uma letra maiúscula e um número.',
    ];
}




}
