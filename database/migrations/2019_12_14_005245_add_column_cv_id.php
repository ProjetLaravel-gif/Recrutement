<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnCvId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('formations', function (Blueprint $table) {
           $table->integer('cv_id')->unsigned()->after('id');
           $table->foreign('cv_id')->references('id')->on('cvs'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('formations', function (Blueprint $table) {
           $table->dropForeign(['cv_id']);
           $table->dropColumn('cv_id');
        });
    }
}
