

@section('title', 'Adicionar Colaborador')

@section('content')
<div class="container-form">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="form-header">
        <h1><i class="fas fa-user-plus"></i> Adicionar Novo Colaborador</h1>
        <a href="{{ route('admin.colaboradores.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i> Voltar
        </a>
    </div>

    <form action="{{ route('admin.colaboradores.store') }}" method="POST" enctype="multipart/form-data" class="form-colaborador">
        @csrf

        <div class="form-group">
            <label for="nome" class="form-label">
                <i class="fas fa-user"></i> Nome Completo
            </label>
            <input type="text" name="nome" id="nome" class="form-input" required placeholder="Digite o nome completo">
            <span class="form-icon"><i class="fas fa-check-circle"></i></span>
        </div>

        <div class="form-group">
            <label for="setor" class="form-label">
                <i class="fas fa-building"></i> Setor
            </label>
            <input type="text" name="setor" id="setor" class="form-input" required placeholder="Digite o setor">
            <span class="form-icon"><i class="fas fa-check-circle"></i></span>
        </div>

        <div class="form-group">
            <label for="telefone" class="form-label">
                <i class="fas fa-phone"></i> Telefone
            </label>
            <input type="text" name="telefone" id="telefone" class="form-input" required placeholder="(00) 00000-0000">
            <span class="form-icon"><i class="fas fa-check-circle"></i></span>
        </div>

        <div class="form-group">
            <label for="email" class="form-label">
                <i class="fas fa-envelope"></i> Email
            </label>
            <input type="email" name="email" id="email" class="form-input" required placeholder="exemplo@empresa.com">
            <span class="form-icon"><i class="fas fa-check-circle"></i></span>
        </div>

        <div class="form-group file-upload">
            <label for="foto" class="form-label">
                <i class="fas fa-camera"></i> Foto do Colaborador
            </label>
            <div class="upload-area">
                <input type="file" name="foto" id="foto" accept="image/*">
                <label for="foto" class="upload-label">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <span>Clique para enviar ou arraste uma imagem</span>
                </label>
                <div class="preview-container" id="previewContainer"></div>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-submit">
                <i class="fas fa-save"></i> Salvar Colaborador
            </button>
        </div>
    </form>
</div>

<!-- Adicione isso no seu layout principal ou aqui no final -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
:root {
    --primary-color: #3498db;
    --secondary-color: #2c3e50;
    --success-color: #2ecc71;
    --danger-color: #e74c3c;
    --light-color: #ecf0f1;
    --dark-color: #34495e;
    --border-radius: 8px;
    --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    --transition: all 0.3s ease;
}

.container-form {
    max-width: 800px;
    margin: 30px auto;
    padding: 30px;
    background: white;
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
}

.form-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 1px solid #eee;
}

.form-header h1 {
    color: var(--secondary-color);
    margin: 0;
    font-size: 24px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.btn-back {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 15px;
    background-color: var(--light-color);
    color: var(--secondary-color);
    text-decoration: none;
    border-radius: var(--border-radius);
    transition: var(--transition);
}

.btn-back:hover {
    background-color: #ddd;
}

.form-colaborador {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-group {
    position: relative;
}

.form-label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: var(--secondary-color);
    display: flex;
    align-items: center;
    gap: 8px;
}

.form-input {
    width: 100%;
    padding: 12px 15px 12px 40px;
    border: 2px solid #ddd;
    border-radius: var(--border-radius);
    font-size: 16px;
    transition: var(--transition);
}

.form-input:focus {
    border-color: var(--primary-color);
    outline: none;
    box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
}

.form-icon {
    position: absolute;
    left: 15px;
    top: 40px;
    color: #bbb;
    transition: var(--transition);
}

.form-input:focus + .form-icon {
    color: var(--primary-color);
}

.file-upload {
    margin-top: 10px;
}

.upload-area {
    border: 2px dashed #ddd;
    border-radius: var(--border-radius);
    padding: 30px;
    text-align: center;
    transition: var(--transition);
    position: relative;
}

.upload-area:hover {
    border-color: var(--primary-color);
}

.upload-area input[type="file"] {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    opacity: 0;
    cursor: pointer;
}

.upload-label {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    color: #777;
    cursor: pointer;
}

.upload-label i {
    font-size: 40px;
    color: var(--primary-color);
}

.preview-container {
    margin-top: 15px;
    display: none;
}

.preview-container img {
    max-width: 150px;
    max-height: 150px;
    border-radius: var(--border-radius);
    border: 2px solid #eee;
}

.btn-submit {
    background-color: var(--primary-color);
    color: white;
    border: none;
    padding: 12px 25px;
    font-size: 16px;
    border-radius: var(--border-radius);
    cursor: pointer;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-top: 10px;
}

.btn-submit:hover {
    background-color: #2980b9;
    transform: translateY(-2px);
}

.alert-success {
    padding: 15px;
    background-color: #d4edda;
    color: #155724;
    border-radius: var(--border-radius);
    margin-bottom: 20px;
    border: 1px solid #c3e6cb;
    display: flex;
    align-items: center;
    gap: 10px;
}

/* Adicione este script para visualização da imagem selecionada */
<script>
document.getElementById('foto').addEventListener('change', function(e) {
    const previewContainer = document.getElementById('previewContainer');
    previewContainer.innerHTML = '';
    previewContainer.style.display = 'none';
    
    if (this.files && this.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            previewContainer.appendChild(img);
            previewContainer.style.display = 'block';
        }
        
        reader.readAsDataURL(this.files[0]);
    }
});
</script>
</style>