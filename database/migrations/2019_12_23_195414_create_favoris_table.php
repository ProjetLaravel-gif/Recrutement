<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoris', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('candidat_id')->unsigned()->nullable();
            $table->foreign('candidat_id')->references('id')->on('candidats')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
                   
             $table->integer('offre_id')->unsigned()->nullable();
            $table->foreign('offre_id')->references('id')->on('offres')
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
        Schema::dropIfExists('favoris');
    }
}
