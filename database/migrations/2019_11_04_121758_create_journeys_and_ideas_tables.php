<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJourneysAndIdeasTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('journeys', function (Blueprint $table) {
//            $table->increments('id');
//            $table->integer('author_id')->unsigned();
//            $table->string('title');
//            $table->string('description')->nullable();
//            $table->string('publish_status');
//            $table->string('type');
//            $table->timestamps();
//        });
//
//        Schema::table('journeys', function(Blueprint $table) {
//            $table->foreign('author_id')->references('id')->on('users');
//        });
//
//        Schema::create('ideas', function(Blueprint $table) {
//            $table->increments('id');
//            $table->integer('author_id')->unsigned();
//            $table->string('title');
//            $table->string('description')->nullable();
//            $table->string('solution');
//            $table->timestamps();
//        });
//
//        Schema::table('ideas', function(Blueprint $table) {
//            $table->foreign('author_id')->references('id')->on('users');
//        });

        Schema::create('idea_journey', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('journey_id')->unsigned();
            $table->integer('idea_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('idea_journey', function(Blueprint $table) {
            $table->foreign('journey_id')->references('id')->on('journeys');
            $table->foreign('idea_id')->references('id')->on('ideas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journeys');
        Schema::dropIfExists('ideas');
        Schema::dropIfExists('journey_idea');
    }
}
