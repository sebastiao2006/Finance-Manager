<?php

namespace App\Http\Controllers;
use App\Models\Planning; // Adicione esta linha

use Illuminate\Http\Request;

class PlanningController extends Controller
{
   public function index()
{
    // Obtém todos os planejamentos
    $plannings = Planning::all(); 

    // Retorna a view 'planning.index' passando os planejamentos
    return view('planning.index', compact('plannings'));
}


        // Exibe a lista de planejamentos
        public function list()
        {
            // Busca todos os planejamentos, agrupados por data e somando os valores
            $plannings = Planning::select('category', 'amount', 'created_at')
                ->orderBy('created_at', 'desc')
                ->get();
    
            return view('planning.index', compact('plannings'));
        }
    
        // Salva as categorias e valores
        public function store(Request $request)
        {
            $categories = $request->input('categories', []);
    
            foreach ($categories as $category => $amount) {
                if ($amount > 0) { // Salva apenas se o valor for maior que zero
                    Planning::create([
                        'category' => $category,
                        'amount' => $amount,
                    ]);
                }
            }
    
            return redirect()->route('planning.index')->with('success', 'Planejamento salvo com sucesso!');
        }

                public function destroy($id)
        {
            // Encontrar o planejamento a ser apagado
            $planning = Planning::findOrFail($id);

            // Apagar o planejamento
            $planning->delete();

            // Redirecionar de volta com uma mensagem de sucesso
            return redirect()->route('planning.index')->with('success', 'Planejamento excluído com sucesso!');
        }

}
