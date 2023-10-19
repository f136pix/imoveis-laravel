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
        Schema::create('listas', function (Blueprint $table) {
        $table->id();
        $table->string('titulo');
        $table->string('tags');
        $table->string('local');
        $table->string('empresa');
        $table->string('email');
        $table->string('website');
        $table->longText('descricao');
        $table->timestamps();
    });
        //
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listas');
    }
};
