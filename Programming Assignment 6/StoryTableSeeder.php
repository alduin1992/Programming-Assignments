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
	
		$locations = App\Location::get();
		foreach($locations as $location)
		{
			for($i = 0; $i < $limit; $i++) 
			{
				DB::table('stories')->insert([
				
				'title' => $faker->text($maxNbChars = 10),
				'story' => $faker->text,
				'published' => $faker->boolean($chanceOfGettingTrue = 50),
				'location_id' => $location->id,
				]);
			}	
    	}	
    }
}
