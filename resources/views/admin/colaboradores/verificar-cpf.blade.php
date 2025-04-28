@extends('layouts.app')

@section('title', 'Verificar CPF')

@section('content')
<div class="container-form">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="form-header">
        <h1><i class="fas fa-search"></i> Verificar CPF</h1>
        <a href="{{ route('admin.colaboradores.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i> Voltar
        </a>
    </div>

    <form action="{{ route('admin.colaboradores.processarVerificacaoCpf') }}" method="POST" class="form-colaborador">
        @csrf

        <div class="form-group">
            <label for="cpf" class="form-label">
                <i class="fas fa-id-card"></i> CPF
            </label>
            <input type="text" name="cpf" id="cpf" class="form-input" required placeholder="Digite o CPF (000.000.000-00)">
            <span class="form-icon"><i class="fas fa-check-circle"></i></span>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-submit">
                <i class="fas fa-search"></i> Verificar CPF
            </button>
        </div>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
    $(document).ready(function() {
        $('#cpf').mask('000.000.000-00');
    });
</script>
@endsection