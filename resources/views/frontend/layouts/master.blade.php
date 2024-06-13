<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
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
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            /* background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif; */

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
            /* margin-right: 10px !important;
      padding-right: 30px !important; */
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
    <section class="header_swiper_slider ">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="layer_slider " src="{{ asset('frontend/img/expreance6.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img class="layer_slider " src="{{ asset('frontend/img/expreance6.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img class="layer_slider " src="{{ asset('frontend/img/expreance6.png') }}"
                        alt=""></div>
                <div class="swiper-slide"><img class="layer_slider " src="{{ asset('frontend/img/expreance6.png') }}"
                        alt=""></div>

            </div>
            <div class="swiper-button-next d-none"></div>
            <div class="swiper-button-prev d-none"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="header_nav container-fluid px-0">
        @include('frontend.layouts.header')
        <section class="hero header_hero overflow-hidden">
            <div class="header-content ">
                <div class="layer position-absolute">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-5120px, 0px, 0px); transition: all 0.25s ease 0s; width: 15360px;">
                                <div class="owl-item cloned" style="width: 2560px;">
                                    <div class="item header-img-1"
                                        style="background-image: url('img/experience-1.jpg')">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 2560px;">
                                    <div class="item header-img-1" style="background-image: url('img/experience2.jpg')">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 2560px;">
                                    <div class="item header-img-1" style="background-image: url('img/experience3.jpg')">
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 2560px;">
                                    <div class="item header-img-1" style="background-image: url('img/experience4.jpg')">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 2560px;">
                                    <div class="item header-img-1" style="background-image: url('img/experience5.jpg')">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 2560px;">
                                    <div class="item header-img-1" style="background-image: url('img/experience2.jpg')">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row row-first justify-content-between g-0">
                    <div class="col-12 col-md-4 col-lg-5 col-xl-5 d-flex flex-column  justify-content-center clip-div wow fadeInLeft"
                        data-wow-delay="0.1s" data-wow-duration="2s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <div class="header-title mx-sm-auto m-lg-0 text-center text-lg-start">
                            <h1 class="main_sec_heading mb-2">Experience Excellence of <br> the <span
                                    class="primary-color">"Tropical
                                    Paradise"</span></h1>
                            <p class="black-color mb-4"></p>
                            {{-- <a href="{{ route('experience') }}" class="btn btn-secondary  px-5">Explore</a> --}}
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-7 col-xl-4  d-flex flex-column justify-content-center wow fadeInRight"
                        data-wow-duration="2s" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                        <div class="header-form">
                            <div class="form-header text-center py-1">
                                <h5 class="white-color text-uppercase fw-bold fs-6 py-1">Request a Quote</h5>
                            </div>
                            @include('frontend.home.section.bookingform')
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </section>


    @yield('content')
    <!--.............................................Contact section-->
    @include('frontend.layouts.footer')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend/css/wow.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            mousewheel: true,
            keyboard: true,
          
           
        });
    </script>
    <script>
        var swiper2 = new Swiper(".mySwiper2", {
            slidesPerView: 1,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            loop: true,
           
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                1440: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                2560: {
                    slidesPerView: 5,
                    spaceBetween: 10,
                },
            },
        });
    </script>
    <script>
        // Initialize WOW.js
        new WOW().init();
    </script>

</body>

</html>
