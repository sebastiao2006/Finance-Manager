<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('report.index'); // Ou retorne um JSON se for uma API
    }
}
