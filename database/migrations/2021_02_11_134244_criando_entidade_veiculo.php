<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriandoEntidadeVeiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_veiculo', function (Blueprint $table) {
            $table->integer('idVeiculo')->unsigned();
            $table->char('placaVeiculo', 7);
            $table->string('chassiVeiculo');
            $table->string('corVeiculo', 50)->nullable();
            $table->string('nomeBeneficiario', 100);
            $table->char('cpfBeneficiario', 11)->unique();
            $table->enum('situacao', ['A', 'I'])->default('A')->comment('A => Ativo, I => Inativo');
            $table->timestamps();
            $table->primary('idVeiculo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_veiculo');
    }
}
