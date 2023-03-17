<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{

    public function __construct() {
        $this->middleware('verified')->except('homepage', 'about', 'contact');
    }

    public function homepage() {
        return view('homepage');
    }
    
    public function about() {
        return view('about');
    }
    
    public function contact() {
        return view('contact');
    }
    
    public function contact_submit(Request $request) {
        
        
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        
        $user_data = compact('name', 'email', 'message');
        
        try {
            Mail::to($email)->send(new ContactMail($user_data));
        } catch(\Exception $e) {
            return redirect()->back()->with('emailError', "C'è stato un problema con l'invio della mail. Riprova più tardi.");
        }
        
        return redirect(route('contact'))->with('status', 'Email inviata! Grazie!');
    }
}