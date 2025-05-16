<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    // Método para exibir o formulário de criação de planos
    public function create()
    {
        return view('admin.plans.form');
    }

    // Método para armazenar um novo plano
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'price' => 'required|numeric',
            'period' => 'nullable|string',
            'description' => 'required|string',
            'features' => 'required|array',
            'is_popular' => 'nullable|boolean',
        ]);

        // Convertendo a lista de features para JSON
        $data['features'] = json_encode($data['features']);

        // Salvando o plano
        Plan::create($data);

        return redirect()->route('admin.plans.index')->with('success', 'Plano criado com sucesso!');
    }

    // Método para exibir a lista de planos
    public function index()
    {
        $plans = Plan::all();
        return view('admin.plans.index', compact('plans'));
    }

    // Método para exibir o formulário de edição de planos
    public function edit(Plan $plan)
    {
        return view('admin.plans.form', compact('plan'));
    }

    // Método para atualizar o plano
    public function update(Request $request, Plan $plan)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'price' => 'required|numeric',
            'period' => 'nullable|string',
            'description' => 'required|string',
            'features' => 'required|array',
            'is_popular' => 'nullable|boolean',
        ]);

        // Convertendo a lista de features para JSON
        $data['features'] = json_encode($data['features']);

        // Atualizando o plano
        $plan->update($data);

        return redirect()->route('admin.plans.index')->with('success', 'Plano atualizado com sucesso!');
    }

    // Método para deletar um plano
    public function destroy(Plan $plan)
    {
        $plan->delete();
        return redirect()->route('admin.plans.index')->with('success', 'Plano deletado com sucesso!');
    }
}
