<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $month = $request->query('month', date('F')); // Usa query ?month= se tiver, senão pega mês atual
        $year = date('Y');
    
        $transactions = Transaction::where('month', $month)
            ->where('year', $year)
            ->get();
    
        $entradas = $transactions->where('type', 'receita')->sum('value');
        $saidas = $transactions->where('type', 'despesa')->sum('value');
        $saldo = $entradas - $saidas;
    
        return view('dashboard.index', compact('entradas', 'saidas', 'saldo', 'month'));
    }
    
}
