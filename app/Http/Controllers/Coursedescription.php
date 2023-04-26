<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class Coursedescription extends Controller
{
    public function description()
    {
    	return Auth::user()->id;
    	return view('course_description');
    }
}
