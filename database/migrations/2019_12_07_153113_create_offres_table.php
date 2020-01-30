<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('intitule');
            $table->string('type');
            $table->string('dommaine');
            $table->string('dimplome');
            $table->string('nbr_annee_experiences');
             $table->string('competences');
            $table->string('renumeration');
            $table->string('duree');
            $table->string('date_debut_prevu');
             $table->string('ville');
             $table->string('statut')->nullable();
             $table->string('cartier');
             $table->string('emplacement');
            $table->text('description');
            $table->string('webaddresse');
            $table->integer('recruteur_id')->unsigned()->nullable();
            $table->foreign('recruteur_id')->references('id')->on('recruteurs')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
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
        Schema::dropIfExists('offres');
    }
}
