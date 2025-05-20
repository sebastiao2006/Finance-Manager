<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDespesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::create('despesas', function (Blueprint $table) {
        $table->id();
        $table->foreignId('account_id')->constrained('accounts')->onDelete('cascade');
        $table->decimal('valor', 15, 2);
        $table->string('descricao')->nullable();
        $table->date('data')->nullable();
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
        Schema::dropIfExists('despesas');
    }
}
