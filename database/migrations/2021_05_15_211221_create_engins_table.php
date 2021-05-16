<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engins', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('type_engin')->nullable();
            $table->string('immatriculation')->nullable();
            $table->string('marque_serie')->nullable();
            $table->string('modele')->nullable();
            $table->string('numero_chassis')->nullable();
            $table->string('date_de_mise_en_circulation')->nullable();
            $table->string('carburant')->nullable();
            $table->string('couleur')->nullable();
            $table->string('conduit_par')->nullable();
            $table->string('Image')->nullable();
            $table->integer('entreprise_id')->unsigned();
            $table->foreign('entreprise_id')->references('id')->on('entreprises')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('engins');
    }
}
