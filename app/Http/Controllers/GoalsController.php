<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoalsController extends Controller
{
    public function index()
    {
        return view('goals.index'); // Ou retorne um JSON se for uma API
    }
}
