<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursefilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coursefiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('courseitem_id')->unsigned()->comment('Course item id');
            $table->string('vediofile')->comment('vedio embeded link');
            $table->string('vedio_title')->comment('vedio title');
            $table->string('vedio_duration')->comment('vedio duration');
            $table->unsignedTinyInteger('stasus')->default(0)->comment('0=public');
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
        Schema::dropIfExists('coursefiles');
    }
}
