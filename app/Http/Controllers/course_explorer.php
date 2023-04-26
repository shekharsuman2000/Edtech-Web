<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class course_explorer extends Controller
{
    public function course_explorer()
    {
    	return view('course_explorer');
    }
}
