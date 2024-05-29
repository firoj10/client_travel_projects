<section class="resort py-5 overflow-hidden">
    <div class="container-fluid wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
        <div class="resort-heading text-center">
            <h2 class="black-color fw-bold">
                Have a Glance on <span class="primary-color">Resorts</span>
            </h2>
            <img src="{{ asset('frontend/img/resorts/subtitle-vector.png') }}" alt="vector" class="img-fluid">
        </div>
        <div class="row  my-4">
           @foreach ($stays as $stay)
           <div class="col-lg-6 col-md-6 col-xl-3 hove_transition mt-3  ">
            <a href="{{route('resortdetails', $stay->id )}}" class="anchor_click_function" data-pagename="resort-details">
                <div class="card-header overflow-hidden ">
                    <img src="{{$stay->thumbnail_image_link}}" alt="resort" class="img-fluid">
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <div class="rating-star py-2">
                            <img src="{{ asset('frontend/img/resorts/4-star.png') }}" alt="star"
                                class="img-fluid">
                        </div>
                        <h5 class="black-color fw-bold my-1">{{$stay->name}}</h5>
                        <svg class="svg-inline--fa fa-location-dot " aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="location-dot" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                            </path>
                        </svg>
                        <span>{{$stay->address}}</span>
                    </div>
                    <div class="card-list  py-2">
                        <ul class="bullets_list_resort">
                           @php
                           $descriptions =  json_decode($stay->short_description); @endphp 
                               @foreach($descriptions as $description)

                               <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>{{$description}} </p>

                               @endforeach
                        </ul>
                    </div>
                </div>
            </a>
        </div>
           @endforeach
            
       {{-- </div>
         <div class="row  my-4">
            <div class="col-lg-6 col-md-6 col-xl-3 hove_transition mt-3  ">
                <a href="javascript:void(0)" class="anchor_click_function" data-pagename="resort-details">
                    <div class="card-header overflow-hidden ">
                        <img src="{{ asset('frontend/img/experience-1.jpg') }}" alt="resort"
                            class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="rating-star py-2">
                                <img src="{{ asset('frontend/img/resorts/4-star.png') }}" alt="star"
                                    class="img-fluid">
                            </div>
                            <h5 class="black-color fw-bold my-1">Siyam World Maldives</h5>
                            <svg class="svg-inline--fa fa-location-dot " aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="location-dot" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                </path>
                            </svg>
                            <span>Dhigurah, Noonu Atoll</span>
                        </div>
                        <div class="card-list  py-2">
                            <ul class="bullets_list_resort">
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i> One Child Free<br>

                                </p>
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i> 15% Discount All Room
                                    Categories&nbsp;<br>
                                </p>
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i> Seaplane or Speedboat
                                    Transfer<br>
                                </p>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xl-3 hove_transition mt-3">
                <a href="javascript:void(0)" class="anchor_click_function" data-pagename="resort-details">
                    <div class="card-header overflow-hidden">
                        <img src="{{ asset('frontend/img/resorts/resorts-22.png') }}" alt="resort"
                            class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="rating-star py-2">
                                <img src="{{ asset('frontend/img/resorts/4-star.png') }}" alt="star"
                                    class="img-fluid">
                            </div>
                            <h5 class="black-color fw-bold my-1">Sun Siyam Olhuveli</h5>
                            <svg class="svg-inline--fa fa-location-dot " aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="location-dot" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                </path>
                            </svg><!-- <i class="fa-solid fa-location-dot "></i> Font Awesome fontawesome.com -->
                            <span>South Male Atoll</span>
                        </div>
                        <div class="card-list  py-2">
                            <ul class="bullets_list_resort">
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>Two Child
                                    Free&nbsp;&nbsp;<br>

                                </p>
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>20% Discount All Room
                                    Categories&nbsp;<br>
                                </p>
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>Speedboat Transfer</p>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xl-3 hove_transition mt-3">
                <a href="javascript:void(0)" class="anchor_click_function" data-pagename="resort-details">
                    <div class="card-header overflow-hidden">
                        <img src="{{ asset('frontend/img/resorts/resorts-20.png') }}" alt="resort"
                            class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="rating-star py-2">
                                <img src="{{ asset('frontend/img/resorts/4-star.png') }}" alt="star"
                                    class="img-fluid">
                            </div>
                            <h5 class="black-color fw-bold my-1">Sandies Bathala Maldives</h5>
                            <svg class="svg-inline--fa fa-location-dot " aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="location-dot" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                </path>
                            </svg><!-- <i class="fa-solid fa-location-dot "></i> Font Awesome fontawesome.com -->
                            <span>North Ari Atoll </span>
                        </div>
                        <div class="card-list  py-2">
                            <ul class="bullets_list_resort">
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>One Child Free<br>

                                </p>
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>15% Discount All Room
                                    Categories&nbsp;&nbsp;<br>
                                </p>
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>Speedboat or Seaplane
                                    Transfer</p>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xl-3 hove_transition mt-3">
                <a href="javascript:void(0)" class="anchor_click_function" data-pagename="resort-details">
                    <div class="card-header overflow-hidden">
                        <img src="{{ asset('frontend/img/resorts/resorts-19.png') }}" alt="resort"
                            class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="rating-star py-2">
                                <img src="{{ asset('frontend/img/resorts/4-star.png') }}" alt="star"
                                    class="img-fluid">
                            </div>
                            <h5 class="black-color fw-bold my-1">Hideaway Beach Resort</h5>
                            <svg class="svg-inline--fa fa-location-dot " aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="location-dot" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                </path>
                            </svg><!-- <i class="fa-solid fa-location-dot "></i> Font Awesome fontawesome.com -->
                            <span>Haa Alifu Atoll </span>
                        </div>
                        <div class="card-list  py-2">
                            <ul class="bullets_list_resort">
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>Free Sunset Cruise<br>

                                </p>
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>20% Discount All Room
                                    Categories&nbsp;&nbsp;<br>
                                </p>
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>Seaplane or Domestic
                                    Transfer</p>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xl-3 hove_transition mt-3">
                <a href="javascript:void(0)" class="anchor_click_function" data-pagename="resort-details">
                    <div class="card-header overflow-hidden">
                        <img src="{{ asset('frontend/img/resorts/resorts-18.png') }}" alt="resort"
                            class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="rating-star py-2">
                                <img src="{{ asset('frontend/img/resorts/4-star.png') }}" alt="star"
                                    class="img-fluid">
                            </div>
                            <h5 class="black-color fw-bold my-1">Diamonds Athuruga Maldives</h5>
                            <svg class="svg-inline--fa fa-location-dot " aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="location-dot" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                </path>
                            </svg><!-- <i class="fa-solid fa-location-dot "></i> Font Awesome fontawesome.com -->
                            <span>South Ari Atoll</span>
                        </div>
                        <div class="card-list  py-2">
                            <ul class="bullets_list_resort">
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>One Child Free<br>

                                </p>
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>15% Discount All Room
                                    Categories&nbsp;&nbsp;<br>
                                </p>
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>Seaplane
                                    or&nbsp;Speedboat Transfer</p>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xl-3 hove_transition mt-3">
                <a href="javascript:void(0)" class="anchor_click_function" data-pagename="resort-details">
                    <div class="card-header overflow-hidden">
                        <img src="{{ asset('frontend/img/resorts/resorts-17.png') }}" alt="resort"
                            class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="rating-star py-2">
                                <img src="{{ asset('frontend/img/resorts/4-star.png') }}" alt="star"
                                    class="img-fluid">
                            </div>
                            <h5 class="black-color fw-bold my-1">Sun Siyam Iru Veli</h5>
                            <svg class="svg-inline--fa fa-location-dot " aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="location-dot" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                </path>
                            </svg><!-- <i class="fa-solid fa-location-dot "></i> Font Awesome fontawesome.com -->
                            <span>Dhaalu Atoll</span>
                        </div>
                        <div class="card-list  py-2">
                            <ul class="bullets_list_resort">
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>20% Discount on All
                                    Room Categories<br>

                                </p>
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>Complimentary Seaplane
                                    Transfer&nbsp;<br>
                                </p>
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>Seaplane Transfer</p>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xl-3 hove_transition mt-3">
                <a href="javascript:void(0)" class="anchor_click_function" data-pagename="resort-details">
                    <div class="card-header overflow-hidden">
                        <img src="{{ asset('frontend/img/resorts/resorts-15.png') }}" alt="resort"
                            class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="rating-star py-2">
                                <img src="{{ asset('frontend/img/resorts/4-star.png') }}" alt="star"
                                    class="img-fluid">
                            </div>
                            <h5 class="black-color fw-bold my-1">Sun Siyam Vilu Reef</h5>
                            <svg class="svg-inline--fa fa-location-dot " aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="location-dot" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                </path>
                            </svg><!-- <i class="fa-solid fa-location-dot "></i> Font Awesome fontawesome.com -->
                            <span>South Nilandhe Atoll</span>
                        </div>
                        <div class="card-list  py-2">
                            <ul class="bullets_list_resort">
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>20% Discount on All
                                    Room Categories<br>

                                </p>
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>Two Child Free<br>
                                </p>
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>Seaplane Transfer&nbsp;
                                </p>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-xl-3 hove_transition mt-3">
                <a href="javascript:void(0)" class="anchor_click_function" data-pagename="resort-details">
                    <div class="card-header overflow-hidden">
                        <img src="{{ asset('frontend/img/resorts/resorts-16.png') }}" alt="resort"
                            class="img-fluid">
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="rating-star py-2">
                                <img src="{{ asset('frontend/img/resorts/4-star.png') }}" alt="star"
                                    class="img-fluid">
                            </div>
                            <h5 class="black-color fw-bold my-1">Barcelo Whale Lagoon</h5>
                            <svg class="svg-inline--fa fa-location-dot " aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="location-dot" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                </path>
                            </svg><!-- <i class="fa-solid fa-location-dot "></i> Font Awesome fontawesome.com -->
                            <span>South Ari Atoll</span>
                        </div>
                        <div class="card-list  py-2">
                            <ul class="bullets_list_resort">
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>25% Discount on All
                                    Room Categories<br>

                                </p>
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>20% Discount on Meal
                                    Plan
                                </p>
                                <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>Seaplane Transfer</p>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
        </div> --}}
      



    </div>
</section>