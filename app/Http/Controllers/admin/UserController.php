<?php

namespace App\Http\Controllers\Admin;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
{
    $users = User::all()->map(function ($user) {
        return (object)[
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'email_verified' => $user->email_verified_at !== null,
            'permission' => $user->role ?? 'Admin', // ou outra coluna que define a permissão
            'status' => $user->status ?? 'Ativo',   // valores como 'Confirmado', 'Aguardando', 'Ativo'
            'created_at' => $user->created_at,
            'last_access' => $user->last_login_at,  // ou qualquer outro campo usado para controle de acesso
        ];
    });

    return view('admin.user.index', compact('users'));
}

}
