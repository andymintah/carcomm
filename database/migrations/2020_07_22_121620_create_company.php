<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->longText('address')->nullable();
            $table->string('contactno')->nullable();
            $table->string('imageurl')->nullable();

            $table->string('company_type')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('companies', function (Blueprint $table) {
          
            $table->foreign('user_id')->references('id')->on('users');
           // $table->foreign('company_type')->references('id')->on('company_type');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
