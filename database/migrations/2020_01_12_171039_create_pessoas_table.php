<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nome')->comment('Nome completo, obrigatório');
            $table->string('email')->unique()->nullable()->comment('E-mail, único e opcional');
            $table->date('data_nasc')->nullable()->comment('Data de nascimento, opcional');
            $table->enum('estado_civil', array_keys(\App\Models\Pessoa::ESTADO_CIVIL))
                ->comment('Estado Civil, obrigatório');
            $table->char('sexo', 1)->nullable(); // m ou f

            $table->string('cpf', 11)->unique()->comment('CPF, único e obrigatório');
            $table->integer('rg')->unique()->comment('RG, único e obrigatório');
            $table->string('orgao_rg')->comment('Órgão emissor do RG, obrigatório');

            $table->string('telefone')->nullable()->comment('Telefone sem máscara, opcional');
            $table->string('telefone_sec')->nullable()->comment('Telefone para contato sem máscara, opcional');

            $table->unsignedBigInteger('endereco_id')->nullable()->unique()
                ->comment('Relacionamento com tabela de endereços, opcional');
            $table->foreign('endereco_id')->references('id')->on('enderecos');

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
        Schema::dropIfExists('pessoas');
    }
}
