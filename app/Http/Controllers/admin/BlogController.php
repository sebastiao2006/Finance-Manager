<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCard;

class BlogController extends Controller
{
public function index()
{
    $blog = Blog::first();
    $cards = BlogCard::all();
    return view('admin.blog.index', compact('blog', 'cards'));
}

public function update(Request $request)
{
    $request->validate([
        'titulo' => 'nullable|string',
        'link_blog' => 'nullable|string',
    ]);

    Blog::updateOrCreate(['id' => 1], $request->only(['titulo', 'link_blog']));

    return redirect()->back()->with('success', 'Atualizado com sucesso!');
}

public function storeCard(Request $request)
{
    $data = $request->validate([
        'imagem' => 'required|image',
        'titulo' => 'required|string',
        'link' => 'required|string',
    ]);

    $data['imagem'] = $request->file('imagem')->store('blog', 'public');

    BlogCard::create($data);

    return redirect()->back()->with('success', 'Card adicionado!');
}

public function destroyCard($id)
{
    BlogCard::destroy($id);
    return redirect()->back()->with('success', 'Card removido!');
}
}
