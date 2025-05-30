<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
         public function index()
    {
        return view('site.finance.index')->with('teste', 'Página carregada!');
    }
}
