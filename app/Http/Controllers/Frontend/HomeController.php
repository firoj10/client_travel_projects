<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Package;
use App\Models\Stay;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $stays = Stay::where('stay_type', 'resort')->get();
        $experiences = Experience::all();
        $packages = Package::all();
        return view('frontend.home.home',
        compact(
            'stays',
            'experiences',
            'packages'
        )
    );
    }
    public function resortdetails($id){
        $mainresorts = Stay::where('stay_type', 'resort')->get();
        $stays = Stay::findOrFail($id);
        return view('frontend.resorts.resortdetails',
        compact(
            'stays',
            'mainresorts'
        )
    );
    }
}
