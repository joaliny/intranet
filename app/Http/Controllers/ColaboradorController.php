<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    
    public function index()
    {
        $colaboradores = Colaborador::all(); // Busca todos os registros
        return view('admin.colaboradores.index', compact('colaboradores'));
    }


    public function create()
    {
        return view('admin.colaboradores.create');
    }

    /**
     * Armazena o novo colaborador
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'setor' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'email' => 'required|email|unique:colaboradores,email',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Upload da foto (se existir)
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('colaboradores', 'public');
            $validated['foto'] = $path;
        }

        Colaborador::create($validated);

        return redirect()->route('admin.colaboradores.index')
            ->with('success', 'Colaborador adicionado com sucesso!');
    }
}