<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
 public function index(Request $request)
{
    $month = $request->query('month', date('n')); // Número do mês (1–12)
    $year = $request->query('year', date('Y'));

    // Mapeamento dos meses
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

    return view('report.index', compact('month', 'year', 'months'));
}


}
