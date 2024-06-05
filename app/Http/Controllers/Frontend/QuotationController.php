<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Quotation;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        $data = $request->all();
        $data['date'] = Carbon::createFromFormat('m/d/Y', $request->date)->format('Y-m-d');
        Quotation::create($data);
    return redirect()->back()->with('success', 'Quotation submitted successfully.');
}
}
