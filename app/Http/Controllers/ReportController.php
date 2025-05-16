<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planning;

class ReportController extends Controller
{


public function index(Request $request)
{
    $month = $request->query('month', date('n'));
    $year = $request->query('year', date('Y'));

    // Busca os planejamentos do mês/ano selecionados
    $planning = Planning::whereMonth('created_at', $month)
                        ->whereYear('created_at', $year)
                        ->get();

    $months = [ // usado na exibição e controle
        'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
        'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
    ];

    return view('report.index', compact('planning', 'month', 'year', 'months'));
}

}
