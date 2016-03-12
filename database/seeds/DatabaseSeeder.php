<?php

use Illuminate\Database\Seeder;

use App\Models\Item;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

    	for ($i = 1; $i < 100; $i++) {
    		Item::create([
    		    'name' => $faker->name,
    		    'description' => $faker->text(75)
    		]);
    	}
    }
}
