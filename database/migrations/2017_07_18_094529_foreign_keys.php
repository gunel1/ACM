<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
        });
        Schema::table('experts', function (Blueprint $table) {
            $table->foreign('image_id')->references('id')->on('images');
        });
        Schema::table('teams', function (Blueprint $table) {
            $table->foreign('image_id')->references('id')->on('images');
        });
        Schema::table('blogs', function (Blueprint $table) {
            $table->foreign('image_id')->references('id')->on('images');
        });
        Schema::table('events', function (Blueprint $table) {
            $table->foreign('image_id')->references('id')->on('images');
        });
        Schema::table('stories', function (Blueprint $table) {
            $table->foreign('image_id')->references('id')->on('images');
        });
        Schema::table('libraries', function (Blueprint $table) {
            $table->foreign('image_id')->references('id')->on('images');
        });
        Schema::table('projects', function (Blueprint $table) {
            $table->foreign('image_id')->references('id')->on('images');
        });
        Schema::table('mom_cans', function (Blueprint $table) {
            $table->foreign('image_id')->references('id')->on('images');
        });
        Schema::table('images', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('images')->onDelete('cascade');
        });
        Schema::table('massmedia', function (Blueprint $table) {
            $table->foreign('image_id')->references('id')->on('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
