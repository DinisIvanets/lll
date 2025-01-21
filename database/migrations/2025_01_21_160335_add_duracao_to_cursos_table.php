<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDuracaoToCursosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('cursos', function (Blueprint $table) {
            $table->integer('duracao'); // Add the duracao column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('cursos', function (Blueprint $table) {
            $table->dropColumn('duracao'); // Remove the duracao column
        });
    }
}