@extends('layouts.admin')

@section('title', 'Lista de Colaboradores')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/colabo_index.css') }}">
    
    <div class="container">
        <h1>Lista de Colaboradores</h1>
        
        <a href="{{ route('admin.colaboradores.create') }}" class="btn btn-primary mb-3">
            Adicionar Novo Colaborador
        </a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Setor</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Foto</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($colaboradores as $colaborador)
                        <tr>
                            <td>{{ $colaborador->nome }}</td>
                            <td>{{ $colaborador->setor }}</td>
                            <td>{{ $colaborador->telefone }}</td>
                            <td>{{ $colaborador->email }}</td>
                            <td>
                                @if($colaborador->foto)
                                    <img src="{{ asset('storage/'.$colaborador->foto) }}" 
                                         alt="Foto do colaborador" 
                                         class="img-thumbnail">
                                @else
                                    Sem foto
                                @endif
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Editar</a>
                                <form action="#" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Nenhum colaborador cadastrado</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection