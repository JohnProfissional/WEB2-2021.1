<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomedoproduto', 120);
            $table->double('icms', 7,4);
            $table->double('ipi', 7,4);
            $table->double('frete', 7,4);
            $table->double('valornafabrica', 7,4);
            $table->double('valordecompra', 7,4);
            $table->double('lucro', 7,4);
            $table->double('valorvenda', 7,4);
            $table->double('desconto', 7,4);
            $table->double('quantidade', 7,2);
            $table->date('datavencimento');
            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id')->references('id')->on('marca');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto');
    }
}
