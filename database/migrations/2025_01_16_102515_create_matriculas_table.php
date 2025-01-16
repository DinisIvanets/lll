<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id('enrollment_id'); // Chave primária
            $table->unsignedBigInteger('course_id'); // FK para cursos
            $table->unsignedBigInteger('student_id'); // FK para alunos
            $table->timestamps(); // Campos de criação e atualização

            // Definir relações (chaves estrangeiras)
            $table->foreign('course_id')->references('course_id')->on('cursos')->onDelete('cascade');
            $table->foreign('student_id')->references('student_id')->on('alunos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};
