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
                            <div >
                                <div class="d-flex justify-content-between">
                                    <h4>Stay Form </h4>
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
                            <form action="{{ route('admin.experience.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title">
                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Sub Title</label>
                                        <input type="text" class="form-control" name="sub_title">
                                        @if ($errors->has('sub_title'))
                                            <span class="text-danger">{{ $errors->first('sub_title') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="short_description" class="form-label">Short Description</label>
                                        <input type="text" name="short_description[]" class="form-control">
                                        <div id="input-container">
                                            <!-- Input fields will be appended here -->
                                        </div>
                                        <button type="button" class="btn btn-primary" id="add-input">Add Short Description</button>
                                        @if ($errors->has('short_description'))
                                            <span class="text-danger">{{ $errors->first('short_description') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="thumbnail_image_link" class="form-label">Thumbnail Image</label>
                                        <input type="file" class="form-control" name="thumbnail_image_link">
                                          @if ($errors->has('thumbnail_image_link'))
                                            <span class="text-danger">{{ $errors->first('thumbnail_image_link') }}</span>
                                        @endif
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="gallery_images_link" class="form-label">Gallery Images</label>
                                        <input type="file" class="form-control" name="gallery_images_link[]" multiple>
                                        @if ($errors->has('gallery_images_link'))
                                            <span class="text-danger">{{ $errors->first('gallery_images_link') }}</span>
                                        @elseif ($errors->has('gallery_images_link'))
                                            <span class="text-danger">{{ $errors->first('gallery_images_link') }}</span>
                                        @endif
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


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const addButton = document.getElementById('add-input');
        const inputContainer = document.getElementById('input-container');
        let inputIndex = 1;

        addButton.addEventListener('click', function () {
            const inputDiv = document.createElement('div');
            inputDiv.classList.add('mb-3');

            const label = document.createElement('label');
            label.setAttribute('for', 'short_description_' + inputIndex);
            label.textContent = 'Short Description ' + inputIndex;
            label.classList.add('form-label');

            const input = document.createElement('input');
            input.type = 'text';
            input.name = 'short_description[]'; // Use array notation for name
            input.id = 'short_description_' + inputIndex; // Set id for the label's "for" attribute
            input.classList.add('form-control');

            inputDiv.appendChild(label);
            inputDiv.appendChild(input);
            inputContainer.appendChild(inputDiv);

            inputIndex++;
        });
    });
</script>

{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const addButton = document.getElementById('add-input');
        const inputContainer = document.getElementById('input-container');
        let inputIndex = 1;

        addButton.addEventListener('click', function () {
            const inputDiv = document.createElement('div');
            inputDiv.classList.add('input-group');

            const label = document.createElement('label');
            label.for = 'input_' + inputIndex;
            label.textContent = 'Input Field ' + inputIndex;
            label.classList.add('input-label'); 

            const input = document.createElement('input');
            input.type = 'text';
            input.name = 'input_' + inputIndex;
            input.id = 'input_' + inputIndex; 
            input.classList.add('form-control'); 

            inputDiv.appendChild(label);
            inputDiv.appendChild(input);
            inputContainer.appendChild(inputDiv);

            inputIndex++;
        });
    });
</script> --}}


