<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WeatherController extends Controller
{
    //Weather method as per assignment 2
    public function getWeather($location)
    {
    	return "hello from ".$location;
    }
}
