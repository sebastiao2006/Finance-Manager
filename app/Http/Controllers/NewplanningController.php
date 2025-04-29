<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewplanningController extends Controller
{
    public function index()
    {
        return view('newplanning.index'); // Ou retorne um JSON se for uma API
    }
}
