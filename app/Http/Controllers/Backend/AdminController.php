<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Package;
use App\Models\Stay;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard(){

$guest_house_count = Stay::where('stay_type', 'guest_house')->count();
$resort_count = Stay::where('stay_type', 'resort')->count();
$experiences_count = Experience::count();
$packages_count = Package::count();
$stay_count = Stay::count();

        return view('admin.dashboard', compact([
            'guest_house_count',
            'resort_count',
            'experiences_count',
            'packages_count',
            'stay_count',
            
        ]));
    }
    function login(){
        return view('admin.auth.login');
    }
}

