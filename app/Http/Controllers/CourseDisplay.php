<?php

namespace App\Http\Controllers;
use App\Models\courses;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\CourseEnrollmentConfirmation;
use App\Models\Enroll;
class CourseDisplay extends Controller
{
    public function index()
    {
    	return view('course', compact('courses'));
    }

    public function show($course_id)
    {
        if(Auth::check())
        {
            
            $course = courses::findOrFail($course_id);
            $courses = Enroll::where('user_id',Auth::user()->id)->where('course_id',$course->courseid)->get();
            return view('course-details', compact('course','courses'));
        }
        else
        {
            $course = courses::findOrFail($course_id);
            return view('course-details', compact('course'));
        }
    }


    

    public function enroll(courses $course)
    {
        if (Auth::check()) 
        {
            $checkifEnroll=Enroll::where('user_id',Auth::user()->id)->where('course_id',$course->courseid)->count();
            if($checkifEnroll>0)
            {
                return redirect()->back()->with('success', 'You have already enrolled in ' . $course->name);
            }
            else
            {
                $enrollArray = ['course_id'=>$course->courseid, 'user_id' => Auth::user()->id ];
                Enroll::firstorcreate( $enrollArray); 
                //Mail::to($user->email)->send(new CourseEnrollmentConfirmation($user, $course)); 
                return redirect()->route('dashboard')->with('success', 'You have successfully enrolled in ' . $course->name); 
            }
        } 

        else 
        {
           return redirect('/user/login')->with('message', 'You need to login to view your profile');
        }
    }
    public function enrolledCourse()
    {
        if(Auth::check()==true)
        {

            $user_id=Auth::user()->id;
            $courses=Enroll::where('user_id',$user_id)->get();
            if(count($courses)>0){
                foreach( $courses as $enrolledCourse)
                {
                    $courseDetails[] =  courses::where('courseid',$enrolledCourse->course_id)->first();
                }
            }else{
                $courseDetails=[]; 
            }
           
                return view('enrolledCourse')->with(compact('courseDetails'));

        }
        else
        {
            return redirect()->back();
        }
    }
}
