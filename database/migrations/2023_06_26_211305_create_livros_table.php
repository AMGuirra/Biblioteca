<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    public function up()
    {
        Schema::create('livro', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->foreignId('autor_id')->constrained('autor');
            $table->foreignId('categoria_id')->constrained('categoria');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('livro');
    }
}
