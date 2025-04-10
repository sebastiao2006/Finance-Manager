<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
{
    return view('transaction.index')->with('ocultarAsideRight', true); // Ou retorne um JSON se for uma API
}

}
