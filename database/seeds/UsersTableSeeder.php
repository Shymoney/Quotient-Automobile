<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //empty the users table
        \DB::table('users')->delete();

        //submit the info
        User::create([
        	'user_id'=>12345,
        	'Firstname'=>'jose',
        	'Lastname'=>'joseph',
        	'Email'=>'joseph@gmail.com',
        	'Phonenumber'=>'08039120227',
        	'Address'=>'No 456 crescent Gudawa',
        	'Gender'=>'male',
        	'Create_password'=>bcrypt('jude'),
        	'Confirm_password'=>bcrypt('jude')


        ]);
    }
}
