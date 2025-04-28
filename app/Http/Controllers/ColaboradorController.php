<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
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
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'nome' => 'required|string|max:255',
    //         'setor' => 'required|string|max:255',
    //         'telefone' => 'required|string|max:15',
    //         'email' => 'required|email|max:255',
    //         'cpf' => 'required|string|size:14|unique:colaboradores,cpf', // Verifica se o CPF é único
    //         'foto' => 'nullable|image|max:2048',
    //     ]);

    //     // Upload da foto (se existir)
    //     if ($request->hasFile('foto')) {
    //         $path = $request->file('foto')->store('colaboradores', 'public');
    //         $validated['foto'] = $path;
    //     }

    //     Colaborador::create($validated);

    //     return redirect()->route('admin.colaboradores.index')
    //         ->with('success', 'Colaborador adicionado com sucesso!');
    // }


    public function store(Request $request)
 {
    // Validação dos campos
    $request->validate([
        'nome' => 'required|string|max:255',
        'setor' => 'required|string|max:255',
        'telefone' => 'required|string|max:15',
        'email' => 'required|email|max:255',
        'cpf' => 'required|string|size:14|unique:colaboradores,cpf', // Verifica se o CPF é único
        'foto' => 'nullable|image|max:2048',
    ]);

    // Criação do colaborador
    $colaborador = new Colaborador();
    $colaborador->nome = $request->nome;
    $colaborador->setor = $request->setor;
    $colaborador->telefone = $request->telefone;
    $colaborador->email = $request->email;
    $colaborador->cpf = $request->cpf;

    if ($request->hasFile('foto')) {
        $colaborador->foto = $request->file('foto')->store('colaboradores', 'public');
    }

    $colaborador->save();

    return redirect()->route('admin.colaboradores.index')->with('success', 'Colaborador cadastrado com sucesso!');
  }

public function verificarCpf()
{
    return view('admin.colaboradores.verificar-cpf');
}

public function processarVerificacaoCpf(Request $request)
{
    $request->validate([
        'cpf' => 'required|string|size:14', // Valida o formato do CPF
    ]);

    $colaborador = Colaborador::where('cpf', $request->cpf)->first();

    if ($colaborador) {
        return redirect()->route('admin.colaboradores.verificarCpf')->with('success', 'O CPF já está cadastrado para o colaborador: ' . $colaborador->nome);
    } else {
        return redirect()->route('admin.colaboradores.verificarCpf')->with('error', 'O CPF não está cadastrado. Você pode prosseguir com o cadastro.');
    }
}

}