<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Barryvdh\DomPDF\Facade\Pdf;




class TransactionController extends Controller
{
    public function receita(Request $request)
    {
        $month = $request->input('month', date('m'));
        $year = $request->input('year', date('Y'));
    
        $transactions = Transaction::where('type', 'receita')
            ->whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->orderBy('created_at', 'desc')
            ->get();
    
        $months = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    
        return view('transaction.receita', compact('transactions', 'month', 'year', 'months'));
    }
    
    
    public function despesa(Request $request)
    {
        $month = $request->input('month', date('m'));
        $year = $request->input('year', date('Y'));
    
        $transactions = Transaction::where('type', 'despesa')
            ->whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->orderBy('created_at', 'desc')
            ->get();
            $months = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    
            return view('transaction.despesa', compact('transactions', 'month', 'year', 'months'));
    }
    


    public function index(Request $request)
    {
        // Filtro opcional por mês e ano
        $month = $request->get('month', date('m'));
        $year = $request->get('year', date('Y'));
    
        $transactions = Transaction::whereYear('created_at', $year)
            ->whereMonth('created_at', $month)
            ->orderBy('created_at', 'desc')
            ->get();
    
        $months = [
            'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
            'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
        ];
    
        return view('transaction.index', compact('transactions', 'month', 'year', 'months'));
    }
    
    

    // Armazena uma nova transação (receita ou despesa)
   public function store(Request $request)
{
    // Primeiro, valide os campos
    $validated = $request->validate([
        'type' => 'required|in:receita,despesa',
        'value' => 'required|numeric|min:0',
        'month' => 'required|string',
        'year' => 'required|numeric',
    ]);

    // Depois, adicione o user_id manualmente
    $validated['user_id'] = auth()->id();

    // Crie a transação
    Transaction::create($validated);

    return redirect()->back()->with('success', 'Transação registrada com sucesso!');
}

  

    public function edit(Transaction $transaction)
{
    // Lógica para editar a transação
    return view('transaction.edit', compact('transaction'));
}

public function destroy(Transaction $transaction)
{
    \Log::info('Tentando excluir a transação', ['transaction_id' => $transaction->id]);

    $type = $transaction->type; // pega se é 'receita' ou 'despesa'
    
    $transaction->delete();

    \Log::info('Transação excluída', ['transaction_id' => $transaction->id]);

    // Redireciona para a página correta
    if ($type == 'receita') {
        return redirect()->route('transaction.receita')->with('success', 'Transação excluída com sucesso.');
    } else {
        return redirect()->route('transaction.despesa')->with('success', 'Transação excluída com sucesso.');
    }
}

public function exportPdf()
{
    $transactions = Transaction::all();

    $pdf = Pdf::loadView('transaction.pdf', compact('transactions'));

    return $pdf->download('transacoes.pdf');
}

public function exportSinglePdf($id)
{
    $transaction = Transaction::findOrFail($id);

    if ($transaction->type !== 'receita') {
        abort(403, 'Apenas receitas podem ser exportadas.');
    }

    $pdf = Pdf::loadView('transaction.receita_pdf_single', compact('transaction'));
    return $pdf->download('receita_' . $transaction->id . '.pdf');
}


public function downloadPdf($id)
{
    $transaction = Transaction::findOrFail($id);

    $pdf = Pdf::loadView('transaction.despesa_pdf_single', compact('transaction'));

    return $pdf->download('despesa_' . $transaction->id . '.pdf');
}



}
