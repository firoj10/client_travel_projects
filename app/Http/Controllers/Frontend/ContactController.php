<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

public function store(Request $request){
    $request->validate([
        'frist_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'phone_number'=> 'required',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);
     $frist_name = $request->frist_name;
     $last_name = $request->last_name;
     $email = $request->email;
     $phone_number = $request->phone_number;
     $message = $request->message;
        $title = 'Welcome to the Quotation';
        $body = 'Quotation List';
        Mail::to('firojhasanonfo@gmail.com')->send(new ContactMail($title, $body, $frist_name, $last_name,$email, $phone_number, $message));

        

    return redirect()->back()->with('success', 'Quotation submitted successfully.');
}
}


