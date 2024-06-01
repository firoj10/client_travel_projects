@extends('admin.layouts.master')

@section('content')
    <div class="main-content my-4 ">
        <div class="card">
            <div class="card-header">
                <div class="card-header">
                    <div class="d-flex  justify-between">
                        <div class="d-flex justify-content-between">
                            <h4>experience Details</h4>
                            <a class="btn btn-primary" href="{{ route('admin.experience.index') }}">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @php
            $descriptions = json_decode($experience->short_description);
            $gallerys = json_decode($experience->gallery_images_link);
            $thumbnail = $experience->thumbnail_image_link;
        @endphp


        @foreach ($gallerys as $gallery)
            <img width="100" height="100" src="{{ asset('gallery/' . $gallery) }}" alt="img">
        @endforeach
        <p class="font-weight-bold">Gallery images</p>


        <img width="100" height="100" src="{{ asset($thumbnail) }}" alt="img">
        <p class="font-weight-bold">Thumbnails images</p>
        <table class="table mt-5">
            <tr>
                <th style="height: 20px !important">Name</th>
                <td style="height: 30px !important">{{ $experience->title }}</td>
            </tr>

            
           


        </table>

        <p class="font-weight-bold">Short Description</p>

        <ul>
            @foreach ($descriptions as $description)
                <li>{{ $description }}</li>
            @endforeach
        </ul>


    </div>
@endsection
