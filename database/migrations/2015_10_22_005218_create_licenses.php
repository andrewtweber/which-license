<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicenses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('licenses', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->boolean('control')->nullable();
            $table->boolean('closed')->nullable();
            $table->boolean('royalties')->nullable();
            $table->boolean('reciprocity')->nullable();
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
        //
        Schema::drop('licenses');
    }
}
