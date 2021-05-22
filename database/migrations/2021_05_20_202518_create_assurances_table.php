<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assurances', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('engin_name')->nullable();
            $table->integer('engin_id')->unsigned();
            $table->string('assureur')->nullable();
            $table->integer('montant')->nullable();
            $table->date('date_debut_val')->nullable();
            $table->date('date_fin_val')->nullable();
            $table->string('piece_jointe')->nullable();
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
        Schema::drop('assurances');
    }
}
