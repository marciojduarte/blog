<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamePrecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exame__precos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('valor');
            $table->inti('convenio_id')->unsigned();
            $table->foreign('convenio_id')->references('id')->on('convenios')->onDelete('cascade');
            $table->inti('exame_id')->unsigned();
            $table->foreign('exame_id')->references('id')->on('exames')->onDelete('cascade');
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
        Schema::dropIfExists('exame__precos');
    }
}
