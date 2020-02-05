<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('numero');
            $table->string('objet');
            $table->text('message');
            $table->string('email');
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
        Schema::dropIfExists('messages');
    }
}
