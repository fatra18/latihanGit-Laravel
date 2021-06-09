<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers');
        $faker =Factory::create('id_ID');
        $gender = ['L', 'P'];
        $religion = ['Islam','Kristen','Katolik','Buddha','Hindu','Atheis'];
        for ($i=0; $i < 100; $i++) { 
            DB::table('teachers')->insert([
            'name' => $faker->name,
            'age' => $faker->numberBetween(17,30),
            'address' => $faker->address,
            'gender' => $faker->randomElement($gender),
            'religion' => $faker->randomElement($religion), 
            'phone' => $faker->phoneNumber,
            'email' => $faker->email,    
            'birth_date' => $faker->dateTimeBetween('-30 years','-20 years'),
            'description' => $faker->text($maxNbChars = 200)
            
        
            ]);
        }
    }
}
