<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function dashboard()
    {
    	return view('dashboard');
    }

    public function index()
    {
        $user = auth()->user();
        $courses = $user->courses;

        return view('dashboard', compact('courses'));
    }
}
