<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TipController extends Controller
{
    public function index()
    {
        $userId = auth()->id(); // ID do usuário autenticado

        // Receita por mês do usuário logado
        $receitasPorMes = DB::table('transactions')
            ->select(
                DB::raw('MONTH(created_at) as mes'),
                DB::raw('YEAR(created_at) as ano'),
                DB::raw('SUM(value) as total')
            )
            ->where('user_id', $userId) // 👈 filtro por usuário
            ->where('type', 'receita')
            ->groupBy(DB::raw('YEAR(created_at)'), DB::raw('MONTH(created_at)'))
            ->orderBy('ano')
            ->orderBy('mes')
            ->get();

        // Despesas por mês do usuário logado
        $despesasPorMes = DB::table('transactions')
            ->select(
                DB::raw('MONTH(created_at) as mes'),
                DB::raw('YEAR(created_at) as ano'),
                DB::raw('SUM(value) as total')
            )
            ->where('user_id', $userId) // 👈 filtro por usuário
            ->where('type', 'despesa')
            ->groupBy(DB::raw('YEAR(created_at)'), DB::raw('MONTH(created_at)'))
            ->orderBy('ano')
            ->orderBy('mes')
            ->get();

        $meses = [
            1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril',
            5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto',
            9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
        ];

        return view('tip.index', compact('receitasPorMes', 'despesasPorMes', 'meses'));
    }

}

