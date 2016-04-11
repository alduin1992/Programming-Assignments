<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Location;
use App\Story;

class StoryController extends Controller
{
    //
    public function index()
    {
	$stories = Story::all();
	return view('story.story' ,['stories' => $stories]);
    }
    public function create()
    {
        $location=Location::all();
        return view('story.create',['locations' => $location ]);
    }
    public function store(Request $request)
    {
        $story = new Story;
        $story->location_id=$request->input('location_id');
        $story->title=$request->input('title');
        $story->story=$request->input('story');
        $story->published=$request->input('published');
        $story->save();
        
    }
}
