@extends('admin.layouts.master')
@section('content')
    <div class="main-content">
        {{-- <div class="d-flex justify-content-between">
            <h3>Stay Form </h3>
           <a  class="btn btn-primary" href="{{route('admin.stay.index')}}">Back</a></div> --}}
        <section class="section">
            <div class="section-header">
                <div class="col-12 col-md-10">
                    <div class="card">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                        <div class="card-header">
                            <div class="d-flex  justify-between">
                                <div class="d-flex justify-content-between">
                                    <h4>Stay Form </h4>
                                    <a  class="btn btn-primary" href="{{route('admin.stay.index')}}">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <form action="{{route('admin.stay.update', $stay->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" value="{{ $stay->name }}"
                                            name="name">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="star_rating" class="form-label">Star Rating</label>
                                        <input type="number" class="form-control" value="{{ $stay->star_rating }}"
                                            name="star_rating" min="1" max="5">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" value="{{ $stay->address }}"
                                            name="address">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" value="{{ $stay->city }}"
                                            name="city">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" class="form-control" value="{{ $stay->state }}"
                                            name="state">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="country" class="form-label">Country</label>
                                        <input type="text" class="form-control" value="{{ $stay->country }}"
                                            name="country">
                                    </div>

                                    @php
                                    $descriptions =  json_decode($stay->short_description); @endphp 
                                       @foreach($descriptions as $index => $description)
                                       <div class="mb-3 col-md-6">
                                           <label for="short_description_{{ $index }}" class="form-label">Short Description</label>
                                           <textarea class="form-control" name="short_description[]" rows="3">{{ $description }}</textarea>
                                       </div>
                                   @endforeach
                                   
                                    <div class="mb-3 col-md-6">
                                       <div> <img width="50" src="{{asset($stay->thumbnail_image_link) }}" alt="thum"></div>
                                        <label for="thumbnail_image_link" class="form-label">Thumbnail Image</label>
                                        <input type="file"  class="form-control" name="thumbnail_image_link">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <div class="d-flex" >
                                        @php
                                        $gallerys = json_decode($stay->gallery_images_link); @endphp
                                        @foreach ($gallerys as $gallery)
                                            <div class="col-2">
                                                <img width="50" src="{{ asset('gallery/' . $gallery) }}" />
                                            </div>
                                             @endforeach
                                    </div>
                                        <label for="gallery_images_link" class="form-label">Gallery Images</label>
                                        <input type="file"  class="form-control" name="gallery_images_link[]" multiple>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="overview_description" class="form-label">Overview Description</label>
                                        <textarea class="form-control" name="overview_description" rows="3">{{ $stay->overview_description }}</textarea>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="accomodation_description" class="form-label">Accommodation
                                            Description</label>
                                        <textarea class="form-control" name="accommodation_description" rows="3">{{ $stay->accommodation_description }}</textarea>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="spa_and_wellness_description" class="form-label">Spa and Wellness
                                            Description</label>
                                        <textarea class="form-control" name="spa_and_wellness_description" rows="3">{{ $stay->spa_and_wellness_description }}</textarea>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="activities_and_facilities_description" class="form-label">Activities and
                                            Facilities Description</label>
                                        <textarea class="form-control" name="activities_and_facilities_description" rows="3">{{ $stay->activities_and_facilities_description }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-select" name="status">
                                            <option {{ $stay->status == 1 ? 'selected ' : '' }} value="1">Active
                                            </option>
                                            <option {{ $stay->status == 0 ? 'selected ' : '' }} value="0">Inactive
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="stay_type" class="form-label">Stay Type</label>
                                        <select class="form-select" name="stay_type">
                                            {{-- <option {{ $stay->stay_type == 'hotel' ? 'selected ' : '' }} value="hotel">
                                                Hotel</option> --}}
                                            <option {{ $stay->stay_type == 'resort' ? 'selected ' : '' }} value="resort">
                                                Resort</option>
                                            <option {{ $stay->stay_type == 'guest_house' ? 'selected ' : '' }}
                                                value="guest_house">Guest House</option>
                                        </select>
                                    </div>
                                </div>

                        </div>
                        <div class="card-footer text-right">

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>



                </div>
            </div>
        </section>
    </div>
@endsection
