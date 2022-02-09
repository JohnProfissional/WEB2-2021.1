<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos_clientes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('rua', 70);
            $table->double('numero', 7,2);
            $table->string('bairro', 80);
            $table->string('cidade', 80);
            $table->char('uf', 2);           
            $table->double('cep', 7,2);
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos_clientes');
    }
}
