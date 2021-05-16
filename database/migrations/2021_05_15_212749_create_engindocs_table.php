<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEngindocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engindocs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('visite_technique')->nullable();
            $table->string('engin')->nullable();
            $table->string('immatriculation')->nullable();
            $table->date('date_debut_val')->nullable();
            $table->date('date_fin_val')->nullable();
            $table->string('effectuer_par')->nullable();
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
        Schema::drop('engindocs');
    }
}
