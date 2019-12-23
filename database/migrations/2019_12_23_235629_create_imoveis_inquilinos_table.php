<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImoveisInquilinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis_inquilinos', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('imovel_id');
            $table->foreign('imovel_id')->references('id')->on('imoveis');

            $table->unsignedBigInteger('inquilino_id');
            $table->foreign('inquilino_id')->references('id')->on('inquilinos');

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
        Schema::dropIfExists('imoveis_inquilinos');
    }
}
