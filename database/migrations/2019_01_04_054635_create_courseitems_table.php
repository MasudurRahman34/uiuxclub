<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courseitems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_name');
            $table->string('title')->comment('Course title');
            $table->string('description')->comment('Course description');
            $table->string('imagefile')->comment('image file');
            $table->string('slug');
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
        Schema::dropIfExists('courseitems');
    }
}
