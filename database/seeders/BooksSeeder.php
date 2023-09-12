<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Books::create([
                'name' => $faker->sentence,
                'author' => $faker->name,
                'pubish_date' => $faker->date,
            ]);
        }
        
    }
}
