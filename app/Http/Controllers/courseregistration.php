<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Hash;
use Auth;
use App\Models\User;
class courseregistration extends Controller
{
    public function reg()
    {
    	return view('course_reg');
    }
    public function courseregister(Request $request)
    {
        
        $validateData = $request->validate([
                                            'name' => 'required|min:3', 
                                            'email' => 'required|string|max:30|email|unique:users', 
                                            'password' => 'required|string|min:6',
                                            'confirm_password' => 'required|string|min:6'
                                            ]);
    	$password=$request->password;
    	$confirm_password=$request->confirm_password;
        $login_password=$request->password;
        
    	if($confirm_password!=$password)
        {
    		$msg="Confirm Password doesn't match";
            return redirect()->back()->with('success',"password and confirm password doesn't match");
    	}
        else
        {
    		$password=Hash::make($password);
    		$data['name'] = $request->name;
    		$data['email'] = $request->email;
    		$data['email_verified_at'] = null;
    		$data['password']=$password;
            $checkUser=User::where('email',$data['email'])->count();
            $data['updated_at'] = date('Y-m-d H:i:s' , strtotime($request->updated_at));
            $data['created_at'] = date('Y-m-d H:i:s' , strtotime($request->created_at));

            if($checkUser>0)
            {
                return redirect()->back()->with('success','Email already exists');
            }
            else
            {
             	$user=User::create($data);
                //return $user;
                $credentials = ['email' => $user->email,'password' => $login_password];
                 if(Auth::attempt($credentials)==true)
                {
                    return redirect('/dashboard')->with('success', 'Your account has been successfully created!');

                //return redirect('/dashboard')->with('success', 'Your account has been successfully created!');
             	//return redirect()->back()->with('msg','User successfully registered');
             }
    	}
        }
    } 
}
