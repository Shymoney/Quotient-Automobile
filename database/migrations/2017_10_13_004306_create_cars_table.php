<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('car_id');
            $table->string('Car_Name');
            $table->string('Car_Model');
            $table->text('Car_Problem');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::create('cars', function( Blueprint $table){
            //here i crated the foreign key
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
        Schema::drop('cars');
        Schema::dropForeign(['user_id']);
    }
}
