<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataMatriculaToMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasColumn('matriculas', 'data_matricula')) {
            Schema::table('matriculas', function (Blueprint $table) {
                $table->date('data_matricula')->default('2023-01-01'); // Adiciona a coluna data_matricula
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('matriculas', function (Blueprint $table) {
            $table->dropColumn('data_matricula');
        });
    }
}