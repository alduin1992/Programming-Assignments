<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StoryTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testForTitle()
    {
        // Assert that each user in the list has at least an id, name and email attribute.
        $this->get('/api/stories')
             ->seeJsonStructure([
                 '*' => [
                     'title'
                 ]
             ]);
    }
}
