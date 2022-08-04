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
            $table->string('name', 100);
            $table->string('duracao', 4);
            $table->string('genero', 100);
            $table->string('classificacao', 2);
            $table->string('linguagem', 100);
            $table->string('sinopse', 100);
            $table->date('dtbirth')->nullable();
            $table->string('plataformas');
            $table->string('direcao', 100);
            $table->string('premio', 100);
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
