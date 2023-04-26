<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
class Contactus extends Controller
{
    public function contact()
    {
    	return view('contact');
    }

    public function displaymessage(Request $request)
    {

    	$validateData = $request->validate([
                                            'name' => 'required', 
                                            'email' => 'required', 
                                            'message' => 'required',

                                            ]);

    	$name = $request->input('name');
    	$email = $request->input('email');
    	$message = $request->input('message');

    	$save = new Contacts;

    	$save->name = $name;
    	$save->email = $email;
    	$save->message = $message;

    	$save->save();
    	return redirect()->back()->with('status', 'Message sent successfully!!!');
    }
    
    public function display()
    {

        $messages = Contacts::all();
        return view('message-view', compact('messages'));
    }
    
}
