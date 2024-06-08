<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <title>Package</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend//css/animate.min.css') }}">
    <style>
        .position-relatives {
            position: relative;
        }
        .package-details {
            background-color: var(--primary-color) !important;
            padding: 2px 5px;
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 5px;
        }
        .swiper2 {
            width: 100%;
            height: 100%;
            overflow: hidden !important;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .exp-card {
            width: 100% !important;
            background-position: center;
            background-size: cover;
            min-height: 460px;
            box-shadow: inset 0 0 0 2000px rgba(33, 18, 18, 0.50);
        }
    </style>
</head>
<body>
    <section>
        @include('frontend.layouts.topbar')
    </section>
    <section class="header_nav container-fluid px-0">
        @include('frontend.layouts.header')
    </section>
    <section class="about-banner" style="background-image: url('{{ asset('frontend/img/banner_packages.png') }}')">
        <div class="container-fluid">
            <div class="about-content text-center">
                <h1 class="white-color fw-bold fs-1">Maldives Holiday <span class="primary-color">Packages</span>
                    <span class="primary-color">
                    </span>
                </h1>
                <p class="fw-semibold  white-color">Find the best & the reliable resorts to get an unforgettable holiday
                    experience in the tropical paradise of the Maldives.</p>
            </div>
        </div>
    </section>
    <!--.............................................Have a Glance on Resorts -->
    <section class="resort py-5 overflow-hidden">
        <div class="container-fluid wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s"
            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <div class="resort-heading text-center">
                <h2 class="black-color fw-bold">
                    Tailor-Made Holidays <span class="primary-color">Packages </span>
                </h2>
                <img src="{{ asset('frontend/img/resorts/subtitle-vector.png') }}" alt="vector" class="img-fluid">
            </div>
            <div class="row  my-4">

                @foreach ($packages as $package)
                    <div class="col-lg-6 col-md-6 col-xl-3 hove_transition mt-3">
                        <div class="position-relatives">
                            <a href="{{ route('packagesdetails', ['name' => $package->name, 'id' => $package->id]) }}"
                                class="anchor_click_function" data-pagename="resort-details">
                                <div class="card-header overflow-hidden ">
                                    <img src="{{ asset($package->thumbnail_image_link) }}" alt="resort"
                                        class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="rating-star py-2">
                                            <img src="{{ asset('frontend/img/resorts/4-star.png') }}" alt="star"
                                                class="img-fluid">
                                        </div>
                                        <h5 class="black-color fw-bold my-1">{{ $package->name }}</h5>
                                        <svg style="color: black" class="svg-inline--fa fa-location-dot "
                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 384 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                            </path>
                                        </svg>
                                        <span style="color: black">{{ $package->address }}</span>
                                    </div>
                                    <div class="card-list  py-2">
                                        <ul class="bullets_list_resort">
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
                                        <div class="text-center"><a href=""
                                            class="btn btn-primary anchor_click_function" data-url=""
                                            data-pagename="package-details">More Details</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </a>
                            <div class="package-details ">
                                <span class="white-color me-2">04 Nights Package</span>

                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </section>

    <!--.............................................Newsletter-->
    <section class="joint_news px-5 py-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="d-flex align-items-center">
                        <svg class="svg-inline--fa fa-envelope-open me-3 white-color" aria-hidden="true"
                            focusable="false" data-prefix="far" data-icon="envelope-open" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M255.4 48.2c.2-.1 .4-.2 .6-.2s.4 .1 .6 .2L460.6 194c2.1 1.5 3.4 3.9 3.4 6.5v13.6L291.5 355.7c-20.7 17-50.4 17-71.1 0L48 214.1V200.5c0-2.6 1.2-5 3.4-6.5L255.4 48.2zM48 276.2L190 392.8c38.4 31.5 93.7 31.5 132 0L464 276.2V456c0 4.4-3.6 8-8 8H56c-4.4 0-8-3.6-8-8V276.2zM256 0c-10.2 0-20.2 3.2-28.5 9.1L23.5 154.9C8.7 165.4 0 182.4 0 200.5V456c0 30.9 25.1 56 56 56H456c30.9 0 56-25.1 56-56V200.5c0-18.1-8.7-35.1-23.4-45.6L284.5 9.1C276.2 3.2 266.2 0 256 0z">
                            </path>
                        </svg><!-- <i class="fa-regular fa-envelope-open me-3 white-color"></i> Font Awesome fontawesome.com -->
                        <div class="pt-3 white-color">
                            <h5 class="fw-bold">Join our <span class="primary-color">Newsletter</span></h5>
                            <p class="fw-lighter">Subscribe &amp; Get Updates in Your Inbox</p>
                        </div>
                    </div>
                </div>
                <div
                    class="col-md-6 mt-3 mt-lg-0 d-flex align-items-center justify-content-start justify-content-lg-end">

                    <div class="input d-flex align-items-center justify-content-between rounded-pill p-1">

                        <input type="hidden" class="csrf_test_name" name="csrf_test_name"
                            value="070ec39d1c63513063041b4de4fda8f1">
                        <input type="email" name="email" placeholder="Enter your email Address"
                            class="subscribe_email">
                        <input type="hidden" class="csrf_test_name2" name="csrf_test_name"
                            value="070ec39d1c63513063041b4de4fda8f1">
                        <div>
                            <button type="button" class="btn btn-primary submit_subscription">Subscribe Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--.............................................Contact section-->
    
    @include('frontend.layouts.footer')
    <script src="{{ asset('frontend/css/wow.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./css/wow.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
