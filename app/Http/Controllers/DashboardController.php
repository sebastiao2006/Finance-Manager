<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class DashboardController extends Controller
{
public function index(Request $request)
{
    $userId = auth()->id();

    // Captura mês e ano da URL ou usa os valores atuais
    $month = $request->query('month', date('n')); // número do mês
    $year = $request->query('year', date('Y'));

    // Filtra transações com base no mês (como número), ano e usuário logado
    $transactions = Transaction::where('user_id', $userId)
        ->where('month', $month)
        ->where('year', $year)
        ->get();

    // Separa entradas e saídas
    $entradas = $transactions->where('type', 'receita')->sum('value');
    $saidas = $transactions->where('type', 'despesa')->sum('value');
    $saldo = $entradas - $saidas;

    return view('dashboard.index', compact('entradas', 'saidas', 'saldo', 'month', 'year'));
}


    
}
