<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('members_name');
            $table->string('courses_title')->comment('Course_title');
            $table->string('comment')->comment('Comment');
            $table->string('slug');
            $table->string('email')->nullable()->unique();
            $table->string('address')->nullable();
            $table->unsignedTinyInteger('stasus')->default(0)->comment();
            $table->string('membersimage')->comment('image file'); 




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
        Schema::dropIfExists('members');
    }
}
