<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:255',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'financial_goal' => 'nullable|string|in:Poupar,Investir',
        ]);

        // Atualizar nome e objetivo financeiro
        $user->name = $request->name;
        $user->financial_goal = $request->financial_goal;

        // Se enviou imagem, salva no storage
        if ($request->hasFile('profile_image')) {
            // Apaga imagem antiga se existir
            if ($user->profile_image_path) {
                Storage::disk('public')->delete($user->profile_image_path);
            }

            $path = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image_path = $path;
        }

        $user->save();

        return back()->with('success', 'Perfil atualizado com sucesso!');
    }
}
