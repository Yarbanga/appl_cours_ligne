<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('matiere_id')->unsigned();
            $table->bigInteger('classe_id')->unsigned();
            $table->string('chapitre');
            $table->string('titre');
            $table->string('intro')->nullable();
            $table->string('grandUn')->nullable();
            $table->string('grandUnPetitUn')->nullable();
            $table->string('grandUnPetitUnTexteUn')->nullable();
            $table->string('grandUnPetitDeux')->nullable();
            $table->string('grandUnPetitDeuxTexteDeux')->nullable();
            $table->string('grandUnPetitTrois')->nullable();
            $table->string('grandUnPetitTroisTexteTrois')->nullable();
            $table->string('grandDeux')->nullable();
            $table->string('grandDeuxPetitUn')->nullable();
            $table->string('grandDeuxPetitUnTexteUn')->nullable();
            $table->string('grandDeuxPetitDeux')->nullable();
            $table->string('grandDeuxPetitDeuxTexteDeux')->nullable();
            $table->string('grandDeuxPetitTrois')->nullable();
            $table->string('grandDeuxPetitTroisTexteTrois')->nullable();
            $table->string('grandTrois')->nullable();
            $table->string('grandTroisPetitUn')->nullable();
            $table->string('grandTroisPetitUnTexteUn')->nullable();
            $table->string('grandTroisPetitDeux')->nullable();
            $table->string('grandTroisPetitDeuxTexteDeux')->nullable();
            $table->string('grandTroisPetitTrois')->nullable();
            $table->string('grandTroisPetitTroisTexteTrois')->nullable();

            $table->foreign('matiere_id')->references('id')->on('matieres')
						->onDelete('restrict')
                        ->onUpdate('restrict');
            $table->foreign('classe_id')->references('id')->on('classes')
						->onDelete('restrict')
						->onUpdate('restrict');

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
        Schema::dropIfExists('lessons');
    }
}
