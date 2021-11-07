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
            $table->double('precocompra', 7,2);
            $table->double('quantidade', 7,2);
            $table->char('unidade', 2);
            $table->double('ipi', 7,2);
            $table->double('frete', 7,2);
            $table->double('icms', 7,2);
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
