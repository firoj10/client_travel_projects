@extends('frontend.layouts.master')
@section('content')
    <section class="pricing overflow-hidden  pricing_section">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center home_photos_section">
                <div class="col wow fadeIn text-center" data-wow-duration="2s" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                    <img src="{{ asset('frontend/img/logos/photo-2.png') }}" alt="" class="img-fluid first_image">
                </div>
                <div class="col wow fadeIn text-center" data-wow-duration="2s" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                    <img src="{{ asset('frontend/img/logos/photo-3.png') }}" alt="" class="img-fluid ">
                </div>
               
            </div>
        </div>
    </section>
    <!--.............................................Have a Glance on Resorts -->
    @include('frontend.home.section.resort')
    <!--.............................................Our Experience -->

    <section class="container-fluid px-0">
        <div>
            <div class="experience-heading text-center mb-4">
                <h2 class="black-color fw-bold">
                    Our <span class="primary-color">Experience</span> </h2>
                <img src="{{ asset('frontend/img/resorts/subtitle-vector.png') }}" alt="vector" class="img-fluid">
            </div>
        </div>
        <div class="swiper2 mySwiper2">
            <div class="swiper-wrapper">
                @foreach ($experiences as $experience)
                {{-- <a href=""> --}}
                    <div class="swiper-slide ">
                   
                        <div class="exp-card rrr  position-relative"  data-url="{{ route('experiencedetails', ['id' => $experience->id]) }}"
                            style="background-image: url('{{ $experience->thumbnail_image_link }}');">
                            
                                <div
                                    style="position: absolute; top: 70%;  width: 100%; display: flex; justify-content: center;">
                                    <div>
                                        <h2 class=""style=" color: white">{{ $experience->title }}</h2>
                                        {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quidem, eaque fugit quaerat doloremque eveniet cupiditate voluptates recusandae odit earum!</p> --}}
                                        <p class=""style=" color: white">{{ $experience->sub_title }}</p>
                                    </div>
                                </div>
                            
                        </div>
                   
                    </div>
                  
                {{-- </a> --}}
                @endforeach
                
            </div>
            
            <div class="swiper-pagination"></div>
        </div>
    </section>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elements = document.querySelectorAll('.rrr');
            elements.forEach(function(element) {
                element.addEventListener('click', function() {
                    var url = element.getAttribute('data-url');
                    window.location.href = url;
                });
            });
        });
    </script>
    <!--.............................................Tailor-Made Holidays Packages -->
    <section class="tailor-made py-5 overflow-hidden">
        <div class="container-fluid wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s"
            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <div class="tailor-heading text-center">
                <h2 class="black-color fw-bold">
                    Tailor-Made Holidays <span class="primary-color">Packages</span> </h2>
                <img src="{{ asset('frontend/img/resorts/subtitle-vector.png') }}" alt="vector" class="img-fluid">
            </div>
            <div class="row  my-5 packages_home">
                @foreach ($packages as $package)
                    <div class="col-lg-6 col-md-6 col-xl-3 hove_transition position-relative mt-3">
                        <div class="package-card">
                            <div class="card-header overflow-hidden">
                                <img src="{{ asset($package->thumbnail_image_link) }}" alt="resort" class="img-fluid">

                            </div>
                            <div class="card-body">
                                <a href="{{ route('packagesdetails', ['name' => $package->name, 'id' => $package->id]) }}"
                                    class="anchor_click_function" data-pagename="package-details">
                                    <div class="text-center">
                                        <div class="rating-star  py-2">
                                            <img src="{{ asset('frontend/img/resorts/4-star.png') }}" alt="star"
                                                class="img-fluid">
                                        </div>

                                        <h5 class="black-color fw-bold my-1">{{ $package->name }}</h5>

                                        <svg class="svg-inline--fa fa-location-dot " style="color: #E50027;"
                                            aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot"
                                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                            data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                            </path>
                                        </svg><!-- <i class="fa-solid fa-location-dot " style="color:#E50027;"></i> Font Awesome fontawesome.com -->
                                        <span style="color: black">{{ $package->address }}</span>
                                    </div>
                                    <div class="card-list  py-2 text-black">
                                        <ul class="bullets_list_package">
                                            @php
                                                $descriptions = json_decode($package->short_description);
                                            @endphp
                                            @foreach ($descriptions as $description)
                                                <li></li>
                                                <p class="mb-0" style="color: black"><i
                                                        class="fa fa-check-square-o px-2"></i>
                                                    {{ $description }}<br></p>
                                            @endforeach

                                        </ul>

                                    </div>

                                </a>
                                <div class="text-center py-3">

                                    <a href="{{route('packages')}}" class="btn btn-primary anchor_click_function"
                                       
                                        data-pagename="package-details">More Details</a>
                                </div>
                            </div>


                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--.............................................guest house Holidays Packages -->

    <section class="tailor-made py-5 overflow-hidden">
        <div class="container-fluid wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s"
            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <div class="tailor-heading text-center">
                <h2 class="black-color fw-bold">
                    Tailor-Made Holidays <span class="primary-color">Guest House</span> </h2>
                <img src="{{ asset('frontend/img/resorts/subtitle-vector.png') }}" alt="vector" class="img-fluid">
            </div>
            <div class="row  my-5 packages_home">

                @foreach ($guest_house as $stay)
                    <div class="col-lg-6 col-md-6 col-xl-3 hove_transition mt-3  ">
                        <a href="{{ route('resortdetails', $stay->id) }}" class="anchor_click_function"
                            data-pagename="resort-details">
                            <div class="card-header overflow-hidden ">
                                <img src="{{ $stay->thumbnail_image_link }}" alt="resort" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="rating-star py-2">
                                        <img src="{{ asset('frontend/img/4-star.png') }}" alt="star"
                                            class="img-fluid">
                                    </div>
                                    <h5 class="black-color fw-bold my-1">{{ $stay->name }}</h5>
                                    <svg class="svg-inline--fa fa-location-dot " aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="location-dot" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                        </path>
                                    </svg>
                                    <span>{{ $stay->address }}</span>
                                </div>
                                <div class="card-list  py-2">
                                    <ul class="bullets_list_resort">
                                        @php
                                        $descriptions = json_decode($stay->short_description); @endphp
                                        @foreach ($descriptions as $description)
                                            <p class="mb-0"><i
                                                    class="fa fa-check-square-o px-2"></i>{{ $description }} </p>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!--.............................................Our Trusted Partners -->

    <section class="trusted_partners">
        <div class="container-fluid">
            <div class="partner-heading text-center">
                <h2 class="black-color fw-bold">Our Trusted <span class="primary-color">Partners</span></h2>
                <img src="{{ asset('frontend/img/resorts/subtitle-vector.png') }}" alt="vector" class="img-fluid">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div id="carouselLogos" class="carousel slide pt-5 pb-4 pointer-event"
                                data-bs-ride="carousel">

                                <div class="carousel-inner px-5">
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-6 col-lg-2 align-self-center">
                                                <img class="d-block w-100  mb-3"
                                                    src="{{ asset('frontend/img/partners/trustedpartners-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-6 col-lg-2 align-self-center">
                                                <img class="d-block w-100  mb-3"
                                                    src="{{ asset('frontend/img/partners/trustedpartners-2.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-6 col-lg-2 align-self-center">
                                                <img class="d-block w-100  mb-3"
                                                    src="{{ asset('frontend/img/partners/trustedpartners-3.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-6 col-lg-2 align-self-center">
                                                <img class="d-block w-100  mb-3"
                                                    src="{{ asset('frontend/img/partners/trustedpartners-4.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-6 col-lg-2 align-self-center">
                                                <img class="d-block w-100  mb-3"
                                                    src="{{ asset('frontend/img/partners/trustedpartners-5.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-6 col-lg-2 align-self-center">
                                                <img class="d-block w-100  mb-3"
                                                    src="{{ asset('frontend/img/partners/trustedpartners-6.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-6 col-lg-2 align-self-center">
                                                <img class="d-block w-100  mb-3"
                                                    src="{{ asset('frontend/img/partners/trustedpartners-1.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-6 col-lg-2 align-self-center">
                                                <img class="d-block w-100  mb-3"
                                                    src="{{ asset('frontend/img/partners/trustedpartners-2.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-6 col-lg-2 align-self-center">
                                                <img class="d-block w-100  mb-3"
                                                    src="{{ asset('frontend/img/partners/trustedpartners-3.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-6 col-lg-2 align-self-center">
                                                <img class="d-block w-100  mb-3"
                                                    src="{{ asset('frontend/img/partners/trustedpartners-4.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-6 col-lg-2 align-self-center">
                                                <img class="d-block w-100  mb-3"
                                                    src="{{ asset('frontend/img/partners/trustedpartners-5.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-6 col-lg-2 align-self-center">
                                                <img class="d-block w-100  mb-3"
                                                    src="{{ asset('frontend/img/partners/trustedpartners-6.png') }}"
                                                    alt="">
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <ol class="carousel-indicators position-relative mt-3 d-none">
                                    <li data-bs-target="#carouselLogos" data-bs-slide-to="0"
                                        class="bg-dark carousel-control-prev-icon">
                                    </li>
                                    <li data-bs-target="#carouselLogos" data-bs-slide-to="1" class="bg-dark active"
                                        aria-current="true">
                                    </li>
                                </ol>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--.............................................Steps Of Booking -->

    <section class="booking-stp py-5 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pt-5 d-flex flex-column align-items-center justify-content-center wow fadeInLeft"
                    data-wow-duration="2s"
                    data-wow-delay="0.1s"style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                    <img src="{{ asset('frontend/img/step/home_booking_photo.png') }}" alt="vector"
                        class="img-fluid mt-lg-5 mt-0">
                </div>
                <div class="col-lg-8 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                    <div class="booking-heading text-center">
                        <h2 class="black-color fw-bold">Steps Of <span class="primary-color">Booking</span></h2>
                        <img src="{{ asset('frontend/img/step/Vector-sub.png') }}" alt="vector" class="img-fluid">
                    </div>
                    <div class="row pt-5 justify-content-between">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 d-flex ">
                            <div class="me-3">
                                <!-- <i class="fa-solid fa-map-location-dot"></i> -->
                                <img src="{{ asset('frontend/img/step/loc.png') }}" alt="loc" style="width:50px;">
                            </div>
                            <div>
                                <h6 class="black-color fw-bold">SELECT AN OFFER FROM OUR LISTING</h6>
                                <p>We have a range of offers, resorts and villas to choose from to fit your perfect
                                    vacation.</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 d-flex ">
                            <div class="me-3">
                                <img src="{{ asset('frontend/img/step/search.png') }}" alt="search"
                                    style="width:50px;">
                            </div>
                            <div>
                                <h6 class="black-color fw-bold">SUBMIT YOUR DETAILS</h6>
                                <p>We have a range of offers, resorts and villas to choose from to fit your perfect
                                    vacation.</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 d-flex ">
                            <div class="me-3">
                                <img src="{{ asset('frontend/img/step/chat.png') }}" alt="chat" style="width:50px;">

                            </div>
                            <div>
                                <h6 class="black-color fw-bold">OUR CONSULTANT WILL DIRECT YOU</h6>
                                <p>We have a range of offers, resorts and villas to choose from to fit your perfect
                                    vacation.</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 d-flex ">
                            <div class="me-3">
                                <img src="{{ asset('frontend/img/step/chat.png') }}" alt="chat" style="width:50px;">

                            </div>
                            <div>
                                <h6 class="black-color fw-bold">OUR CONSULTANT WILL DIRECT YOU</h6>
                                <p>We have a range of offers, resorts and villas to choose from to fit your perfect
                                    vacation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--.............................................Payment Solutions-->

    <section class="payment pb-5 pt-3">
        <div class="container-fluid">
            <div class="payment-heading text-center">
                <h2 class="black-color fw-bold">Payment <span class="primary-color">Solutions</span></h2>
                <img src="{{ asset('frontend/img/resorts/subtitle-vector.png') }}" alt="vector" class="img-fluid">
            </div>
            <div class="row mt-3 payment_logo">
                <div class="col text-center">
                    <img src="{{ asset('frontend/img/payment/paymentsolutions-1.png') }}" alt="visa"
                        class="img-fluid me-3">
                    <img src="{{ asset('frontend/img/payment/paymentsolutions-2.png') }}" alt="visa"
                        class="img-fluid me-3">
                    <img src="{{ asset('frontend/img/payment/paymentsolutions-3.png') }}" alt="visa"
                        class="img-fluid me-3">
                    <img src="{{ asset('frontend/img/payment/paymentsolutions-4.png') }}" alt="visa"
                        class="img-fluid me-3">
                    <img src="{{ asset('frontend/img/payment/paymentsolutions-5.png') }}" alt="visa"
                        class="img-fluid me-3">
                    <img src="{{ asset('frontend/img/payment/paymentsolutions-6.png') }}" alt="visa"
                        class="img-fluid me-3">
                    <img src="{{ asset('frontend/img/payment/paymentsolutions-7.png') }}" alt="visa"
                        class="img-fluid me-3">
                    <img src="{{ asset('frontend/img/payment/paymentsolutions-8.png') }}" alt="visa"
                        class="img-fluid me-3">
                    <img src="{{ asset('frontend/img/payment/paymentsolutions-9.png') }}" alt="visa"
                        class="img-fluid me-3">


                </div>


            </div>
        </div>
    </section>

    <!-- .............................................Certificates  section-->
    <section class="certificate_license py-3">
        <div class="container-fluid wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="certificate-heading text-center">
                <h2 class="black-color fw-bold">Certificates &amp; <span class="primary-color">License</span></h2>
                <img src="{{ asset('frontend/img/resorts/subtitle-vector.png') }}" alt="" class="img-fluid">
            </div>


            <div class="col-md-12">
                <div class="lc-block">
                    <div id="carouselAirline" class="carousel slide pt-5 pb-4 pointer-event" data-bs-ride="carousel">

                        <div class="carousel-inner px-5">


                            <div class="carousel-item active">
                                <div class="row justify-content-center">
                                    <div class="col-6 col-lg-2 align-self-center">
                                        <img class="d-block w-100  mb-3"
                                            src="{{ asset('frontend/img/license/certificates-9.png') }}" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2 align-self-center">
                                        <img class="d-block w-100  mb-3"
                                            src="{{ asset('frontend/img/license/certificates-14.png') }}" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2 align-self-center">
                                        <img class="d-block w-100  mb-3"
                                            src="{{ asset('frontend/img/license/certificates-13.png') }}" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2 align-self-center">
                                        <img class="d-block w-100  mb-3"
                                            src="{{ asset('frontend/img/license/certificates-12.png') }}" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2 align-self-center">
                                        <img class="d-block w-100  mb-3"
                                            src="{{ asset('frontend/img/license/certificates-11.png') }}" alt="">
                                    </div>

                                </div>

                            </div>

                        </div>

                        <ol class="carousel-indicators position-relative mt-3 d-none">
                            <li data-bs-target="#carouselAirline" data-bs-slide-to="0"
                                class="active bg-dark carousel-control-prev-icon"></li>
                            <li data-bs-target="#carouselAirline" data-bs-slide-to="1" class="bg-dark"></li>
                        </ol>

                    </div>
                </div><!-- /lc-block -->
            </div><!-- /col -->
        </div>
    </section>
    <!--.............................................Our FAQ'S-->

    <section class="faq py-5 ">
        <div class="container-fluid">
            <div class="faq-heading text-center">
                <h2 class="black-color fw-bold">Our <span class="primary-color">FAQ'S</span></h2>
                <img src="{{ asset('frontend/img/resorts/subtitle-vector.png') }}" alt="vector" class="img-fluid">
            </div>
            <div class="row justify-content-around my-5">
                <div class="col-lg-5 wow fadeInleft" data-wow-duration="2s" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                    <img src="{{ asset('frontend/img/expreance6.png') }}" alt="" class="img-fluid">
                </div>
                <div data-wow-duration="2s" data-wow-delay="0.1s"class="col-lg-5 mt-3 mt-lg-0 wow fadeInRight"
                    data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item rounded ">
                            <h2 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne0" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne0">
                                    Budget Packages </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne0" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <p>We are a local DMC based in Maldives well connected with travel trade partners
                                        prominent for our
                                        resort &amp; local island split stay packages</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded my-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne1" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne1">
                                    Tailor-made packages </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne1" class="accordion-collapse collapse ">
                                <div class="accordion-body">
                                    <p>We are a local DMC based in Maldives well connected with travel trade partners
                                        prominent for our
                                        resort &amp; local island split stay packages</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded my-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne2" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne2">
                                    Excellent Customer Support </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne2" class="accordion-collapse collapse ">
                                <div class="accordion-body">
                                    <p>We are a local DMC based in Maldives well connected with travel trade partners
                                        prominent for our
                                        resort &amp; local island split stay packages</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--.............................................Newsletter-->

    <section class="joint_news  py-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="d-flex align-items-center">
                        <svg class=" fa-envelope-open me-3 white-color" aria-hidden="true" width="60px" height="50px"

                            focusable="false" data-prefix="far" data-icon="envelope-open" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M255.4 48.2c.2-.1 .4-.2 .6-.2s.4 .1 .6 .2L460.6 194c2.1 1.5 3.4 3.9 3.4 6.5v13.6L291.5 355.7c-20.7 17-50.4 17-71.1 0L48 214.1V200.5c0-2.6 1.2-5 3.4-6.5L255.4 48.2zM48 276.2L190 392.8c38.4 31.5 93.7 31.5 132 0L464 276.2V456c0 4.4-3.6 8-8 8H56c-4.4 0-8-3.6-8-8V276.2zM256 0c-10.2 0-20.2 3.2-28.5 9.1L23.5 154.9C8.7 165.4 0 182.4 0 200.5V456c0 30.9 25.1 56 56 56H456c30.9 0 56-25.1 56-56V200.5c0-18.1-8.7-35.1-23.4-45.6L284.5 9.1C276.2 3.2 266.2 0 256 0z">
                            </path>
                        </svg><!-- <i class="fa-regular fa-envelope-open me-3 white-color"></i> Font Awesome fontawesome.com -->
                        <div class="pt-3 white-color">
                            <h5 class="fw-bold">Join our <span class="">Newsletter</span></h5>
                            <p class="fw-lighter">Subscribe &amp; Get Updates in Your Inbox</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-3 mt-lg-0 d-flex align-items-center justify-content-start justify-content-lg-end">

                    <div class="input d-flex align-items-center justify-content-between rounded-pill p-1">

                        <input type="hidden" class="csrf_test_name" name="csrf_test_name"
                            value="070ec39d1c63513063041b4de4fda8f1">
                        <input type="email" name="email" placeholder="Enter your email Address"
                            class="subscribe_email">
                        <input type="hidden" class="csrf_test_name2" name="csrf_test_name"
                            value="070ec39d1c63513063041b4de4fda8f1">
                        <div>
                            <button type="button" class="btn btn-primary submit_subscription">Subscribe
                                Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

   

