<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriandoEntidadePrestador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_prestador', function (Blueprint $table) {
            $table->integer('idPrestador')->unsigned();
            $table->string('nome', 100);
            $table->char('documento', 14)->unique();
            $table->enum('situacao', ['A', 'I'])->default('A')->comment('A => Ativo, I => Inativo');
            $table->timestamps();
            $table->primary('idPrestador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_prestador');
    }
}
