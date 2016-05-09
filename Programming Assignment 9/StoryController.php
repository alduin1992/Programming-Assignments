<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Location;
use App\Story;

class StoryController extends Controller
{
    public function create()
    {
        $location=Location::all();
        return view('story.create',['locations' => $location ]);
    }
    public function api_stories()
    {
      $results = Story::all();
      return response()->json($results);
    }
    public function store(Request $request)
    {
        $story = new Story;
       // $story->location_id=$request->input('location_id');
        $story->title= Input::get('title');;
        $story->story= Input::get('story');;
        $story->published=Input::get('published');
        $story->save();
        
    }
}
