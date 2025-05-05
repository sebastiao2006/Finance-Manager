<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conta;
use Log;

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

    public function destroy($id)
    {
        // Adicionando log para depuração
        Log::info("Tentando excluir a conta com ID: $id");
    
        $conta = Conta::find($id); // Encontre a conta pelo ID
    
        if (!$conta) {
            Log::error("Conta com ID $id não encontrada");
            return response()->json(['message' => 'Conta não encontrada.'], 404);
        }
    
        // Exclui a conta
        $conta->delete();
    
        Log::info("Conta com ID $id excluída com sucesso");
    
        return response()->json(['message' => 'Conta excluída com sucesso.']);
    }



}
