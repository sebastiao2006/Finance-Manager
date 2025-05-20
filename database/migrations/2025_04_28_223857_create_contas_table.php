<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContasTable extends Migration
{
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor', 15, 2);
            $table->string('instituicao');
            $table->string('descricao')->nullable();
            $table->string('tipo');
            $table->string('cor')->nullable();
            $table->boolean('incluir')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts'); // Corrigido aqui
    }
}