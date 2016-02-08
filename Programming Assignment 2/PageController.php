<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    //Methods for PageController as per assignment 2
    public function index()
    {
    	return "hello from index page";
    }
    public function greet($name)
    {
    	return "hello from ".$name;
    }
}
