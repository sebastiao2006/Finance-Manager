<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        $month = date('F'); // Mês atual, exemplo: "May"
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
