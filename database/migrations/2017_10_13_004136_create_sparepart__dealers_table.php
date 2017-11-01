<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateSparepartDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sparepart_dealers', function (Blueprint $table) {
            $table->increments('id')->integer();
            $table->integer('user_id')->unsigned();
            $table->string('Name');
            $table->string('Email', 50)->unique();
            $table->string('Address');
            $table->string('Phonenumber', 11)->unique();
            $table->string('Gender');
            $table->string('Location');
            $table->timestamps();
        });

        Schema::create('sparepart_dealers', function(Blueprint $table) {
            //here i refrenced the foreign keys
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
        Schema::drop('sparepart_dealers');
    }
}
