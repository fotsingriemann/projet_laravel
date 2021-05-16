<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('logo')->nullable();
            $table->string('nom_client')->nullable();
            $table->string('localisation')->nullable();
            $table->integer('telephone1')->nullable();
            $table->integer('telephone2')->nullable();
            $table->string('email')->nullable();
            $table->string('horaire_ouverture')->nullable();
            $table->string('jours_ouverture')->nullable();
            $table->string('nombre_engin')->nullable();
            $table->string('nature_engin')->nullable();
            $table->string('responsable')->nullable();
            $table->string('secteur_activite')->nullable();
            $table->string('sites')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entreprises');
    }
}
