<?php

namespace App\Http\Controllers;
use App\Models\Planning; // Adicione esta linha
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth; // no topo do arquivo

use Illuminate\Http\Request;

class PlanningController extends Controller
{
public function index(Request $request)
{
    $month = $request->query('month', date('n')); // Mês numérico (1–12)
    $year = $request->query('year', date('Y'));   // Ano

    // Array de meses
    $months = [
        1 => 'janeiro',
        2 => 'fevereiro',
        3 => 'março',
        4 => 'abril',
        5 => 'maio',
        6 => 'junho',
        7 => 'julho',
        8 => 'agosto',
        9 => 'setembro',
        10 => 'outubro',
        11 => 'novembro',
        12 => 'dezembro',
    ];

    // Filtra planejamentos pelo mês e ano
    $plannings = Planning::where('user_id', Auth::id()) // <--- Aqui filtramos pelo usuário autenticado
        ->whereMonth('created_at', $month)
        ->whereYear('created_at', $year)
        ->orderBy('created_at', 'desc')
        ->get();


    return view('planning.index', compact('plannings', 'months', 'month', 'year'));
}

public function create()
{
    $categories = Category::all();
    return view('newplanning.index', compact('categories'));
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
                if ($amount > 0) {
                    Planning::create([
                        'category' => $category,
                        'amount' => $amount,
                        'user_id' => Auth::id(), // associa ao usuário autenticado
                    ]);
                }
            }

            return redirect()->route('planning.index')->with('success', 'Planejamento salvo com sucesso!');
        }

                public function destroy($id)
        {
            // Encontrar o planejamento a ser apagado
            $planning = Planning::where('id', $id)
            ->where('user_id', Auth::id()) // Garante que só apague se for do usuário logado
            ->firstOrFail();


            // Apagar o planejamento
            $planning->delete();

            // Redirecionar de volta com uma mensagem de sucesso
            return redirect()->route('planning.index')->with('success', 'Planejamento excluído com sucesso!');
        }



     public function exportPdf(Request $request)
{
    $month = $request->query('month', date('n')); // Mês numérico
    $year = $request->query('year', date('Y'));   // Ano

    // Filtra os planejamentos por mês e ano
    $plannings = Planning::where('user_id', Auth::id())
        ->whereMonth('created_at', $month)
        ->whereYear('created_at', $year)
        ->orderBy('created_at', 'desc')
        ->get();


    $months = [
        1 => 'janeiro',
        2 => 'fevereiro',
        3 => 'março',
        4 => 'abril',
        5 => 'maio',
        6 => 'junho',
        7 => 'julho',
        8 => 'agosto',
        9 => 'setembro',
        10 => 'outubro',
        11 => 'novembro',
        12 => 'dezembro',
    ];

    $monthName = $months[$month];

    $pdf = Pdf::loadView('planning.pdf', compact('plannings', 'month', 'year', 'monthName'));
    return $pdf->download("planejamento_{$month}_{$year}.pdf");
}

}
