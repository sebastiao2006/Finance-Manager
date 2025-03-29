<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipController extends Controller
{
    public function index()
    {
        return view('tip.index'); // Ou retorne um JSON se for uma API
    }
}
