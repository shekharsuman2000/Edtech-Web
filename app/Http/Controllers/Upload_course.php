<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Models\Files;
use App\Models\courses;
use Illuminate\Http\Request;

class Upload_course extends Controller
{
    public function upload()
    {
    	return view('uploadcourse');
    }
    /*public function create(Request $request)
    {
    	
    	$thumbnail = file('courseFile');
    	return $thumbnail;
    }
    //public function index()
    {
        $courses = Course::all();

        return view('student.index', compact('courses'));
    }*/

    public function create(Request $request)
    {
        $validateData = $request->validate([
                                            'courseFile' => 'required', 
                                            'courseName' => 'required|min:10', 
                                            'description' => 'required|min:130|max:1999',
                                            'courseThumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048'
                                            ]);


        $courseFileName = $request->file('courseFile')->getClientOriginalName();
        $thumbnailName = $request->file('courseThumbnail')->getClientOriginalName();
        $request->file('courseFile')->move(public_path('storage'), $courseFileName);
        $request->file('courseThumbnail')->move(public_path('thumbnail'), $thumbnailName);
        $name = $request->input('courseName');
        $description = $request->input('description');
        $courseFilePath=("storage/".$courseFileName);
        $thumbnailPath=("thumbnail/".$thumbnailName);
        $save = new courses;
        $save->name = $name;
        $save->description = $description;
        $save->file = $courseFileName;
        $save->filepath = $courseFilePath;
        $save->thumbnail = $thumbnailName;
        $save->thumbnailpath = $thumbnailPath;

        $save->save();

        return redirect()->back()->with('status', 'Course uploaded successfully.');
    }
    public function display()
    {

        $courses = courses::all();
        return view('course', compact('courses'));
    }
}


