<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContaController extends Controller
{
    public function store(Request $request)
    {
        // Pega os dados enviados
        $data = $request->all();

        // Aqui você pode salvar no banco se quiser

        // Exemplo de debug
        return response()->json([
            'message' => 'Conta salva com sucesso!',
            'data' => $data
        ]);
    }
}
