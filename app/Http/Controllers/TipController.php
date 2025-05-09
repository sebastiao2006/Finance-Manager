<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TipController extends Controller
{
    public function index()
    {
        // Receita por mês
        $receitasPorMes = DB::table('transactions')
            ->select(
                DB::raw('MONTH(created_at) as mes'),
                DB::raw('YEAR(created_at) as ano'),
                DB::raw('SUM(value) as total')
            )
            ->where('type', 'receita') // Filtra apenas as receitas
            ->groupBy(DB::raw('YEAR(created_at)'), DB::raw('MONTH(created_at)'))
            ->orderBy('ano')
            ->orderBy('mes')
            ->get();

        // Despesas por mês
        $despesasPorMes = DB::table('transactions')
            ->select(
                DB::raw('MONTH(created_at) as mes'),
                DB::raw('YEAR(created_at) as ano'),
                DB::raw('SUM(value) as total')
            )
            ->where('type', 'despesa') // Filtra apenas as despesas
            ->groupBy(DB::raw('YEAR(created_at)'), DB::raw('MONTH(created_at)'))
            ->orderBy('ano')
            ->orderBy('mes')
            ->get();

        // Meses do ano
        $meses = [
            1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril',
            5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto',
            9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
        ];

        // Retorna a view com as receitas e despesas por mês
        return view('tip.index', compact('receitasPorMes', 'despesasPorMes', 'meses'));
    }
}

