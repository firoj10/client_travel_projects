<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Stay;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $stays = Stay::where('stay_type', 'resort')->get();
        return view('frontend.home.home',
        compact(
            'stays'
        )
    );
    }
    public function resortdetails($id){
        $mainresorts = Stay::where('stay_type', 'resort')->get();
        $stays = Stay::findOrFail($id);
        return view('frontend.resortdetails.resortdetails',
        compact(
            'stays',
            'mainresorts'
        )
    );
    }
}
