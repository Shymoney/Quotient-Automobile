<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned(); 
            $table->string('Firstname', 50);
            $table->string('Lastname', 50);
            $table->string('Email', 50)->unique();
            $table->string('Phonenumber', 50)->unique();
            $table->string('Address');
            $table->string('Gender');
            $table->string('Create_Password');
            $table->string('Confirm_Password');
            $table->rememberToken();
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
        Schema::drop('user');
    }
}
