<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{
    public function up()
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');
        });

    }




    //These were causing issues, not sure why.
    public function down()
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropForeign(['subject_id']);
            $table->dropForeign(['venue_id']);
        });

    }
}