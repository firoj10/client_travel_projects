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
     public function guesthouse(){
      $guest_house = Stay::where('stay_type', 'guest_house')->get();
        return view('frontend.guesthouse.guesthouse', compact('guest_house'));
     }

     public function guesthousedetails($id){
      $guest_house = Stay::where('stay_type', 'guest_house')->get();
      $guesthousedetails = Stay::findOrFail($id);
      return view('frontend.guesthouse.guesthousedetails',
      compact(
          'guesthousedetails',
          'guest_house'
      )
  );
  }

     public function about(){
        return view('frontend.about.about');
     }
     public function contact(){
        return view('frontend.contact.contact');
     }


     
     public function privacypage(){
        return view('frontend.privacypolicy.privacypolicy');
     }
     public function termpage(){
        return view('frontend.termsconditions.termsconditions');
     }
     public function disclaimerpage(){
        return view('frontend.disclaimer.disclaimer');
     }
     public function supportpage(){
        return view('frontend.support.support');
     }
     public function faqpage(){
        return view('frontend.faq.faq');
     }
}
