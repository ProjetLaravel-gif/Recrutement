<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvdiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvdivers', function (Blueprint $table) {

           $table->integer('diver_id')->unsigned()->index();
                      $table->foreign('diver_id')->references('id')->on('divers')->onDelete('cascade');

                      $table->integer('cv_id')->unsigned()->index();
                      $table->foreign('cv_id')->references('id')->on('cvs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cvdivers');
        
    }
}
