<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conta;

class AccountController extends Controller
{
    public function index()
    {
        $contas = Conta::all();
        return view('account.index', compact('contas'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'valor' => 'required|numeric',
            'instituicao' => 'required|string',
            'descricao' => 'nullable|string',
            'tipoConta' => 'required|string',
            'cor' => 'nullable|string',
            'incluir' => 'required|boolean',
        ]);

        $conta = Conta::create([
            'valor' => $data['valor'],
            'instituicao' => $data['instituicao'],
            'descricao' => $data['descricao'],
            'tipo' => $data['tipoConta'],
            'cor' => $data['cor'],
            'incluir' => $data['incluir'],
        ]);

        return response()->json([
            'message' => 'Conta salva com sucesso!',
            'conta' => $conta
        ]);
    }
}
