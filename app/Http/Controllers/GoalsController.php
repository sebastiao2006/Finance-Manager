<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;

class GoalsController extends Controller
{
    public function index()
    {
        $goals = Goal::all();
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

        Goal::create($request->all());

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

    $goal->valor_inicial = $request->valor_inicial;
    $goal->save();

    return redirect()->back()->with('success', 'Valor atualizado com sucesso!');
}

}
