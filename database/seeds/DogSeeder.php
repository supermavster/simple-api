<?php

use App\Dog;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,5) as $index) {
          Dog::create([
              'name' => $faker->catchPhrase,
              'years' => $faker->year
          ]);
        }
  
    }
}
