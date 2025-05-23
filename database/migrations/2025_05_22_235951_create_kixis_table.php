<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKixisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kixis', function (Blueprint $table) {
    $table->id();
    $table->string('finalidade');
    $table->unsignedBigInteger('valor');
    $table->unsignedInteger('prazo');
    $table->unsignedBigInteger('mensalidade');
    $table->unsignedInteger('participantes');
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
        Schema::dropIfExists('kixis');
    }
}
