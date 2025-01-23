<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory; // Adicione esta linha

    protected $table = 'cursos'; // Nome da tabela no banco de dados
    protected $fillable = ['nome', 'descricao', 'duracao']; // Colunas que podem ser preenchidas em massa
}