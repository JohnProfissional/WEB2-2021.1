<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevolucoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devolucoes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('datadevolucao');
            $table->string('descricaodadevolucao', 120);
            $table->double('quantidadedevolvida', 7,2);
            $table->unsignedBigInteger('itensvendas_id');
            $table->foreign('itensvendas_id')->references('id')->on('itensvendas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devolucoes');
    }
}
