<?php

namespace App\Http\Controllers;
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



  public function processarVerificacaoCpf(Request $request)
  {
      // Remove todos os caracteres não numéricos
      $cpfLimpo = preg_replace('/[^0-9]/', '', $request->input('cpf'));
  
      // Reaplica o formato para comparar corretamente com o banco
      $cpfFormatado = substr($cpfLimpo, 0, 3) . '.' . substr($cpfLimpo, 3, 3) . '.' . substr($cpfLimpo, 6, 3) . '-' . substr($cpfLimpo, 9, 2);
  
      $colaborador = Colaborador::where('cpf', $cpfFormatado)->first();
  
      if ($colaborador) {
          return response()->json(['error' => 'Este CPF já está cadastrado.']);
      }
  
      return response()->json(['success' => 'CPF disponível para cadastro.']);
  }
 

}