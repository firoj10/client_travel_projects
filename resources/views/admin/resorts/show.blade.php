@extends('admin.layouts.master')

@section('content')
    <div class="main-content my-4 ">
        <div class="card">
            <div class="card-header">
                <div class="card-header">
                            <div class="d-flex  justify-between">
                                <div class="d-flex justify-content-between">
                                    <h4>Stay Details</h4>
                                    <a  class="btn btn-primary" href="{{route('admin.stay.index')}}">Back</a>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
       
        @php
            $descriptions = json_decode($stay->short_description);
            $gallerys = json_decode($stay->gallery_images_link);
            $thumbnail = $stay->thumbnail_image_link
        @endphp
      
           
            @foreach ($gallerys as $gallery)
                <img width="100" height="100" src="{{asset('gallery/'.$gallery)}}" alt="img">
            @endforeach
            <p class="font-weight-bold">Gallery images</p>
  
           
            <img width="100" height="100"  src="{{asset($thumbnail)}}" alt="img">
            <p class="font-weight-bold">Thumbnails images</p>
        <table class="table mt-5">
            <tr>
                <th style="height: 20px !important">Name</th>
                <td style="height: 30px !important">{{ $stay->name }}</td>
            </tr>
            
            <tr>
               <th style="height: 20px !important">Star Rating</th>
                <td style="height: 30px !important">{{ $stay->star_rating }}</td>
            </tr>
            <tr>
               <th style="height: 20px !important">Address</th>
                <td style="height: 30px !important">{{ $stay->address }}</td>
            </tr>
            <tr>
               <th style="height: 20px !important">City</th>
                <td style="height: 30px !important">{{ $stay->city }}</td>
            </tr>
            <tr>
               <th style="height: 20px !important">State</th>
                <td style="height: 30px !important">{{ $stay->state }}</td>
            </tr>
            <tr>
               <th style="height: 20px !important">Country</th>
                <td style="height: 30px !important">{{ $stay->country }}</td>
            </tr>
            <tr>
               <th style="height: 20px !important">Status</th>
                <td style="height: 30px !important">{{ $stay->status }}</td>
            </tr>
            <tr>
               <th style="height: 20px !important">Stay Type</th>
                <td style="height: 30px !important">{{ $stay->stay_type }}</td>
            </tr>
            <tr>
               <th style="height: 20px !important">Overview Description</th>
                <td style="height: 30px !important">{{ $stay->overview_description }}</td>
            </tr>
            <tr>
               <th style="height: 20px !important">Accommodation Description</th>
                <td style="height: 30px !important">{{ $stay->accommodation_description }}</td>
            </tr>
            <tr>
               <th style="height: 20px !important">Spa and Wellness Description</th>
                <td style="height: 30px !important">{{ $stay->spa_and_wellness_description }}</td>
            </tr>
            <tr>
               <th style="height: 20px !important">Activities and Facilities Description</th>
                <td style="height: 30px !important">{{ $stay->activities_and_facilities_description }}</td>
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
