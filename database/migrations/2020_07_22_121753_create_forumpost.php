<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumpost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forumpost', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('body')->nullable();
            $table->string('imageurl')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('forumpost', function (Blueprint $table) {
          
            $table->foreign('user_id')->references('id')->on('users');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forumpost');
    }
}
