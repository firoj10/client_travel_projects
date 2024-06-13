@extends('admin.layouts.master')
@section('content')
    <div class="main-content">

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
                                    <h4>Package Form </h4>
                                    <a  class="btn btn-primary" href="{{route('admin.package.index')}}">Back</a>
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
                            <form action="{{route('admin.package.update', $package->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" value="{{ $package->name }}"
                                            name="name">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="star_rating" class="form-label">Star Rating</label>
                                        <input type="number" class="form-control" value="{{ $package->star_rating }}"
                                            name="star_rating" min="1" max="5">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="discount" class="form-label">Discount</label>
                                        <input type="number" class="form-control" value="{{ $package->discount }}"
                                            name="discount" >
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" value="{{ $package->address }}"
                                            name="address">
                                    </div>
                                    {{-- <div class="mb-3 col-md-6">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" value="{{ $package->city }}"
                                            name="city">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" class="form-control" value="{{ $package->state }}"
                                            name="state">
                                    </div> --}}
                                    <div class="mb-3 col-md-6">
                                        <label for="country" class="form-label">Country</label>
                                        <input type="text" class="form-control" value="{{ $package->country }}"
                                            name="country">
                                    </div>

                                    @php
                                    $descriptions =  json_decode($package->short_description); @endphp 
                                       @foreach($descriptions as $index => $description)
                                       <div class="mb-3 col-md-6">
                                           <label for="short_description_{{ $index }}" class="form-label">Short Description</label>
                                           <textarea class="form-control" name="short_description[]" rows="3">{{ $description }}</textarea>
                                       </div>
                                   @endforeach
                                   
                                    <div class="mb-3 col-md-6">
                                       <div> <img width="50" src="{{asset($package->thumbnail_image_link) }}" alt="thum"></div>
                                        <label for="thumbnail_image_link" class="form-label">Thumbnail Image</label>
                                        <input type="file"  class="form-control" name="thumbnail_image_link">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <div class="d-flex" >
                                        @php
                                        $gallerys = json_decode($package->gallery_images_link); @endphp
                                        @foreach ($gallerys as $gallery)
                                            <div class="col-2">
                                                <img width="50" src="{{ asset('gallery/' . $gallery) }}" />
                                            </div>
                                             @endforeach
                                    </div>
                                        <label for="gallery_images_link" class="form-label">Gallery Images</label>
                                        <input type="file"  class="form-control" name="gallery_images_link[]" multiple>
                                    </div>
                                     <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-select" name="status">
                                            <option {{ $package->status == 1 ? 'selected ' : '' }} value="1">Active
                                            </option>
                                            <option {{ $package->status == 0 ? 'selected ' : '' }} value="0">Inactive
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="price">Price</label>
                                        <input class="form-control" type="text" id="price" name="price" value="{{$package->price}}" required>
                                        
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="number_of_nights">Number of Nights</label>
                                        <input class="form-control" type="number"  name="number_of_nights" value="{{$package->number_of_nights}}" required>
                                        
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
