@extends('admin.layouts.master')

@section('content')
    <div class="main-content my-4 ">
        <div class="card">
            <div class="card-header">
                <div class="card-header">
                    <div class="d-flex  justify-between">
                        <div class="d-flex justify-content-between">
                            <h4>Package Details</h4>
                            <a class="btn btn-primary" href="{{ route('admin.package.index') }}">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @php
            $descriptions = json_decode($package->short_description);
            $gallerys = json_decode($package->gallery_images_link);
            $thumbnail = $package->thumbnail_image_link;
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
                <td style="height: 30px !important">{{ $package->name }}</td>
            </tr>

            <tr>
                <th style="height: 20px !important">Star Rating</th>
                <td style="height: 30px !important">{{ $package->star_rating }}</td>
            </tr>
            <tr>
                <th style="height: 20px !important">Address</th>
                <td style="height: 30px !important">{{ $package->address }}</td>
            </tr>
            <tr>
                <th style="height: 20px !important">City</th>
                <td style="height: 30px !important">{{ $package->city }}</td>
            </tr>
            <tr>
                <th style="height: 20px !important">State</th>
                <td style="height: 30px !important">{{ $package->state }}</td>
            </tr>
            <tr>
                <th style="height: 20px !important">Country</th>
                <td style="height: 30px !important">{{ $package->country }}</td>
            </tr>
            <tr>
                <th style="height: 20px !important">Status</th>
                <td style="height: 30px !important">{{ $package->status }}</td>
            </tr>
            <tr>
                <th style="height: 20px !important">Status</th>
                <td style="height: 30px !important">{{ $package->price }}</td>
            </tr>
            <tr>
                <th style="height: 20px !important">Status</th>
                <td style="height: 30px !important">{{ $package->number_of_nights }}</td>
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
