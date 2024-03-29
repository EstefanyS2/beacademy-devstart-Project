<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('duracao');
            $table->string('genero');
            $table->string('classificacao');
            $table->string('linguagem');
            $table->string('sinopse');
            $table->date('dtbirth')->nullable();
            $table->string('plataformas');
            $table->string('direcao');
            $table->string('premio');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmes');
    }
};
