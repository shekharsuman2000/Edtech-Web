<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Enroll;
use App\Models\courses;

class Dashboard_main extends Controller
{
    public function dashboard()
    {
       $courses=Enroll::where('user_id',Auth::user()->id)->get();

       if(count($courses)>0)
       {
            foreach( $courses as $enrolledCourse)
            {
                $courseDetails[] =  courses::where('courseid',$enrolledCourse->course_id)->first();
            }
        }
        else
        {
            $courseDetails=[];
        }
           return view('dashboard')->with(compact('courseDetails'));
    }
    public function index()
    {
        $user = auth()->user();
        $courses = $user->courses;

        return view('dashboard', compact('courses'));
    }
}
