<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\StayDataTable;
use App\Http\Controllers\Controller;
use App\Models\Stay;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class StayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(StayDataTable $dataTable)
    {
        return $dataTable->render('admin.resorts.index');
    }
    // public function index(UsersDataTable )
    // {
    //     return $dataTable->render('users.index');
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.resorts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'gallery_images_link' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
    //         'name' => ['required'],
    //         'star_rating' => ['required'],
    //         'address' => ['required'],
    //     ]);

    //     $stay = new Stay();
    //     $galleryImages = []; 

    //     if ($request->hasFile('gallery_images_link')) {
    //         foreach ($request->file('gallery_images_link') as $file) {
    //             $path = $file->store('images', 'public');
    //             $galleryImages[] = $path; 
    //         }
    //     }

    //     dd($galleryImages);
    //     $stay->gallery_images_link = json_encode($galleryImages);
    //     $stay->name = $request->name;
    //     $stay->star_rating = $request->star_rating;
    //     $stay->address = $request->address;
      
    //     $stay->save();
    //     return redirect()->route('admin.stay.index');
    // }



    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'star_rating' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'country' => ['required'],
            'short_description' => ['required'],
            'overview_description' => ['required'],
            'accommodation_description' => ['required'],
            'spa_and_wellness_description' => ['required'],
            'activities_and_facilities_description' => ['required'],
            'status' => ['required', 'boolean'],
            'stay_type' => ['required'],
        ]);

        $stay = new Stay();
       
        $stay->name = $request->name;
        $stay->star_rating = $request->star_rating;
        $stay->address = $request->address;
        $stay->city = $request->city;
        $stay->state = $request->state;
        $stay->country = $request->country;
        $stay->short_description = $request->short_description;
        $stay->overview_description = $request->overview_description;
        $stay->accommodation_description = $request->accommodation_description;
        $stay->spa_and_wellness_description = $request->spa_and_wellness_description;
        $stay->activities_and_facilities_description = $request->activities_and_facilities_description;
        $stay->status = $request->status;
        $stay->stay_type = $request->stay_type;
        $stay->save();
        return redirect()->route('admin.stay.index');
    }

    // /**
    //  * Display the specified resource.
    //  */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stay = Stay::findOrFail($id);
        return view('admin.resorts.edit', compact('stay'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required'],
            'star_rating' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'country' => ['required'],
            'short_description' => ['required'],
            'overview_description' => ['required'],
            'accommodation_description' => ['required'],
            'spa_and_wellness_description' => ['required'],
            'activities_and_facilities_description' => ['required'],
            'status' => ['required', 'boolean'],
            'stay_type' => ['required'],
        ]);


        $stay = Stay::findOrFail($id);
        $stay->name = $request->name;
        $stay->star_rating = $request->star_rating;
        $stay->address = $request->address;
        $stay->city = $request->city;
        $stay->state = $request->state;
        $stay->country = $request->country;
        $stay->short_description = $request->short_description;
        $stay->overview_description = $request->overview_description;
        $stay->accommodation_description = $request->accommodation_description;
        $stay->spa_and_wellness_description = $request->spa_and_wellness_description;
        $stay->activities_and_facilities_description = $request->activities_and_facilities_description;
        $stay->status = $request->status;
        $stay->stay_type = $request->stay_type;
        $stay->save();
        return redirect()->route('admin.stay.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stay = Stay::findOrFail($id);
        $stay->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully']);
    }
}
