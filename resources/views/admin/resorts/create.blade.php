@extends('admin.layouts.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="col-12 col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex  justify-between">
                                <div>
                                    <h4>Stay Form </h4>
                                </div>
                               
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.stay.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control"  name="name"  >
                                </div>
                               <div class="mb-3 col-md-6">
                                    <label for="star_rating" class="form-label">Star Rating</label>
                                    <input type="number" class="form-control"  name="star_rating" min="1" max="5"  >
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control"  name="address"  >
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control"  name="city"  >
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="state" class="form-label">State</label>
                                    <input type="text" class="form-control"  name="state"  >
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="country" class="form-label">Country</label>
                                    <input type="text" class="form-control"  name="country"  >
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="short_description" class="form-label">Short Description</label>
                                    <textarea class="form-control"  name="short_description" rows="3"  ></textarea>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="thumbnail_image_link" class="form-label">Thumbnail Image</label>
                                    <input type="file" class="form-control"  name="thumbnail_image_link"  >
                                </div> 
                                <div class="mb-3 col-md-6">
                                    <label for="gallary_images_link" class="form-label">Gallery Images</label>
                                    <input type="file" class="form-control"  name="gallary_images_link[]" multiple  >

                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="overview_description" class="form-label">Overview Description</label>
                                    <textarea class="form-control"  name="overview_description" rows="3"  ></textarea>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="accomodation_description" class="form-label">Accommodation Description</label>
                                    <textarea class="form-control"  name="accommodation_description" rows="3"  ></textarea>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="spa_and_wellness_description" class="form-label">Spa and Wellness Description</label>
                                    <textarea class="form-control"  name="spa_and_wellness_description" rows="3"  ></textarea>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="activities_and_facilities_description" class="form-label">Activities and Facilities Description</label>
                                    <textarea class="form-control"  name="activities_and_facilities_description" rows="3"  ></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select"  name="status">
                                        <option value= "1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="stay_type" class="form-label">Stay Type</label>
                                    <select class="form-select"  name="stay_type"  >
                                        <option value="hotel">Hotel</option>
                                        <option value="resort">Resort</option>
                                        <option value="guest_house">Guest House</option>
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
