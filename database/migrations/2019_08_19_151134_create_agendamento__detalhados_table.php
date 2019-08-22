<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendamentoDetalhadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamento__detalhados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('agendamento_id')->unsigned();
            $table->foreign('agendamento_id')
                ->references('id')
                ->on('agendamentos')
                ->onDelete('cascade');
            $table->integer('convenio_id')->unsigned();
            $table->foreign('convenio_id')
                    ->references('id')
                    ->on('convenios');
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
        Schema::dropIfExists('agendamento__detalhados');
    }
}
