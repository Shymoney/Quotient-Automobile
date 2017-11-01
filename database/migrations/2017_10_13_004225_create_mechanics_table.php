<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMechanicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mechanics', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('mech_id')->increments();
            $table->integer('user_id')->unsigned();
            $table->integer('mechcat_id')->unsigned();
            $table->string('Name');
            $table->text('Address');
            $table->string('Email', 50)->unique();
            $table->string('Location');
            $table->string('Experience');
            $table->string('Phonenumber', 11)->unique();
            $table->timestamps();
        });

        Schema::create('mechanics', function(Blueprint $table){
            //here i referenced the foreign keys
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('mechcat_id')->references('mechcat_id')->on('mechanic_categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mechanics');
    }
}
