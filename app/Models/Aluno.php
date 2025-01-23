<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory; // Adicione esta linha

    protected $table = 'alunos'; // Nome da tabela no banco de dados
    protected $fillable = [
        'student_name',
        'student_age',
        'email', // Adicione a coluna email
    ];
}