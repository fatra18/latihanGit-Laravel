<?php

namespace Database\Seeders;

use DateTime;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        $faker =Factory::create('id_ID');
        for ($i=0; $i <100 ; $i++) { 
            DB::table('products')->insert([
                'name' => $faker->word,
                'price' => $faker->numberBetween(10000,100000),
                'production_date' =>$faker->dateTime('2020-05-18'),
                'expired' =>  $faker->date('2020-05-18','2022-07-29'),
                'type' => $faker->text($maxNbChars = 50),
                'description' => $faker->text($maxNbChars =200),
                'stock' => $faker->numberBetween(20,1000),
                'produser' => $faker->name,
                'address' => $faker->address,
                'postcode' => $faker->postcode,
                'status' =>$faker->boolean(),
            ]);
        }
    }
}
