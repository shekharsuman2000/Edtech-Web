<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\courses;
use App\Models\Admin;
use App\Models\Enroll;
use Illuminate\Http\Request;
use Auth;
use Hash;


class AdminController extends Controller
{
    public function admin_view()
    {
        return view('adminlogin');
    }
    public function admin_registration()
    {
        return view('admin-register');
    }

    public function admin_registration_(Request $request)
    {
        //return $request;
        $password=$request->pass;
        $login_password=$request->pass;
        $password=Hash::make($password);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['email_verified_at'] = null;
        $data['password']=$password;

        $checkAdmin=Admin::where('email',$data['email'])->count();
        $data['updated_at'] = date('Y-m-d H:i:s' , strtotime($request->updated_at));
        $data['created_at'] = date('Y-m-d H:i:s' , strtotime($request->created_at));

        if($checkAdmin>0)
        {
            return redirect()->back()->with('success','Email already exists');
        }
        else
        {
            $admin=Admin::create($data);
            //return $admin;
            $credentials = ['email' => $admin->email,'password' => $login_password];
            return redirect('/admin')->with('success', 'Admin is registered successfully. Please login!!!');
        // if(Auth::attempt($credentials)==true)
        // {
                
        //     return redirect('/dashboard')->with('success', 'Your account has been successfully created!');

        //     //return redirect('/dashboard')->with('success', 'Your account has been successfully created!');
        //     //return redirect()->back()->with('msg','User successfully registered');
        // }
        }
    } 
    public function admin_login_(Request $request)
    {
        $courses = courses::all();
        $users = User::all();
        $credentials = ['email'=>$request->email, 'password'=>$request->password];
        if (Auth::guard('admin')->attempt($credentials)) 
        {
            return view('admin')->with(compact('courses','users'));
        }
        else
        {
            return redirect()->back()->with('success', "Admin's email or password is incorrect!!!");
        }
    }
    public function admin_logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin');
    }

    public function admin_dashboard()
    {
        $courses = courses::all();
        $users = User::all();
        return view('admin', compact('courses','users'));
    }
    public function display()
    {
        $users = User::all();
        return view('student-display', compact('users'));
    }
    public function destroy($id)
    {
        $course = courses::findOrFail($id);
        
        $course->delete();
        return redirect()->route('displaycourses')->with('status', 'Course deleted successfully!');

        /*if (confirm("Are you sure you want to delete this course?")) 
        {
            $course->delete();
            return redirect()->route('courses.index')->with('success', 'Course deleted successfully!');
        } 
        else 
        {
            return back()->with('warning', 'Course deletion canceled.');
        }*/
    }

    public function userdestroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('students')->with('status', 'User deleted successfully!');
        /*if (confirm("Are you sure you want to delete this user?")) {
            $user->delete();
            return redirect()->route('users')->with('success', 'User deleted successfully!');
        } else {
            return back()->with('warning', 'User deletion canceled.');
        }*/
    }  

    public function edit($id)
    {
        $course = courses::findOrFail($id);

        return view('course-edit', compact('course'));
    }

    /*public function update(Request $request, $id)
    {
        $course = courses::findOrFail($id);

        $course->update($request->all());

        return redirect()->route('displaycourses')->with('success', 'Course updated successfully!');
    }*/
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'courseName' => 'required|string|max:30',
            'description' => 'required|string|min:130'
        ]);

        $post = courses::find($id); // find the course by ID
        
        // update the post data
        $post->name = $request->input('courseName');
        $post->description = $request->input('description');
         
        // handle image and video uploads
       /* if ($request->hasFile('image')) {
            $image = $request->file('image');
            // code to store and update the image goes here
            $post->image = $image->store('public/images');
        }
        
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            // code to store and update the video goes here
            $post->video = $video->store('public/videos');
        }*/
        
        $post->save(); 
        
        return redirect()->back()->with('status', 'Course updated successfully!');
    }

    public function student_dashboard($id)
    {
        /*if(Auth::guard('admin'))
        {
            $student_id = User::findOrFail($id);
            $student = Enroll::where('user_id',$student_id)->get();
            return view('dashboard', compact('student'));
            //return redirect()->Route('/dashboard', compact(student));
        }*/

        if(Auth::guard('admin'))
        {

            $user_id = User::findOrFail($id);
            $student = User::where('id', $user_id)->first();
            $courses = Enroll::where('user_id',$user_id)->get();
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
           
            return view('dashboard')->with(compact('courseDetails','student', 'user_id'));

        }
        else
        {
            return redirect()->back();
        }
    }
    public function edit_student($id)
    {
        $user = User::findOrFail($id);

        return view('edit-student', compact('user'));
    }
    public function student_update(Request $request,$id)
    {
        $data = $request->validate([
            'name' => 'required|min:3', 
            'email' => 'required|string|email|max:255', 
        ]);

        $student = User::find($id); // find the student by ID
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->save(); 
        
        return redirect()->back()->with('status', 'Student details updated successfully!');
    }

}
