<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;

class EmailController extends Controller
{
    public function sendWelcomeEmail(Request  $request )
    {



        $title = 'Welcome to the laracoding.com example email';
        $body = 'Thank you for participating!';
        Mail::to('firojhasanonfo@gmail.com')->send(new ContactMail($title, $body));
        return "Email sent successfully!";
    }
}