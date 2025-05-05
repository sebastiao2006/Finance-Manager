<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    // Exibe uma view de transações (se usares)
    public function index()
    {
        return view('transaction.index')->with('ocultarAsideRight', true);
    }

    // Armazena uma nova transação (receita ou despesa)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|in:receita,despesa',
            'value' => 'required|numeric|min:0',
            'month' => 'required|string',
            'year' => 'required|numeric',
        ]);

        Transaction::create($validated);

        return redirect()->back()->with('success', 'Transação registada com sucesso!');
    }
}
