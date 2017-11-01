<?php

use Illuminate\Database\Seeder;
use App\Car;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cars')->delete();
        Car::create([
        	'car_name'=>'Toyota',
            'car_model'=>'BY45x-PKL',
            'car_problem'=>'Engine malfunction',
            'user_id'=>12345

        ]);

    }
}
