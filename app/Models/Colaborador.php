<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    protected $table = 'colaboradores'; // 👈 aqui forçamos o nome correto

    protected $fillable = [
        'nome',
        'setor',
        'telefone',
        'email',
        'foto',
    ];
}
