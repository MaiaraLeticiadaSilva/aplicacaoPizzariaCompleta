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
        Schema::table('pedido', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sabor_id');
            $table->unsignedBigInteger('borda_id');
            $table->unsignedBigInteger('massa_id');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('sabor_id')->references('id')->on('sabor');
            $table->foreign('borda_id')->references('id')->on('borda');
            $table->foreign('massa_id')->references('id')->on('massa');
            $table->foreign('estado_id')->references('id')->on('estado');
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
