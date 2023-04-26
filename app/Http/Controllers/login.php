<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class login extends Controller
{
    public function login()
    {
    	return view('loginform');
    }

    public function auth(Request $request)
    {
        $credentials = ['email' => $request->email,'password' => $request->password];
        
        if(Auth::attempt($credentials)==true)
        {
         return redirect('/');
        }
        else
        {
            /*$msg="Your email id or password is wrong!!!";
            return view('loginform')->with(compact('msg'));*/
            return redirect()->back()->with('success', "Your email id or password is incorrect!!!");
        }
    }
    public function logout(Request $request)
    {
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        Auth::logout();
        return redirect()->route('user.login');
        return view('loginform');
    }
}
