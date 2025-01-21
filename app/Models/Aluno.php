<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DateTime;
class Aluno extends Model
{
protected $fillable = ['nome', 'email', 'data_de_nascimento'];
/**
* Relacionamento com a tabela Matriculas.
*/
public function matriculas()
{
return $this->hasMany(Matricula::class);
}
/**
* Relacionamento muitos para muitos com a tabela Cursos através de Matriculas.
*/
public function cursos()
{
return $this->belongsToMany(Curso::class, 'matriculas');
}
/**
* Método auxiliar para calcular a idade do aluno.
*/
public function getIdade()
{
$dataDeNascimento = new DateTime($this->data_de_nascimento);
$dataAtual = new DateTime('today');
return $dataDeNascimento->diff($dataAtual)->y;
}
}