<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory; // Adicione esta linha

    protected $table = 'matriculas'; // Nome da tabela no banco de dados
    protected $fillable = ['aluno_id', 'curso_id', 'data_matricula']; // Colunas que podem ser preenchidas em massa
}