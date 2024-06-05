<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\ExperienceDataTable;
use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Package;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ExperienceDataTable $dataTable)
    {
        return $dataTable->render('admin.experiences.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'thumbnail_image_link' => ['required', 'image'],
            'gallery_images_link' => ['required',],
            'title' => ['required'],
            'sub_title' => ['required'],
            'short_description' => ['required', 'array'],
            'short_description.*' => ['required', 'string', 'max:255'],
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

        $inputs = $request->short_description;


        $jsonInputs = json_encode($inputs);

        $experience = new Experience();

        $experience->thumbnail_image_link = $thumbnailPath;
        $experience->gallery_images_link = json_encode($galleryImages);
        $experience->title = $request->title;
        $experience->sub_title = $request->title;
        $experience->short_description = $jsonInputs;



        $experience->save();
        return redirect()->route('admin.experience.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $experience = Experience::findOrFail($id);
        return view('admin.experiences.show', compact('experience'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $experience = Experience::findOrFail($id);
        return view('admin.experiences.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required'],
            'sub_title' => ['required'],
            'short_description' => ['required'],


        ]);
        $experience = Experience::findOrFail($id);

        if ($request->hasFile('thumbnail_image_link')) {
            // Get the old image path
            $oldThumbnailPath = public_path($experience->thumbnail_image_link);

            // Upload the new thumbnail image
            $thumbnailName = time() . '_' . $request->thumbnail_image_link->getClientOriginalName();
            $request->thumbnail_image_link->move(public_path('thumbnails'), $thumbnailName);
            $experience->thumbnail_image_link = 'thumbnails/' . $thumbnailName;

            // Delete the old thumbnail image if it exists
            if (file_exists($oldThumbnailPath)) {
                unlink($oldThumbnailPath);
            }


        }

        if ($request->hasFile('gallery_images_link')) {
            // Get the old gallery images paths
            $oldGalleryImages = json_decode($experience->gallery_images_link, true);

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
            $experience->gallery_images_link = json_encode($galleryImages);
        }


        $inputs = $request->short_description;


        $jsonInputs = json_encode($inputs);
        $experience->title = $request->title;
        $experience->sub_title = $request->sub_title;
        $experience->short_description = $jsonInputs;

        $experience->save();
        return redirect()->route('admin.experience.index')->with('success', 'Stay Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stay = Experience::findOrFail($id);
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
