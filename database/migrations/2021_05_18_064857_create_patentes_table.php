<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patentes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('engin_name')->nullable();
            $table->integer('montant')->nullable();
            $table->date('date_debut_val')->nullable();
            $table->date('date_fin_val')->nullable();
            $table->string('delivrer_par')->nullable();
            $table->string('piece_jointe')->nullable();
            $table->integer('engin_id')->unsigned();
            $table->foreign('engin_id')->references('id')->on('engins')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patentes');
    }
}
