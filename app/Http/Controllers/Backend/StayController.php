<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\StayDataTable;
use App\Http\Controllers\Controller;
use App\Models\Stay;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use File;
class StayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(StayDataTable $dataTable)
    {
        return $dataTable->render('admin.resorts.index');
    }

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
    public function store(Request $request)
    {
        $request->validate([
            'thumbnail_image_link'=> ['required', 'max:2028', 'image'],
            'gallery_images_link'=> ['required', 'max:2028'],
            'name' => ['required'],
            'star_rating' => ['required'],
            'address' => ['required'],
           
            'country' => ['required'],
            'short_description' => ['required','array'],
            'short_description.*' => ['required','string','max:255'],
            'overview_description' => ['required'],
            'accommodation_description' => ['required'],
            'spa_and_wellness_description' => ['required'],
            'activities_and_facilities_description' => ['required'],
            'status' => ['required', 'boolean'],
            'stay_type' => ['required'],
        ]);

        // Handle the thumbnail image
    $thumbnailName = time() . '_' . $request->thumbnail_image_link->getClientOriginalName();
    $request->thumbnail_image_link->move(public_path('thumbnails'), $thumbnailName);
    $thumbnailPath = 'thumbnails/' . $thumbnailName;

        $galleryImages = [];
        foreach ($request->file('gallery_images_link') as $image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('gallery'), $imageName);
            $galleryImages[] = $imageName;
        }
        // $request->image->move(public_path('images'), $imageName);
        $inputs = $request->short_description;

     
            $jsonInputs = json_encode($inputs);
     
            $stay = new Stay();
            $stay->thumbnail_image_link =$thumbnailPath;
            $stay->gallery_images_link = json_encode($galleryImages);
            $stay->name = $request->name;
            $stay->star_rating = $request->star_rating;
            $stay->address = $request->address;
            $stay->city = $request->city;
            $stay->state = $request->state;
            $stay->country = $request->country;
            $stay->short_description =  $jsonInputs;
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
        $stay = Stay::findOrFail($id);
        return view('admin.resorts.show',compact('stay'));
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

        if ($request->hasFile('thumbnail_image_link')) {
            // Get the old image path
            $oldThumbnailPath = public_path($stay->thumbnail_image_link);
    
            // Upload the new thumbnail image
            $thumbnailName = time() . '_' . $request->thumbnail_image_link->getClientOriginalName();
            $request->thumbnail_image_link->move(public_path('thumbnails'), $thumbnailName);
            $stay->thumbnail_image_link  = 'thumbnails/' . $thumbnailName;
    
            // Delete the old thumbnail image if it exists
            if (file_exists($oldThumbnailPath)) {
                unlink($oldThumbnailPath);
            }
    
           
        }

        if ($request->hasFile('gallery_images_link')) {
            // Get the old gallery images paths
            $oldGalleryImages = json_decode($stay->gallery_images_link, true);
    
            // Upload the new gallery images
            $galleryImages = [];
            foreach ($request->file('gallery_images_link') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('gallery'), $imageName);
                $galleryImages[] = $imageName;
            }
    
            // Delete the old gallery images if they exist
            if ($oldGalleryImages) {
                foreach ($oldGalleryImages as $oldImage) {
                    $oldImagePath = public_path('gallery/' . $oldImage);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
            }
    
            // Update the model with the new gallery images paths
            $stay->gallery_images_link = json_encode($galleryImages);
        }
       
        // $stay->short_description = json_encode($validatedData['short_description']);

        $inputs = $request->short_description;

     
        $jsonInputs = json_encode($inputs);

        $stay->name = $request->name;
        $stay->star_rating = $request->star_rating;
        $stay->address = $request->address;
        $stay->city = $request->city;
        $stay->state = $request->state;
        $stay->country = $request->country;
        $stay->short_description =  $jsonInputs;
        $stay->overview_description = $request->overview_description;
        $stay->accommodation_description = $request->accommodation_description;
        $stay->spa_and_wellness_description = $request->spa_and_wellness_description;
        $stay->activities_and_facilities_description = $request->activities_and_facilities_description;
        $stay->status = $request->status;
        $stay->stay_type = $request->stay_type;
        $stay->save();
        return redirect()->route('admin.stay.index')->with('success', 'Stay Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stay = Stay::findOrFail($id);
          // Delete the thumbnail image if it exists
    if ($stay->thumbnail_image_link) {
        $thumbnailPath = public_path($stay->thumbnail_image_link);
        if (file_exists($thumbnailPath)) {
            unlink($thumbnailPath);
        }
    }

    // Delete the gallery images if they exist
    if ($stay->gallery_images_link) {
        $galleryImages = json_decode($stay->gallery_images_link, true);
        foreach ($galleryImages as $image) {
            $imagePath = public_path('gallery/' . $image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    }
        $stay->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully']);
    }
}
