<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmailToAlunosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->string('email'); // Add the email column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->dropColumn('email'); // Remove the email column
        });
    }
}