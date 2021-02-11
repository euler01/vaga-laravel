<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriandoEntidadeServico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_servico', function (Blueprint $table) {
            $table->integer('idServico')->unsigned();
            $table->string('descricao', 100);
            $table->decimal('valor');
            $table->enum('situacao', ['A', 'I'])->default('A')->comment('A => Ativo, I => Inativo');
            $table->timestamps();
            $table->primary('idServico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_servico');
    }
}
