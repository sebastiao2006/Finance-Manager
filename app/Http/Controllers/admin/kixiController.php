<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kixi;

class KixiController extends Controller
{
  public function index()
{
    $kixis = Kixi::latest()->get(); // ou paginate(10)
    $kixis = Kixi::with('user')->get();

    return view('admin.kixi.index', compact('kixis'));
}
}
