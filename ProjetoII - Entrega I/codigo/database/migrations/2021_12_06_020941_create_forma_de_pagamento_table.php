<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormaDePagamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forma_de_pagamento', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tipopagamento', 70);
            $table->double('numeroparcelas', 7,2);
            $table->date('dataparcela');
            $table->unsignedBigInteger('venda_id');
            $table->foreign('venda_id')->references('id')->on('venda');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forma_de_pagamento');
    }
}
