<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensentradaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itensentrada', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->double('precocompra', 7,4);
            $table->double('quantidade', 7,2);
            $table->string('unidade', 20);
            $table->double('ipi', 7,4);
            $table->double('frete', 7,4);
            $table->double('icms', 7,4);
            $table->unsignedBigInteger('entrada_id');
            $table->foreign('entrada_id')->references('id')->on('entrada');
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
        Schema::dropIfExists('itensentrada');
    }
}
