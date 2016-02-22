<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
		$limit = 20;
	
		for($i = 0; $i < $limit; $i++)
		{
			echo $faker->city;
			for($i = 0; $i < $limit; $i++) 
			{
				DB::table('tags')->insert ([
				//,
				'value' => $faker->word,]);
			}
		}
    }
}