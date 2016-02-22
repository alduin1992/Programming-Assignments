<?php

use Illuminate\Database\Seeder;

class StoryTableSeeder extends Seeder
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
				DB::table('stories')->insert ([
				//,
				'title' => $faker->word,
				'story' => $faker->word,
				'published' => $faker->boolean($chanceOfGettingTrue = 50),
				]);
			}
		}
    }
}
