<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Packages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
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

        .swiper {
            width: 100%;
            height: 100%;
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

        .swiper {
            width: 100%;
            height: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .mySwiper2 {
            height: 400px;
            width: 100%;
        }

        .mySwiper {
            height: 20%;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .mySwiper .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }

        .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- topbar start-->
    <section>
        @include('frontend.layouts.topbar')
    </section>
    <!-- navbar ...................start.-->
    @include('frontend.layouts.header')
    <!-- navbar ................... end.-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-8">
                {{-- <div class="social-icons icons_links ms-4">
                    <a href="" target="_blank" aria-label="Facebook"><img
                            src="{{ asset('frontend/img/topicon/fb.png') }}" alt="fb" class="img-fluid"></a>
                    <a href="" target="_blank" aria-label="YouTube"><img
                            src="{{ asset('frontend/img/topicon/yt.png') }}" alt="fb" class="img-fluid"></a>
                    <a href="" target="_blank" aria-label="Instagram"><img
                            src="{{ asset('frontend/img/topicon/inst.png') }}" alt="fb" class="img-fluid"></a>
                    <a href="" target="_blank" aria-label="WhatsApp"><img
                            src="{{ asset('frontend/img/topicon/whatsapp.png') }}" alt="fb" class="img-fluid"></a>
                    <a href="" target="_blank" aria-label="Tiktok"><img
                            src="{{ asset('frontend/img/topicon/header-icon-tiktok.png') }}" alt="fb"
                            class="img-fluid"></a>


                </div> --}}
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        @php
                        $gallerys = json_decode($packagesdetails->gallery_images_link); @endphp
                        @foreach ($gallerys as $gallery)
                            <div class="swiper-slide">

                                <img src="{{ asset('gallery/' . $gallery) }}" />

                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper new_slide">
                        @php
                        $gallerys = json_decode($packagesdetails->gallery_images_link); @endphp
                        @foreach ($gallerys as $gallery)
                            <div class="swiper-slide">
                                <img src="{{ asset('gallery/' . $gallery) }}" />
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="black-color island_resort">{{ $packagesdetails->name }}</h2>
                <div class="rating-star">
                    <img src="{{ asset('frontend/img/4-star.png') }}" alt="star" class="img-fluid">
                </div>
                <div class="location mb-4">
                    <svg class="svg-inline--fa fa-location-dot" aria-hidden="true" style="color: #E50027;"
                        focusable="false" data-prefix="fas" data-icon="location-dot" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                        </path>
                    </svg>
                    <span class="ms-2">{{ $packagesdetails->address }}</span>
                </div>
                <div class="header-form px-0">
                    <div class="form-header text-center py-1">
                        <h5 class="white-color text-uppercase fw-bold fs-6 py-1 m-0">Request a Quote</h5>
                    </div>
                    @include('frontend.home.section.bookingform')
                </div>


            </div>
        </div>
    </div>
    </section>



    <section class="p-2 container-fluid">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="" id="nav-tab" role="">
                    <button class="btn btn-primary" id="nav-home-tab13" data-bs-toggle="tab"
                        data-bs-target="#nav-home13" type="button" role="tab" aria-controls="nav-home"
                        aria-selected="true">{{$packagesdetails->number_of_nights}} Nights Package</button>

                </div>
                @php
                $descriptions = json_decode($packagesdetails->short_description);
            @endphp
            @foreach ($descriptions as $description)
                <p>{{ $description }}<br></p>
            @endforeach

            </div>
            <div class="col-12 col-md-5">
                @php
                    $descriptions = json_decode($packagesdetails->short_description);
                @endphp
                @foreach ($descriptions as $description)
                    <p>{{ $description }}<br></p>
                @endforeach
            </div>
            <div class="col-12 col-md-3">
                <div class="text-start">
                    <div class="package-pricing text-start">
                        <div class="pricing-header py-4 px-5 white-color ">
    
                            <span><img src="{{asset('frontend/img/percent.png')}}" alt="" class="me-3"> UPTO <strong>{{$packagesdetails->discount}}</strong> OFF</span>
                        </div>
    
                        <div class="pricing-body ">
                            <h2 class="dark-blue-color fw-bold fs-1">${{$packagesdetails->price}}/ <span>Couple</span></h2>
                            <div class="my-2">
                                <!-- <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> -->
                                <span><i class="  fa fa-phone "></i></span>
                                <span class="ms-2">+960-9506464</span>
                            </div>
                            <div>
                                <span><i class="  fa fa-whatsapp "></i></span>
                                <span class="ms-2">+960-9506464</span>
                            </div>
                        </div>
                    </div>
                </div>
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
                                        <?php  if($package->star_rating < 5){ ?>
                                        <div class="rating-star py-2">
                                            <img src="{{ asset('frontend/img/4-star.png') }}" alt="star"
                                                class="img-fluid">
                                        </div>
                                        <?php }else{?>
                                        <div class="rating-star py-2">
                                            <img src="{{ asset('frontend/img/5-star.png') }}" alt="star"
                                                class="img-fluid">
                                        </div>
                                        <?php  }   ?>
                                        <h5 class="black-color fw-bold my-1">{{ $package->name }}</h5>
                                        <svg style="color: black" class="svg-inline--fa fa-location-dot "
                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="location-dot" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                            data-fa-i2svg="">
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
                                        {{-- <div class="text-center"><a href=""
                                                class="btn btn-primary anchor_click_function" data-url=""
                                                data-pagename="package-details">More Details</a>
                                        </div> --}}
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
    @include('frontend.layouts.footer')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 8,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>


</body>

</html>
