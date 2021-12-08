<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensvendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itensvendas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->double('quantidadeitens', 7,2);
            $table->double('valor', 7,4);
            $table->double('desconto', 7,4);
            $table->unsignedBigInteger('venda_id');
            $table->foreign('venda_id')->references('id')->on('venda');
            $table->unsignedBigInteger('produto_id');
            $table->foreign('produto_id')->references('id')->on('produto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itensvendas');
    }
}
