<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Resort</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <style>
        html,
        body {
            position: relative;
            /* height: 100%; */
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
    <!-- topbar end-->
    <!-- navbar ...................start.-->
    @include('frontend.layouts.header')
    <!-- navbar ................... end.-->


    <!-- Swiper -->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-8">


                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        @php
                        $gallerys = json_decode($guesthousedetails->gallery_images_link); @endphp
                        @foreach ($gallerys as $gallery)
                            <div class="swiper-slide">
                                {{-- <img src="{{'/public/gallery/'$gallery}}" /> --}}
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
                        $gallerys = json_decode($guesthousedetails->gallery_images_link); @endphp
                        @foreach ($gallerys as $gallery)
                            <div class="swiper-slide">
                                <img src="{{ asset('gallery/' . $gallery) }}" />
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="black-color island_resort">{{ $guesthousedetails->name }}</h2>
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
                    <span class="ms-2">{{ $guesthousedetails->address }}</span>
                </div>
                <div class="header-form px-0">
                    <div class="form-header text-center py-1">
                        <h5 class="white-color text-uppercase fw-bold fs-6 py-1 m-0">Request a Quote</h5>
                    </div>
                     {{-- start --}}
                  <form class="submit_quote_form" action="{{ route('quotation.store') }}" method="POST" novalidate="novalidate">
                    @csrf
                    <div class="form-body py-3 px-4">
                        <div class="row justify-content-between">
                            <div class="col-6 input d-flex align-items-center">
                                <img src="{{ asset('frontend/img/form/calendar.png') }}" alt="Calendar"
                                    class="img-fluid">
                                <input type="text" placeholder="Tentative Arrival Date"
                                    class="date_picker" id="datepickers" name="date" aria-invalid="true">
                
                            </div>
                            <div class="col-6 input d-flex align-items-center">
                                <img src="{{ asset('frontend/img/form/sleeping.png') }}" alt="Sleeping"
                                    class="img-fluid">
                                <input type="number" placeholder="No of Nights" min="1"
                                    max="100" name="no_off_nights" aria-invalid="true">
                            </div>
                        </div>
                        <div class="row justify-content-between my-4">
                            <div class="col-6 input d-flex align-items-center">
                                <img src="{{ asset('frontend/img/form/couple.png') }}" alt="Couple"
                                    class="img-fluid">
                                <input type="number" placeholder="No of Adults" min="1"
                                    max="100" name="no_off_adults">
                            </div>
                            <div class="col-6 input d-flex align-items-center">
                                <img src="{{ asset('frontend/img/form/children.png') }}" alt="Children"
                                    class="img-fluid">
                                <input type="number" placeholder="No of Kids" min="0"
                                    max="100" name="no_off_kids">
                
                            </div>
                        </div>
                        <div class="row justify-content-between my-4">
                            <div class="col-6 input d-flex align-items-center">
                                <img src="{{ asset('frontend/img/form/couple.png') }}" alt="Couple"
                                    class="img-fluid">
                                <select class="form-select" aria-label="Interested In*"
                                    name="interested_in">
                                    <option value="">Interested In*</option>
                                    <option value="Local island Hotel">Guest House</option>
                                    <option value="4 star resort">4 star resort</option>
                                    <option value="5 star resort">5 star resort</option>
                                    <option value="5 star luxury resort">5 star luxury resort</option>
                                </select>
                            </div>
                            <div class="col-6 input d-flex align-items-center">
                                <img src="{{ asset('frontend/img/form/user.png') }}" alt="User"
                                    class="img-fluid">
                                <input type="text" placeholder="Your Name*" name="name">
                            </div>
                        </div>
                
                        <div class="row justify-content-between my-4">
                            <div class="col-6 input d-flex align-items-center">
                                <img src="{{ asset('frontend/img/form/email.png') }}" alt="Email"
                                    class="img-fluid">
                                <input type="text" placeholder="Your Email*" name="email">
                
                            </div>
                            <div class="col-6 input d-flex align-items-center">
                                <img src="{{ asset('frontend/img/form/phone.png') }}" alt="Phone"
                                    class="img-fluid">
                                <input type="num" placeholder="Phone / Whatsapp*"
                                    name="phone_number">
                
                            </div>
                
                        </div>
                        <div class="row">
                            <div class="col-12 text-area">
                                <textarea width="100%" name="description" id="" cols="20" rows="1"
                                    placeholder="Please advise your required villa category." aria-invalid="false"></textarea>
                            </div>
                        </div>
                      
                
                        <div class="mt-3 text-center">
                            <button type="submit" class="btn btn-primary px-5">Submit</button>
                        </div>
                    </div>
                    
                </form>
                  {{-- end --}}

                </div>


            </div>
        </div>
    </div>
    <section class="resort-tabs">
        <div class="container-fluid p-0 px-3 py-5">
            <div class="content">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs new-resort" id="myTab" role="tablist">
                    <p class="nav-item px-4" role="presentation">
                        <a class="nav-link active" id="overview-tab" data-bs-toggle="tab" href="#overview"
                            role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </p>
                    <p class="nav-item px-4" role="presentation">
                        <a class="nav-link" id="accommodation-tab" data-bs-toggle="tab" href="#accommodation"
                            role="tab" aria-controls="accommodation" aria-selected="false">Accommodation</a>
                    </p>
                    <p class="nav-item px-4" role="presentation">
                        <a class="nav-link" id="spa-wellness-tab" data-bs-toggle="tab" href="#spa-wellness"
                            role="tab" aria-controls="spa-wellness" aria-selected="false">Spa &amp; Wellness</a>
                    </p>
                    <p class="nav-item px-4" role="presentation">
                        <a class="nav-link" id="activities-facilities-tab" data-bs-toggle="tab"
                            href="#activities-facilities" role="tab" aria-controls="activities-facilities"
                            aria-selected="false">Activities &amp; Facilities</a>
                    </p>
                </ul>


                <!-- Tab panes -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active py-3" id="overview" role="tabpanel"
                        aria-labelledby="overview-tab">
                        <div class="title fw-bold">Overview Content</div>

                        <p>{{ $guesthousedetails->overview_description }}</p>
                        <a href="javascript:void(0)" data-url=" "
                            class="btn btn-secondary anchor_click_function">Get in Touch</a>
                    </div>
                    <div class="tab-pane fade py-3" id="accommodation" role="tabpanel"
                        aria-labelledby="accommodation-tab">
                        <div class="title fw-bold">Accommodation Content</div>

                        <p>{{ $guesthousedetails->accommodation_description }}</p>
                        <a href="javascript:void(0)" data-url=" "
                            class="btn btn-secondary anchor_click_function">Get in Touch</a>
                    </div>
                    <div class="tab-pane fade py-3" id="spa-wellness" role="tabpanel" aria-labelledby="spa-wellness-tab">
                        <div class="title fw-bold">Spa &amp; Wellness</div>
                        <p>{{ $guesthousedetails->spa_and_wellness_description }}</p> <a href="javascript:void(0)" data-url=" "
                            class="btn btn-secondary anchor_click_function">Get in Touch</a>
                    </div>
                    <div class="tab-pane fade py-3" id="activities-facilities" role="tabpanel"
                        aria-labelledby="activities-facilities-tab">
                        <div class="title fw-bold">Activities &amp; Facilities</div>
                        <p>{{ $guesthousedetails->activities_and_facilities_description }}</p> <a href="javascript:void(0)"
                            data-url=" " class="btn btn-secondary anchor_click_function">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="tailor-made py-5">
        <div class="container-fluid">
            <div class="tailor-heading text-center">
                <h2 class="black-color fw-bold"> <span class="primary-color">Guest House</span></h2>
                {{-- <section class="about-banner"
                    style="background-image: url('{{ asset('frontend/img/about/about2.png') }}')"> --}}

            </div>
            <div class="row px-3 my-5 packages_home">

                @foreach ($guest_house as $guest_housed)
                    <div class="col-lg-6 col-md-6 col-xl-3 hove_transition mt-3  ">


                        <a href="{{ route('guesthousedetails', ['id' => $guest_housed->id]) }}"
                            class="anchor_click_function" data-pagename="resort-details">
                            <div class="card-header overflow-hidden ">
                                <img src="{{ asset($guest_housed->thumbnail_image_link) }}" alt="resort"
                                    class="img-fluid">
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <?php  if($guest_housed->star_rating < 5){ ?>
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
                                    <h5 class="black-color fw-bold my-1">{{ $guest_housed->name }}</h5>
                                    <svg class="svg-inline--fa fa-location-dot " aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="location-dot" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                        </path>
                                    </svg>
                                    <span>{{ $guest_housed->address }}</span>
                                </div>
                                <div class="card-list  py-2">
                                    <ul class="bullets_list_resort">
                                        @php
                                        $descriptions = json_decode($guest_housed->short_description); @endphp
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
    <!--.............................................Newsletter-->

    <section class="joint_news px-5 py-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="d-flex align-items-center">
                        <svg class=" fa-envelope-open me-3 white-color" aria-hidden="true" width="60px"
                            height="50px" focusable="false" data-prefix="far" data-icon="envelope-open"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M255.4 48.2c.2-.1 .4-.2 .6-.2s.4 .1 .6 .2L460.6 194c2.1 1.5 3.4 3.9 3.4 6.5v13.6L291.5 355.7c-20.7 17-50.4 17-71.1 0L48 214.1V200.5c0-2.6 1.2-5 3.4-6.5L255.4 48.2zM48 276.2L190 392.8c38.4 31.5 93.7 31.5 132 0L464 276.2V456c0 4.4-3.6 8-8 8H56c-4.4 0-8-3.6-8-8V276.2zM256 0c-10.2 0-20.2 3.2-28.5 9.1L23.5 154.9C8.7 165.4 0 182.4 0 200.5V456c0 30.9 25.1 56 56 56H456c30.9 0 56-25.1 56-56V200.5c0-18.1-8.7-35.1-23.4-45.6L284.5 9.1C276.2 3.2 266.2 0 256 0z">
                            </path>
                        </svg>
                        <div class="pt-3 white-color">
                            <h5 class="fw-bold">Join our <span class="">Newsletter</span></h5>
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
    @include('frontend.layouts.footer')
    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepickers").datepicker();
        });
    </script>
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
