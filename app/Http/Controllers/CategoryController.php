<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
public function index()
{
    $categories = Category::all();
    return view('category.index', compact('categories'));
}


public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'icon' => 'required|string',
            'color' => 'required|string',
        ]);

        Category::create($request->all());
        return redirect()->back()->with('success', 'Categoria adicionada!');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category-edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'icon' => 'required|string',
            'color' => 'required|string',
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('category.index')->with('success', 'Categoria atualizada!');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('success', 'Categoria removida!');
    }

}
