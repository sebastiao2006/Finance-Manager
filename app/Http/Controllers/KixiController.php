<?php

namespace App\Http\Controllers;
use App\Models\Kixi;
use Illuminate\Http\Request;

class kixiController extends Controller
{
        public function store(Request $request)
    {
        $kixi = new Kixi();
        $kixi->finalidade = $request->finalidade;
        $kixi->valor = $request->valor;
        $kixi->prazo = $request->prazo;
        $kixi->mensalidade = $request->mensalidade;
        $kixi->participantes = $request->participantes;
        $kixi->save();

        return response()->json(['success' => true]);
    }

    public function index()
    {
        $kixis = Kixi::latest()->get();
        return view('kixi.index', compact('kixis'));
    }
}
