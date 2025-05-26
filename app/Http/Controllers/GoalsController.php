<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;

class GoalsController extends Controller
{
    public function index()
    {
        $goals = Goal::where('user_id', auth()->id())->get();
        return view('goals.index', compact('goals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'data' => 'required|date',
            'icone' => 'nullable|string',
            'descricao' => 'nullable|string',
            'valor_total' => 'required|numeric',
            'valor_inicial' => 'nullable|numeric',
            'cor' => 'nullable|string',
        ]);

        Goal::create([
            'nome' => $request->nome,
            'data' => $request->data,
            'icone' => $request->icone,
            'descricao' => $request->descricao,
            'valor_total' => $request->valor_total,
            'valor_inicial' => $request->valor_inicial ?? 0,
            'cor' => $request->cor,
            'user_id' => auth()->id(), // 🔑 Associar ao usuário logado
        ]);

        return redirect('/goals')->with('success', 'Goal salvo com sucesso!');
    }

    public function destroy(Goal $goal)
    {
        $goal->delete();
        return redirect()->back()->with('success', 'Objetivo deletado com sucesso!');
    }

public function update(Request $request, Goal $goal)
{
    $request->validate([
        'valor_inicial' => 'required|numeric|min:0',
    ]);

    $novoValor = $goal->valor_inicial + $request->valor_inicial;

    if ($novoValor > $goal->valor_total) {
        return redirect()->back()->with('error', 'O valor inicial não pode ultrapassar o valor total do objetivo.');
    }

    $goal->valor_inicial = $novoValor;
    $goal->save();

    return redirect()->back()->with('success', 'Valor adicionado com sucesso!');
}


}
