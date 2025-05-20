<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conta;
use App\Models\Account;
use Log;

class AccountController extends Controller
{
    public function index()
{
    $accounts = Account::all();
    return view('account.index', compact('accounts'));
}



    public function store(Request $request)
{
    $account = Account::create([
        'valor' => $this->sanitizeMoney($request->input('saldo_inicial')),
        'instituicao' => $request->input('instituicao'),
        'descricao' => $request->input('descricao'),
        'tipo' => $request->input('tipo'),
        'cor' => $request->input('cor'),
        'incluir' => $request->has('incluir_soma') ? 1 : 0,
    ]);

    return response()->json([
        'success' => true,
        'account' => [
            'descricao' => $account->descricao,
            'cor' => $account->cor,
            'saldo_inicial' => $account->valor,
        ]
    ]);
}

private function sanitizeMoney($value)
{
    return floatval(preg_replace('/[^\d,]/', '', str_replace(',', '.', $value)));
}

 public function destroy($id)
{
    $account = Account::findOrFail($id);
    $account->delete();

    return redirect()->route('account.index')->with('success', 'Conta deletada com sucesso.');
}
public function adicionarDespesa(Request $request, $id)
{
    $request->validate([
        'valor_despesa' => 'required|numeric|min:0.01',
    ]);

    $account = Account::findOrFail($id);
    $account->valor -= $request->valor_despesa;
    $account->save();

    return redirect()->back()->with('success', 'Despesa adicionada com sucesso.');
}

}
