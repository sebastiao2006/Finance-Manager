<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSection;

class HomeSectionController extends Controller
{
public function index()
{
    $section = HomeSection::first() ?? new HomeSection();
    return view('admin.home.index', compact('section'));
}


public function update(Request $request)
{
    $data = $request->validate([
        'title' => 'required|string',
        'subtitle' => 'required|string',
        'image1' => 'nullable|image',
        'image2' => 'nullable|image',
    ]);

    $section = HomeSection::first();

    if (!$section) {
        $section = new HomeSection(); // cria novo se não existir
    }

    // upload das imagens
    if ($request->hasFile('image1')) {
        $data['image1'] = $request->file('image1')->store('home', 'public');
    }

    if ($request->hasFile('image2')) {
        $data['image2'] = $request->file('image2')->store('home', 'public');
    }

    // preenche os dados e salva
    $section->fill($data)->save();

    return redirect()->back()->with('success', 'Seção atualizada com sucesso!');
}


}
