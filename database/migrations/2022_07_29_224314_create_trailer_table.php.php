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
        Schema::create('trailer', function (Blueprint $table) {
        $table->id();
        $table->foreignId('filme_id')
            ->constrained('users')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
        $table->string('link');
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
        Schema::dropIfExists('trailer');
    }
};
