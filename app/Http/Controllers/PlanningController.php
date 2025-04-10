<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanningController extends Controller
{
    public function index()
    {
        return view('planning.index'); // Ou retorne um JSON se for uma API
    }
}
