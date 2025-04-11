<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kixiController extends Controller
{
    public function index()
    {
        return view('kixi.index'); // Ou retorne um JSON se for uma API
    }
}
