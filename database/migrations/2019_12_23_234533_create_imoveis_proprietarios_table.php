<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImoveisProprietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis_proprietarios', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('imovel_id');
            $table->foreign('imovel_id')->references('id')->on('imoveis');

            $table->unsignedBigInteger('proprietario_id');
            $table->foreign('proprietario_id')->references('id')->on('proprietarios');

            $table->boolean('responsavel');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imoveis_proprietarios');
    }
}
