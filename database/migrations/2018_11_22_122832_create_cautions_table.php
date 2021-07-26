<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCautionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cautions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero');
            $table->date('dateajout');
            $table->decimal('montant', 10, 2);
            $table->string('banque1');
            $table->string('banque2');            
            $table->date('dateacheve');
            $table->string('fournisseur');
            $table->date('datealert1');
            $table->date('datealert2');
            $table->date('datealert3');
            $table->string('etat');
            $table->integer('type')->nullable()->unsigned();
            $table->foreign('type')->references('id')->on('ctypes');
            $table->integer('caution_id')->nullable()->unsigned();
            $table->foreign('caution_id')->references('id')->on('cautions');
            $table->integer('projet_id')->nullable()->unsigned();
            $table->foreign('projet_id')->references('idp')->on('projets');
            $table->integer('notification')->nullable();
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
        Schema::dropIfExists('cautions');
    }
}
