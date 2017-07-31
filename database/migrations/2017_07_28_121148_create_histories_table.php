<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('text_en');
            $table->string('text_ru');
            $table->string('text_az');
            $table->string('title_en');
            $table->string('title_ru');
            $table->string('title_az');
            $table->string('subtitle_en');
            $table->string('subtitle_ru');
            $table->string('subtitle_az');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
}
