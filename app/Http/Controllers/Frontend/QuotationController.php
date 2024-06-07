<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\Quotation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class QuotationController extends Controller
{
public function store(Request $request){
    $request->validate([
        'date' => 'required',
        'no_off_nights' => 'required|integer|min:1|max:100',
        'no_off_adults' => 'required|integer|min:1|max:100',
        'no_off_kids' => 'nullable|integer|min:0|max:100',
        'interested_in' => 'required|string',
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone_number' => 'required|string|max:255',
        'description' => 'nullable|string', 
    ]);

     $date = $request->date;
     $no_off_nights = $request->no_off_nights;
     $no_off_adults = $request->no_off_adults;
     $no_off_kids = $request->no_off_kids;
     $interested_in = $request->interested_in;
     $name = $request->name;
     $email = $request->email;
     $phone_number = $request->phone_number;
     $description = $request->description;
        $data = $request->all();
        $data['date'] = Carbon::createFromFormat('m/d/Y', $request->date)->format('Y-m-d');
        Quotation::create($data);
        $title = 'Welcome to the Quotation';
        $body = 'Quotation List';
        Mail::to('firojhasanonfo@gmail.com')->send(new WelcomeMail($title, $body, $date, $no_off_nights,  $no_off_adults, $no_off_kids, $interested_in, $name,$email, $phone_number, $description));

        

    return redirect()->back()->with('success', 'Quotation submitted successfully.');
}
}
