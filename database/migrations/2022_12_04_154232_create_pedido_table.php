<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->id();

            $table->integer('sabor_id');
            $table->integer('borda_id');
            $table->integer('massa_id');
            $table->integer('estado_id');
            $table->foreign('sabor_id')->references('id')->on('sabor');
            $table->foreign('borda_id')->references('id')->on('borda');
            $table->foreign('massa_id')->references('id')->on('massa');
            $table->foreign('massa_id')->references('id')->on('estado');
            $table->integer('preco');
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
        Schema::dropIfExists('pedido');
    }
};
