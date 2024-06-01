@extends('admin.layouts.master')
@section('content')
    <div class="main-content">
        {{-- <div class="d-flex justify-content-between">
            <h3>package Form </h3>
           <a  class="btn btn-primary" href="{{route('admin.package.index')}}">Back</a></div> --}}
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
                                    <a  class="btn btn-primary" href="{{route('admin.experience.index')}}">Back</a>
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
                            <form action="{{route('admin.experience.update', $experience->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Title</label>
                                        <input type="text" class="form-control" value="{{ $experience->title }}"
                                            name="title">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label"> Sub Title</label>
                                        <input type="text" class="form-control" value="{{ $experience->sub_title}}"
                                            name="sub_title">
                                    </div>
                                    
                                   
                                   

                                    @php
                                    $descriptions =  json_decode($experience->short_description); @endphp 
                                       @foreach($descriptions as $index => $description)
                                       <div class="mb-3 col-md-6">
                                           <label for="short_description_{{ $index }}" class="form-label">Short Description</label>
                                           <textarea class="form-control" name="short_description[]" rows="3">{{ $description }}</textarea>
                                       </div>
                                   @endforeach
                                   
                                    <div class="mb-3 col-md-6">
                                       <div> <img width="50" src="{{asset($experience->thumbnail_image_link) }}" alt="thum"></div>
                                        <label for="thumbnail_image_link" class="form-label">Thumbnail Image</label>
                                        <input type="file"  class="form-control" name="thumbnail_image_link">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <div class="d-flex" >
                                        @php
                                        $gallerys = json_decode($experience->gallery_images_link); @endphp
                                        @foreach ($gallerys as $gallery)
                                            <div class="col-2">
                                                <img width="50" src="{{ asset('gallery/' . $gallery) }}" />
                                            </div>
                                             @endforeach
                                    </div>
                                        <label for="gallery_images_link" class="form-label">Gallery Images</label>
                                        <input type="file"  class="form-control" name="gallery_images_link[]" multiple>
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
