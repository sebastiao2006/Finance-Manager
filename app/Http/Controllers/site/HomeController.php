<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $section = Section::first(); // ou where(...)->first()
        return view('site.home.index')->with('teste', 'Página carregada!');

    }
}
