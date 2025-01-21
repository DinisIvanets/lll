<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['nome', 'descricao', 'duracao'];

    /**
     * Relacionamento com a tabela Matriculas.
     */
    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }

    /**
     * Relacionamento muitos para muitos com a tabela Alunos através de Matriculas.
     */
    public function alunos()
    {
        return $this->belongsToMany(Aluno::class, 'matriculas');
    }
}   