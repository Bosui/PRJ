<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKlientoParkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klientoParkas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('klientasID');
            $table->integer('markeID');
            $table->integer('modelisID');
            $table->string('valstNr');
            $table->string('darbinisTuris');
            $table->string('galia');
            $table->date('pagMetai');
            $table->string('vinNr');
            $table->integer('dNuolaida');
            $table->integer('pNuolaida');
            $table->string('pastaba');
            //$table->rememberToken();
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
        Schema::dropIfExists('klientoParkas');
    }
}
