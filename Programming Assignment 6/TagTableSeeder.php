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
		$stories= App\Story::get();
		foreach($stories as $story)
		{
		 	$tag_id = $tag_id = rand(1,count(App\Tag::get()));
		 	DB::table('story_tag')->insert([
		 	'story_id' => $story->id,
		 	'tag_id' =>   $tag_id,
		 	]);
		}


    }
}
