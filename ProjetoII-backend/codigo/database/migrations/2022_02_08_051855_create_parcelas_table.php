<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcelas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->double('numerodeparcelas', 7,2);
            $table->double('valorparcela', 7,4);
            $table->string('status', 50);
            $table->date('vencimento');
            $table->double('valortotaldaparcela', 7,4);
            $table->unsignedBigInteger('forma_de_pagamento_id');
            $table->foreign('forma_de_pagamento_id')->references('id')->on('formas_de_pagamentos');
            $table->unsignedBigInteger('pagamento_id');
            $table->foreign('pagamento_id')->references('id')->on('pagamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcelas');
    }
}
