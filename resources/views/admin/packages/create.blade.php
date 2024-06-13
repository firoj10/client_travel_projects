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
                            <form action="{{ route('admin.package.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="star_rating" class="form-label">Star Rating</label>
                                        <input type="number" class="form-control" name="star_rating" min="1"
                                            max="5">
                                              @if ($errors->has('star_rating'))
                                            <span class="text-danger">{{ $errors->first('star_rating') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="discount" class="form-label">Discount</label>
                                        <input type="number" class="form-control" name="discount" >
                                              @if ($errors->has('discount'))
                                            <span class="text-danger">{{ $errors->first('discount') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address">
                                          @if ($errors->has('address'))
                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>
                                    {{-- <div class="mb-3 col-md-6">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" name="city">
                                          @if ($errors->has('city'))
                                            <span class="text-danger">{{ $errors->first('city') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" class="form-control" name="state">
                                          @if ($errors->has('state'))
                                            <span class="text-danger">{{ $errors->first('state') }}</span>
                                        @endif
                                    </div> --}}
                                    <div class="mb-3 col-md-6">
                                        <label for="country" class="form-label">Country</label>
                                        <input type="text" class="form-control" name="country">
                                          @if ($errors->has('country'))
                                            <span class="text-danger">{{ $errors->first('country') }}</span>
                                        @endif
                                    </div>
                                    {{-- <div class="mb-3 col-md-6">
                                        <label for="short_description" class="form-label">Short Description</label>
                                        <input type="text" name="short_description" class="form-control" >
                                        <div id="input-container">
                                          
                                        </div>
                                        <button type="button" class="btn btn-primary" id="add-input">Short Description</button>
                                          @if ($errors->has('short_description'))
                                            <span class="text-danger">{{ $errors->first('short_description') }}</span>
                                        @endif
                                    </div> --}}
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

                                    <div class="mb-3 col-md-6">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-select" name="status">
                                            <option value= "1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                        @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="price">Price</label>
                                        <input class="form-control" type="text" id="price" name="price" value="{{ old('price') }}" required>
                                        @if ($errors->has('price'))
                                        <span class="text-danger">{{ $errors->first('price') }}</span>
                                    @endif
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="number_of_nights">Number of Nights</label>
                                        <input class="form-control" type="number" id="number_of_nights" name="number_of_nights" value="{{ old('number_of_nights') }}" required>
                                        @if ($errors->has('number_of_nights'))
                                        <span class="text-danger">{{ $errors->first('number_of_nights') }}</span>
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


