<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Stay;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $stays = Stay::where('stay_type', 'hotel')->get();
        return view('frontend.home.home',

        compact(
            'stays'
        )
    );
    }
}
