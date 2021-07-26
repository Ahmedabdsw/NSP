<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('bailleur');
            $table->string('mao');
            $table->string('moe');
            $table->date('datedebutpr');
            $table->date('datefinpr');
            $table->date('datedebut');
            $table->date('datefin');
            $table->string('responsable');
            $table->integer('duree');
            $table->string('tauxavance');
            $table->string('tauxdecaisse');
            $table->integer('etat');
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
        //
        Schema::dropIfExists('projets');
    }
}
