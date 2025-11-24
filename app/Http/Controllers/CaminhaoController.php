<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caminhoes;

class CaminhaoController extends Controller
{
    /**
     * Exibe o formulário de cadastro
     */
    public function create()
    {
        return view('cadastrar');
    }

    /**
     * Valida e salva o caminhão no banco
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'plate' => 'required|string|max:10',
            'brand' => 'required|string|max:50',
            'model' => 'required|string|max:50',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'capacity_kg' => 'required|numeric|min:0',
            'is_active' => 'required|boolean',
            'last_inspection' => 'nullable|date',
            'location_lat' => 'nullable|numeric|between:-90,90',
            'location_lng' => 'nullable|numeric|between:-180,180',
        ]);

        // cria o registro (mass assignment)
        Caminhoes::create($validated);

        return redirect()->route('cadastrar')->with('success', 'Caminhão cadastrado com sucesso!');
    }
}
