<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnCandidatId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cvs', function (Blueprint $table) {
            $table->integer('candidat_id')->unsigned()->after('id');
            $table->foreign('candidat_id')->references('id')->on('candidats'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cvs', function (Blueprint $table) {
           $table->dropForeign(['candidat_id']);
           $table->dropColumn('candidat_id');
        });
    }
}
