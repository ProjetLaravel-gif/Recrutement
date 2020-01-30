<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('message');
            $table->string('cv')->default('default.jpg');
            $table->integer('offres_id')->unsigned()->nullable();
            $table->foreign('offres_id')->references('id')->on('offres')
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
        Schema::dropIfExists('postules');
    }
}
