<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en')->nullable();
            $table->string('name_ru')->nullable();
            $table->string('name_az')->nullable();
            $table->string('text_en')->nullable();
            $table->string('text_ru')->nullable();
            $table->string('text_az')->nullable();
            $table->string('profession_en')->nullable();
            $table->string('profession_ru')->nullable();
            $table->string('profession_az')->nullable();
            $table->integer('image_id');
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
        Schema::dropIfExists('blogs');
    }
}
