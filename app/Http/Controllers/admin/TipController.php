<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tip;

class TipController extends Controller
{
public function index()
{
    $tips = Tip::all(); // todas as dicas
    $tip = $tips->first(); // pega a primeira dica para o formulário

    return view('admin.tip.index', compact('tip', 'tips'));
}



public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'text' => 'required|string',
        'updated_at_time' => 'nullable|string',
    ]);

    $tip = Tip::findOrFail($id);
    $tip->update($request->only('title', 'text', 'updated_at_time'));

      return redirect()->route('admin.tip.index')->with('success', 'Dica criada com sucesso!');
}

public function create()
{
    return view('admin.tip.create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'text' => 'required|string',
        'updated_at_time' => 'nullable|string',
    ]);

    Tip::create($request->only('title', 'text', 'updated_at_time'));

     return redirect()->route('admin.tip.index')->with('success', 'Dica criada com sucesso!');
}

public function edit($id)
{
    $tip = Tip::findOrFail($id);
    return view('admin.tip.edit', compact('tip'));
}

public function destroy($id)
{
    $tip = Tip::findOrFail($id);
    $tip->delete();

    return redirect()->route('admin.tip.index')->with('success', 'Dica removida com sucesso!');
}


}
