<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Package;
use App\Models\Stay;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function resorts(){
      $resorts = Stay::where('stay_type', 'resort')->get();
        return view('frontend.resorts.resorts', compact('resorts'));
     }

 
     public function packages(){
         $packages = Package::all();
        return view('frontend.packages.packages', compact('packages'));
     }

     public function packagesdetails($id){
      $packages = Package::all();
      $packagesdetails = Package::findOrFail($id);
      return view('frontend.packages.packagesdetails',
      compact(
          'packagesdetails',
          'packages'
      )
  );
  }

     public function experience(){
      $experiences = Experience::all();
        return view('frontend.experience.experience', compact('experiences'));
     }

     public function experiencedetails($id){
      $experiences = Experience::all();
      $experiencesdetails = Experience::findOrFail($id);
      return view('frontend.experience.experiencedetails',
      compact(
          'experiencesdetails',
          'experiences'
      )
  );
  }

     public function about(){
        return view('frontend.about.about');
     }
     public function contact(){
        return view('frontend.contact.contact');
     }
}
