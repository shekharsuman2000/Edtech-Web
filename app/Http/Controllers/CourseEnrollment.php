<?php

/*namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseEnrollment extends Controller
{
    public function store(Request $request, Course $course)
    {
        $user = auth()->user();

        $user->courses()->attach($course);

        return redirect()->route('dashboard');
    }

    public function destroy(Request $request, Course $course)
    {
        $user = auth()->user();

        $user->courses()->detach($course);

        return redirect()->route('dashboard');
    }
*/