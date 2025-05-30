<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
  use App\Models\Category;
class NewplanningController extends Controller
{


public function index()
{
    $categories = Category::all();  // pega todas as categorias do banco
    return view('newplanning.index', compact('categories'));  // passa para a view
}

    
}
