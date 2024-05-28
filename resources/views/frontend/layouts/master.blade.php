<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;

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
                            <a href="https://holidayslinkmaldives.com/" class="btn btn-secondary  px-5">Explore</a>

                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-7 col-xl-4  d-flex flex-column justify-content-center wow fadeInRight"
                        data-wow-duration="2s" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                        <div class="header-form">
                            <div class="form-header text-center py-1">
                                <h5 class="white-color text-uppercase fw-bold fs-6 py-1">Request a Quote</h5>
                            </div>
                            <form class="submit_quote_form" novalidate="novalidate">
                                <div class="form-body py-3 px-4">
                                    <div class="row justify-content-between">
                                        <div class="col-6 input d-flex align-items-center">
                                            <!-- <i class="fa-solid fa-calendar-days"></i> -->
                                            <img src="{{ asset('frontend/img/form/calendar.png') }}" alt="Calendar"
                                                class="img-fluid">
                                            <input type="text" placeholder="Tentative Arrival Date"
                                                class="date_picker" name="date" aria-invalid="true">
                                            <!-- <label id="date-error" class="error" for="date">Please put Tentative Date</label>  -->

                                        </div>
                                        <div class="col-6 input d-flex align-items-center">
                                            <!-- <i class="fa-solid fa-moon"></i> -->
                                            <img src="{{ asset('frontend/img/form/sleeping.png') }}" alt="Sleeping"
                                                class="img-fluid">
                                            <!-- <input type="text" placeholder="Number Of Nights *"> -->
                                            <input type="number" placeholder="No of Nights" min="1"
                                                max="100" name="no_off_nights" aria-invalid="true">
                                            <!-- <label id="no_off_nights-error" class="error" for="no_off_nights">Please Enter Number of nights</label>  -->

                                            <!-- <i class="fa-solid fa-angle-down"></i> -->
                                        </div>
                                    </div>
                                    <div class="row justify-content-between my-4">
                                        <div class="col-6 input d-flex align-items-center">
                                            <!-- <i class="fa-solid fa-calendar-days"></i> -->
                                            <img src="{{ asset('frontend/img/form/couple.png') }}" alt="Couple"
                                                class="img-fluid">
                                            <!-- <input type="text" placeholder="Tentative Arrival Date">  -->
                                            <input type="number" placeholder="No of Adults" min="1"
                                                max="100" name="no_off_adults">

                                        </div>
                                        <div class="col-6 input d-flex align-items-center">
                                            <!-- <i class="fa-solid fa-calendar-days"></i> -->
                                            <img src="{{ asset('frontend/img/form/children.png') }}" alt="Children"
                                                class="img-fluid">
                                            <!-- <input type="text" placeholder="Tentative Arrival Date">  -->
                                            <input type="number" placeholder="No of Kids" min="0"
                                                max="100" name="no_off_kids">

                                        </div>
                                    </div>
                                    <div class="row justify-content-between my-4">
                                        <div class="col-6 input d-flex align-items-center">
                                            <!-- <i class="fa-solid fa-calendar-days"></i> -->
                                            <img src="{{ asset('frontend/img/form/couple.png') }}" alt="Couple"
                                                class="img-fluid">
                                            <!-- <input type="text" placeholder="Tentative Arrival Date">  -->
                                            <select class="form-select" aria-label="Interested In*"
                                                name="interested_in">
                                                <option value="">Interested In*</option>
                                                <option value="Local island Hotel">Local island Hotel</option>
                                                <option value="4 star resort">4 star resort</option>
                                                <option value="5 star resort">5 star resort</option>
                                                <option value="5 star luxury resort">5 star luxury resort</option>
                                            </select>
                                        </div>
                                        <div class="col-6 input d-flex align-items-center">
                                            <!-- <i class="fa-solid fa-calendar-days"></i> -->
                                            <img src="{{ asset('frontend/img/form/user.png') }}" alt="User"
                                                class="img-fluid">
                                            <input type="text" placeholder="Your Name*" name="name">

                                        </div>
                                    </div>

                                    <div class="row justify-content-between my-4">
                                        <div class="col-6 input d-flex align-items-center">
                                            <!-- <i class="fa-solid fa-calendar-days"></i> -->
                                            <img src="{{ asset('frontend/img/form/email.png') }}" alt="Email"
                                                class="img-fluid">
                                            <input type="text" placeholder="Your Email*" name="email">

                                        </div>
                                        <div class="col-6 input d-flex align-items-center">
                                            <!-- <i class="fa-solid fa-calendar-days"></i> -->
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
                                    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response"
                                        value="03AFcWeA7gbuqdjvSzLY4MMDtRS7EIeZ2zlRH7T-DCW11V3BjrhPFAI8hdrwcB0_y7lN79AqAUj9Lp8WzxYYUlHMY4ZHuLYKZSIjsDPixfKBhwCumKXNSB9v34WzIPfxInHXathWCyW-5lRtbyE2AGx8heR6nNapbWlRp3myTBc2Rrx212Vu4r5wMpCxz1bUQxK9DQDLYGzXyJKjCQNCkcNi53GD998KZDXpTeGohBfcyto0KxjdJuc0OiO8NeNyUVH7axjFG31asTJJdmKec7wcZbe7241qiyTx_TX9kzm_ZWoOi3OQ-yRFAZJxgDD7fIPti4uhgp2wUTOlvI1Qjhh-gpzbaYnOXfqSF8j2nannYoinFdNwUi5X0i3aOfmCay-VeNdKttWX1-W1XV4yb_FvZJjkImqjtJLgG-bgKTLMscTX-UkxIUgi2weCIuKKepdU4pYSTY9CgTfFyyG-vJ3YmN5a9GD8Oxh96oZ0Rkbggj4HQPjUmKavFTQQhYvSa3hDN55wFu2rNyPzhlDUnwuVTx0_KmojmQqxNz5LBkdgKwhsXqaAQsaxOhsDRphV8pTnCCydS25jM8B4lINQCTbZtHoHwY7fbUNr-VxnDkFE9Ah22mjbxZYMrgBrFDoSnfU04fZB_EgKal3yXNy7TholEUZPojEQeK042MIZedcew2ty5is0qGn-lY4Eib2-qxQOCyECh0peJb6cojpYG5vzgGCFbfTAwASmwNC5krAvQWGqL7iHtM6alsONh3_50Ef0lWFzO_4SPbNzXJv9adxSuKNkKzRkTwYtZzLYH6MDZaKdo9D3YNLbx8f5m64v_43sOu23raC9kZD6Uq0kuNF7mOqehiF0qlZ3GX76nRWKIpJTUPAy6w7spzDU6GwjslVXVPYJd5FGELnwouHmg6Axvm8-faYSCVDCfrzA3YK3X8XJ8dn60wjZOpjWuFTyE_alimywNu3YgJCs7so1c6dot56Q6LlN7pLSe3B92uF4Hv14L9MKU5t-qtWtvcLyUiqT4PW0BpgZ_WrL6_rUnKfjvpf4LASaWkeEBGgZCy4bRkXP9KrhmTUR1patGpwWBFHyRTrQXuXmnffm9CtMhbTD4jgtz-6oErBcARtJW1SOUNCJ2WC_-MS4qUOYEiIaKtM-LO7CyjwnE6EMZ1n-ImWPNsg7J47VhQ1Z_7bobJJyKK2mxUE7Zx4mDeUsWyor8pb8aBmw7j6-C9qKF52iBsfvZXqijMamAuuzWehiorKRA3ci2Wm2xlEpwRe7sS07FJkwefJ0qXPZWbsOSP2ND6Dn3CnnyMxyCdCMi-dE_qhpWcUI6GNziuHSiTP7Z-ucikrdPRRCzO0X5RHdtudakFsWpWJXo5SYsNwLx54f-LMFljkdo3AE-a5BTWYs4t__NvB5Oxj3Db0QPv8kda_fydbOXgnKlLxUK3A4_o-igihsiGMniOSB47GcGFgcUPsoWNxr4va6Bdr9WvKsflzm8penVCezYiiSUu6VecgRHMlovkyemKc3Q5FEPdpEE1q3ySdrrNbrf2RZJsDbBB4n7JVH9ihk8XkAY32d19akexmjIrpqnpbjArwNfx0DBFB4doKT2v_jmLlidO3529o3IZgUb1ULaGJ8b2oUMlWjBxRvM29EnCzckOYq-IpcwPC8tePgNwQIS3pTNnYsl0tjVJH2of6sXk56h1eLXoJr-S-dFAAre4CiA_6Is">
                                    <input type="hidden" name="action" value="validate_captcha">
                                    <div class="mt-3 text-center">
                                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                                    </div>
                                </div>
                                <input type="hidden" class="csrf_test_name" name="csrf_test_name"
                                    value="310c4ba6e4403bdee3cef53ce23f09c7">
                                <input type="hidden" name="resort_name" value="Home Page">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </section>


    @yield('content')
    <!--.............................................Contact section-->

    @include('frontend.layouts.footer')
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
