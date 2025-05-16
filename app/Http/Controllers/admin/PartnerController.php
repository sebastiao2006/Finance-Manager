<?php

namespace App\Http\Controllers\Admin;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    // Função para listar os parceiros
    public function index()
    {
        $partner = Partner::all();
        return view('admin.partner.index', compact('partner'));
    }

    // Função para exibir o formulário de criação de parceiro
    public function create()
    {
        return view('admin.partner.create');
    }

    // Função para armazenar um novo parceiro
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'site' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
        }

        Partner::create([
            'name' => $request->name,
            'logo' => $logoPath,
            'site' => $request->site,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.partner.index')->with('success', 'Parceiro adicionado com sucesso!');
    }

        // Método para exibir o formulário de edição
        public function edit($id)
        {
            $partner = Partner::findOrFail($id); // Encontra o parceiro pelo ID
            return view('admin.partner.edit', compact('partner')); // Retorna a view de edição com o parceiro
        }

        // Método para atualizar o parceiro
        public function update(Request $request, $id)
        {
            $partner = Partner::findOrFail($id);
            $partner->update($request->all()); // Atualiza os dados do parceiro com os dados enviados pelo formulário

            return redirect()->route('admin.partner.index')->with('success', 'Parceiro atualizado com sucesso.');
        }

         // Método para excluir o parceiro
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id); // Encontra o parceiro pelo ID
        $partner->delete(); // Exclui o parceiro

        // Redireciona de volta com uma mensagem de sucesso
        return redirect()->route('admin.partner.index')->with('success', 'Parceiro excluído com sucesso!');
    }
}
