<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postuler', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('message');
            $table->string('cv')->default('default.jpg');
            $table->integer('recruteur_id')->unsigned()->nullable();
            $table->foreign('recruteur_id')->references('id')->on('recruteurs')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');

            $table->integer('candidat_id')->unsigned()->nullable();
            $table->foreign('candidat_id')->references('id')->on('candidats')
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
        Schema::dropIfExists('postuler');
    }
}
