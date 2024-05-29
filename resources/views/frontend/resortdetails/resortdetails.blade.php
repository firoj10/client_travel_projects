<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
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
        <div class="nav-top">
            <div class="d-lg-flex d-md-flex d-sm-block justify-content-between">
                <div class="d-lg-flex  d-md-flex d-sm-block align-items-center">
                    <div class="fab_icons_div">
                        <svg class="svg-inline--fa fa-phone " aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z">
                            </path>
                        </svg>

                        <span> <a href="" class="text-white">+960-9506464</a></span>
                    </div>
                    <div class="fab_icons_div">
                        <svg class="svg-inline--fa fa-envelope " aria-hidden="true" focusable="false" data-prefix="far"
                            data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z">
                            </path>
                        </svg><!-- <i class="fa-regular fa-envelope "></i> Font Awesome fontawesome.com -->
                        <span> <a href="mailto:info@holidayslinkmaldives.com"
                                class="text-white">info@holidayslinkmaldives.com</a></span>
                    </div>
                    <div class="fab_icons_div">
                        <svg class="svg-inline--fa fa-location-dot " aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 384 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                            </path>
                        </svg><!-- <i class="fa-solid fa-location-dot "></i> Font Awesome fontawesome.com -->
                        <span>Lot # 10398 Ahigas Magu Hulhumale K. Male Maldives</span>
                    </div>
                </div>
                <div class="d-lg-flex fab_icons_div  d-md-flex d-lg-block d-md-block d-sm-none d-none">
                    <span class="">English</span>
                    <img src="https://holidayslinkmaldives.com/assets/img/en.png" alt="country flag">
                    <div class="social-icons icons_links ms-4">
                        <a href="https://www.facebook.com/Holidayslinkmaldives/" target="_blank"
                            aria-label="Facebook"><img src="https://holidayslinkmaldives.com/assets/img/fb.png"
                                alt="fb" class="img-fluid"></a>
                        <a href="https://www.youtube.com/@HolidaysLinkMaldives" target="_blank"
                            aria-label="YouTube"><img src="https://holidayslinkmaldives.com/assets/img/yt.png"
                                alt="fb" class="img-fluid"></a>
                        <a href="https://www.instagram.com/holidayslinkmaldives/" target="_blank"
                            aria-label="Instagram"><img src="https://holidayslinkmaldives.com/assets/img/inst.png"
                                alt="fb" class="img-fluid"></a>
                        <a href="tel:+960-9506464" target="_blank" aria-label="WhatsApp"><img
                                src="https://holidayslinkmaldives.com/assets/img/whatsapp.png" alt="fb"
                                class="img-fluid"></a>
                        <a href="https://www.tiktok.com/@holidayslinkmaldives" target="_blank" aria-label="Tiktok"><img
                                src="https://holidayslinkmaldives.com/assets/img/header-icon-tiktok.png" alt="fb"
                                class="img-fluid"></a>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- topbar end-->
    <!-- navbar ...................start.-->
    <section class=" container-fluid px-0">
        <nav class="navbar navbar-expand-lg ">
            <a href="" class="navbar-brand">
                <!-- <img src="https://holidayslinkmaldives.com/public/uploads/logo.webp" alt="logo"> -->
                <img src="{{ asset('frontend/img/11.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto gap-3 me-3">
                    <li class="nav-item">
                        <a href="" class="nav-link">Home</a>
                        </p>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link anchor_click_function" data-url=""
                            data-pagename="resorts">Resorts</a>
                        </p>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link anchor_click_function" data-url=""
                            data-pagename="packages">Packages</a>
                        </p>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link anchor_click_function" data-url=""
                            data-pagename="experience">Experience</a>
                        </p>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link anchor_click_function" data-url=""
                            data-pagename="about">About Us</a>
                        </p>
                </ul>
                <div class="nav-buttons ">
                    <a href="javascript:void(0)" data-url=""
                        class="btn btn-secondary  contact_bt mb-lg-0 mb-md-0 mb-sm-2 mb-2 anchor_click_function"
                        data-pagename="contact">Contact
                        Us</a>
                    <!-- <a href="https://booking.holidayslinkmaldives.com/" target="_blank" class="btn btn-primary">B<small>2</small>B
              Portal</a> -->
                </div>
            </div>
        </nav>
    </section>
    <!-- navbar ................... end.-->


    <!-- Swiper -->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="share">
                    <span class="black-color fw-semibold">Share on</span>
                    <img src="https://holidayslinkmaldives.com/assets/img/share.png" alt="fb"
                        class="img-fluid ms-3 me-3">
                    <a href="" target="_blank" aria-label="Facebook"><img
                            src="https://holidayslinkmaldives.com/assets/img/fb.png" alt="fb"
                            class="img-fluid"></a>
                    <a href="" target="_blank" aria-label="YouTube"><img
                            src="https://holidayslinkmaldives.com/assets/img/yt.png" alt="fb"
                            class="img-fluid"></a>
                    <a href="" target="_blank" aria-label="Instagram"><img
                            src="https://holidayslinkmaldives.com/assets/img/inst.png" alt="fb"
                            class="img-fluid"></a>
                    <a href="" target="_blank" aria-label="WhatsApp"><img
                            src="https://holidayslinkmaldives.com/assets/img/whatsapp.png" alt="fb"
                            class="img-fluid"></a>
                    <a href="" target="_blank" aria-label="Tiktok"><img
                            src="https://holidayslinkmaldives.com/assets/img/Tiktok.png" alt="fb"
                            class="img-fluid"></a>
                </div>
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                    class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        @php
                        $gallerys = json_decode($stays->gallery_images_link); @endphp
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
                        $gallerys = json_decode($stays->gallery_images_link); @endphp
                        @foreach ($gallerys as $gallery)
                            <div class="swiper-slide">
                                <img src="{{ asset('gallery/' . $gallery) }}" />
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="black-color island_resort">{{$stays->name}}</h2>
                <div class="rating-star">
                    <img src="https://holidayslinkmaldives.com/assets/img/4-star.png" alt="star"
                        class="img-fluid">
                </div>
                <div class="location mb-4">
                    <svg class="svg-inline--fa fa-location-dot" aria-hidden="true" style="color: #E50027;"
                        focusable="false" data-prefix="fas" data-icon="location-dot" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                        </path>
                    </svg>
                    <span class="ms-2">{{$stays->address}}</span>
                </div>
                <div class="header-form px-0">
                    <div class="form-header text-center py-1">
                        <h5 class="white-color text-uppercase fw-bold fs-6 py-1">Request a Quote</h5>
                    </div>
                    <form class="submit_quote_form" novalidate="novalidate">
                        <div class="form-body py-3 px-4">
                            <div class="row justify-content-between">
                                <div class="col-6 input d-flex align-items-center">

                                    <img src="https://holidayslinkmaldives.com/assets/img/calendar.png" alt="Calendar"
                                        class="img-fluid">
                                    <input type="text" placeholder="Tentative Arrival Date" class="date_picker"
                                        name="date" aria-invalid="true">

                                </div>
                                <div class="col-6 input d-flex align-items-center">
                                    <img src="https://holidayslinkmaldives.com/assets/img/sleeping.png" alt="Sleeping"
                                        class="img-fluid">
                                    <input type="number" placeholder="No of Nights" min="1" max="100"
                                        name="no_off_nights" aria-invalid="true">

                                </div>
                            </div>
                            <div class="row justify-content-between my-4">
                                <div class="col-6 input d-flex align-items-center">
                                    <img src="https://holidayslinkmaldives.com/assets/img/couple.png" alt="Couple"
                                        class="img-fluid">
                                    <input type="number" placeholder="No of Adults" min="1" max="100"
                                        name="no_off_adults">

                                </div>
                                <div class="col-6 input d-flex align-items-center">
                                    <img src="https://holidayslinkmaldives.com/assets/img/children.png" alt="Children"
                                        class="img-fluid">
                                    <input type="number" placeholder="No of Kids" min="0" max="100"
                                        name="no_off_kids">

                                </div>
                            </div>
                            <div class="row justify-content-between my-4">
                                <div class="col-6 input d-flex align-items-center">
                                    <img src="https://holidayslinkmaldives.com/assets/img/couple.png" alt="Couple"
                                        class="img-fluid">
                                    <select class="form-select" aria-label="Interested In*" name="interested_in">
                                        <option value="">Interested In*</option>
                                        <option value="Local island Hotel">Local island Hotel</option>
                                        <option value="4 star resort">4 star resort</option>
                                        <option value="5 star resort">5 star resort</option>
                                        <option value="5 star luxury resort">5 star luxury resort</option>
                                    </select>
                                </div>
                                <div class="col-6 input d-flex align-items-center">
                                    <img src="https://holidayslinkmaldives.com/assets/img/user.png" alt="User"
                                        class="img-fluid">
                                    <input type="text" placeholder="Your Name*" name="name">

                                </div>
                            </div>

                            <div class="row justify-content-between my-4">
                                <div class="col-6 input d-flex align-items-center">
                                    <img src="https://holidayslinkmaldives.com/assets/img/email.png" alt="Email"
                                        class="img-fluid">
                                    <input type="text" placeholder="Your Email*" name="email">

                                </div>
                                <div class="col-6 input d-flex align-items-center">
                                    <img src="https://holidayslinkmaldives.com/assets/img/phone.png" alt="Phone"
                                        class="img-fluid">
                                    <input type="num" placeholder="Phone / Whatsapp*" name="phone_number">

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
    <!-- Swiper -->
    {{-- <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="share">
                    <span class="black-color fw-semibold">Share on</span>
                    <img src="https://holidayslinkmaldives.com/assets/img/share.png" alt="fb"
                        class="img-fluid ms-3 me-3">
                    <a href="https://www.facebook.com/Holidayslinkmaldives/" target="_blank" aria-label="Facebook"><img
                            src="https://holidayslinkmaldives.com/assets/img/fb.png" alt="fb" class="img-fluid"></a>
                    <a href="https://www.youtube.com/@HolidaysLinkMaldives" target="_blank" aria-label="YouTube"><img
                            src="https://holidayslinkmaldives.com/assets/img/yt.png" alt="fb" class="img-fluid"></a>
                    <a href="https://www.instagram.com/holidayslinkmaldives/" target="_blank"
                        aria-label="Instagram"><img src="https://holidayslinkmaldives.com/assets/img/inst.png" alt="fb"
                            class="img-fluid"></a>
                    <a href="tel:+960-9506464" target="_blank" aria-label="WhatsApp"><img
                            src="https://holidayslinkmaldives.com/assets/img/whatsapp.png" alt="fb"
                            class="img-fluid"></a>
                    <a href="https://www.tiktok.com/@holidayslinkmaldives" target="_blank" aria-label="Tiktok"><img
                            src="https://holidayslinkmaldives.com/assets/img/Tiktok.png" alt="fb" class="img-fluid"></a>
                </div>
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper new_slide">
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="black-color island_resort">Kuredu Island Resort</h2>
                <div class="rating-star">
                    <img src="https://holidayslinkmaldives.com/assets/img/4-star.png" alt="star" class="img-fluid">
                </div>
                <div class="location mb-4">
                    <svg class="svg-inline--fa fa-location-dot" aria-hidden="true" style="color: #E50027;"
                        focusable="false" data-prefix="fas" data-icon="location-dot" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                        </path>
                    </svg>
                    <span class="ms-2"></span>
                </div>
                <div class="header-form px-0">
                    <div class="form-header text-center py-1">
                        <h5 class="white-color text-uppercase fw-bold fs-6 py-1">Request a Quote</h5>
                    </div>
                    <form class="submit_quote_form" novalidate="novalidate">
                        <div class="form-body py-3 px-4">
                            <div class="row justify-content-between">
                                <div class="col-6 input d-flex align-items-center">

                                    <img src="https://holidayslinkmaldives.com/assets/img/calendar.png" alt="Calendar"
                                        class="img-fluid">
                                    <input type="text" placeholder="Tentative Arrival Date" class="date_picker"
                                        name="date" aria-invalid="true">

                                </div>
                                <div class="col-6 input d-flex align-items-center">
                                    <img src="https://holidayslinkmaldives.com/assets/img/sleeping.png" alt="Sleeping"
                                        class="img-fluid">
                                    <input type="number" placeholder="No of Nights" min="1" max="100"
                                        name="no_off_nights" aria-invalid="true">

                                </div>
                            </div>
                            <div class="row justify-content-between my-4">
                                <div class="col-6 input d-flex align-items-center">
                                    <img src="https://holidayslinkmaldives.com/assets/img/couple.png" alt="Couple"
                                        class="img-fluid">
                                    <input type="number" placeholder="No of Adults" min="1" max="100"
                                        name="no_off_adults">

                                </div>
                                <div class="col-6 input d-flex align-items-center">
                                    <img src="https://holidayslinkmaldives.com/assets/img/children.png" alt="Children"
                                        class="img-fluid">
                                    <input type="number" placeholder="No of Kids" min="0" max="100" name="no_off_kids">

                                </div>
                            </div>
                            <div class="row justify-content-between my-4">
                                <div class="col-6 input d-flex align-items-center">
                                    <img src="https://holidayslinkmaldives.com/assets/img/couple.png" alt="Couple"
                                        class="img-fluid">
                                    <select class="form-select" aria-label="Interested In*" name="interested_in">
                                        <option value="">Interested In*</option>
                                        <option value="Local island Hotel">Local island Hotel</option>
                                        <option value="4 star resort">4 star resort</option>
                                        <option value="5 star resort">5 star resort</option>
                                        <option value="5 star luxury resort">5 star luxury resort</option>
                                    </select>
                                </div>
                                <div class="col-6 input d-flex align-items-center">
                                    <img src="https://holidayslinkmaldives.com/assets/img/user.png" alt="User"
                                        class="img-fluid">
                                    <input type="text" placeholder="Your Name*" name="name">

                                </div>
                            </div>

                            <div class="row justify-content-between my-4">
                                <div class="col-6 input d-flex align-items-center">
                                    <img src="https://holidayslinkmaldives.com/assets/img/email.png" alt="Email"
                                        class="img-fluid">
                                    <input type="text" placeholder="Your Email*" name="email">

                                </div>
                                <div class="col-6 input d-flex align-items-center">
                                    <img src="https://holidayslinkmaldives.com/assets/img/phone.png" alt="Phone"
                                        class="img-fluid">
                                    <input type="num" placeholder="Phone / Whatsapp*" name="phone_number">

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 text-area">
                                    <textarea width="100%" name="description" id="" cols="20" rows="1"
                                        placeholder="Please advise your required villa category."
                                        aria-invalid="false"></textarea>
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
    </div> --}}

    <!-- details-description  start-->
    {{-- <section class="tabs package-tabs">
        <div class="container-fluid p-0 px-3 py-4" style="background-color: #F5F5F5;">


            <div class="content">

                <nav>
                    <div class="nights-package" >
                        <button class="packeg_btn" id="nav-home-tab14" data-bs-toggle="tab" data-bs-target="#nav-home14"
                            type="button" role="tab" aria-controls="nav-home" aria-selected="true">04 Nights
                            Package</button>

                    </div>
                </nav>
                <div class="tab-content p-3" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="nav-home14" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-4 order-2 order-lg-1">
                                <div class="main_heading_body">
                                    <p class="fw-semibold fs-5"></p>
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
                                        <p class="mb-0"><i class="fa fa-check-square-o px-2"></i> Seaplane or Speedboat
                                            Transfer<br>
                                        </p>
                                        <p class="mb-0"><i class="fa fa-check-square-o px-2"></i> Seaplane or Speedboat
                                            Transfer<br>
                                        </p>
                                    </ul>
                                </div>


                            </div>
                            <div class="col-12 col-md-4 col-lg-4 order-2 order-lg-1">
                                <div class="main_heading_body">
                                    <p class="fw-semibold fs-5"></p>
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
                                        <p class="mb-0"><i class="fa fa-check-square-o px-2"></i> Seaplane or Speedboat
                                            Transfer<br>
                                        </p>
                                    </ul>
                                </div>


                            </div>
                            <div
                                class="col-12 col-md-4 col-lg-4 order-1 order-lg-2 d-flex align-items-center justify-content-center mt-5 mt-lg-0">

                                <div class="package-pricing text-center">
                                    <div class="pricing-header py-4 px-5 white-color ">

                                        <span><img src="https://holidayslinkmaldives.com/assets/img/percent.png" alt=""
                                                class="me-3"> UPTO <strong>30%</strong> OFF</span>
                                    </div>

                                    <div class="pricing-body ">
                                        <h2 class="dark-blue-color fw-bold fs-1">$1599/ <sub>Couple</sub></h2>
                                        <div class="my-2">
                                            <!-- <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> -->
                                            <img src="https://holidayslinkmaldives.com/assets/img/wpp.png" alt="wapp"
                                                class="img-fluid">
                                            <span class="ms-2">+960-9506464</span>
                                        </div>
                                        <div>
                                            <img src="https://holidayslinkmaldives.com/assets/img/calls.png" alt="calls"
                                                class="img-fluid">
                                            <span class="ms-2">+960-9506464</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section> --}}

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

                        <p>{{ $stays->overview_description }}</p>
                        <a href="javascript:void(0)" data-url=" "
                            class="btn btn-secondary anchor_click_function">Get in Touch</a>
                    </div>
                    <div class="tab-pane fade py-3" id="accommodation" role="tabpanel"
                        aria-labelledby="accommodation-tab">
                        <div class="title fw-bold">Accommodation Content</div>

                        <p>{{ $stays->accommodation_description }}</p>
                        <a href="javascript:void(0)" data-url=" "
                            class="btn btn-secondary anchor_click_function">Get in Touch</a>
                    </div>
                    <div class="tab-pane fade py-3" id="spa-wellness" role="tabpanel" aria-labelledby="spa-wellness-tab">
                        <div class="title fw-bold">Spa &amp; Wellness</div>
                        <p>{{ $stays->spa_and_wellness_description }}</p> <a href="javascript:void(0)" data-url=" "
                            class="btn btn-secondary anchor_click_function">Get in Touch</a>
                    </div>
                    <div class="tab-pane fade py-3" id="activities-facilities" role="tabpanel"
                        aria-labelledby="activities-facilities-tab">
                        <div class="title fw-bold">Activities &amp; Facilities</div>
                        <p>{{ $stays->activities_and_facilities_description }}</p> <a href="javascript:void(0)"
                            data-url=" " class="btn btn-secondary anchor_click_function">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tailor-made py-5">
        <div class="container-fluid">
            <div class="tailor-heading text-center">
                <h2 class="black-color fw-bold">Tailor-Made Holidays <span class="primary-color">Packages</span></h2>
                <img src="https://holidayslinkmaldives.com/assets/img/subtitle-vector.webp" alt="vector"
                    class="img-fluid">
            </div>
            <div class="row px-3 my-5 packages_home">
               
                @foreach ($mainresorts as $mainresort)
                <div class="col-lg-6 col-md-6 col-xl-3 hove_transition mt-3  ">
                    <a href="{{route('resortdetails', $mainresort->id )}}" class="anchor_click_function" data-pagename="resort-details">
                        <div class="card-header overflow-hidden ">
                            <img src="{{asset($mainresort->thumbnail_image_link)}}" alt="resort" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <div class="rating-star py-2">
                                    <img src="{{ asset('frontend/img/resorts/4-star.png') }}" alt="star"
                                        class="img-fluid">
                                </div>
                                <h5 class="black-color fw-bold my-1">{{$mainresort->name}}</h5>
                                <svg class="svg-inline--fa fa-location-dot " aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="location-dot" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                    </path>
                                </svg>
                                <span>{{$mainresort->address}}</span>
                            </div>
                            <div class="card-list  py-2">
                                <ul class="bullets_list_resort">
                                   @php
                                   $descriptions =  json_decode($mainresort->short_description); @endphp 
                                       @foreach($descriptions as $description)
        
                                       <p class="mb-0"><i class="fa fa-check-square-o px-2"></i>{{$description}} </p>
        
                                       @endforeach
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
               
                {{-- <div class="col-md-6 col-lg-4 col-xl-3 mt-4 position-relative hove_transition">
                    <a href="javascript:void(0)" class="anchor_click_function"
                        data-url="https://holidayslinkmaldives.com/package/meeru-island-resort"
                        data-pagename="package-details">
                        <div class="card-header overflow-hidden">
                            <img src="https://holidayslinkmaldives.com/public/uploads/resorts-23.jpg" alt="resort-img"
                                class="img-fluid">
                        </div>
                    </a>
                    <div class="card-body"><a href="javascript:void(0)" class="anchor_click_function"
                            data-url="https://holidayslinkmaldives.com/package/meeru-island-resort"
                            data-pagename="package-details">
                            <div class="text-center">
                                <div class="rating-star">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                </div>
                                <h5 class="black-color fw-bold my-1">Meeru Island Resort</h5>
                                <svg class="svg-inline--fa fa-location-dot me-1" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="location-dot" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-location-dot me-1"></i> Font Awesome fontawesome.com -->
                                <span class="text-black">Kaafu Atoll </span>
                            </div>
                            <div class="card-list ps-3 py-2 text-black">
                                <ul class="bullets_list_package">
                                    <p><i class="fa fa-check-square-o px-2"></i>
                                        <span> Jacuzzi Water Villa <br>
                                        </span>
                                    </p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> Buffet Breakfast, Lunch &amp;
                                            Dinner
                                            &nbsp;<br>
                                        </span></p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> Return Seaplane Transfer
                                            (Airport –
                                            Resort – Airport)<br>
                                        </span></p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> All Applicable Taxes <br>
                                        </span></p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> </span><span
                                            style="font-size: 11pt; line-height: 107%; font-family: Calibri, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Meet
                                            and assist on arrival and departure</span></p>

                                </ul>
                            </div>
                        </a>
                        <div class="text-center py-3"><a href="javascript:void(0)" class="anchor_click_function"
                                data-url="https://holidayslinkmaldives.com/package/meeru-island-resort"
                                data-pagename="package-details">

                            </a><a href="javascript:void(0)" class="btn btn-primary anchor_click_function"
                                data-url="https://holidayslinkmaldives.com/package/meeru-island-resort"
                                data-pagename="package-details">More Details</a>
                        </div>
                    </div>
                    <div class="package-detail position-absolute ps-3">
                        <span class="white-color me-2">04 Nights Package</span>

                    </div>

                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mt-4 position-relative hove_transition">
                    <a href="javascript:void(0)" class="anchor_click_function"
                        data-url="https://holidayslinkmaldives.com/package/sun-siyam-iru-veli"
                        data-pagename="package-details">
                        <div class="card-header overflow-hidden">
                            <img src="https://holidayslinkmaldives.com/public/uploads/resorts-20.jpg" alt="resort-img"
                                class="img-fluid">
                        </div>
                    </a>
                    <div class="card-body"><a href="javascript:void(0)" class="anchor_click_function"
                            data-url="https://holidayslinkmaldives.com/package/sun-siyam-iru-veli"
                            data-pagename="package-details">
                            <div class="text-center">
                                <div class="rating-star">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                </div>
                                <h5 class="black-color fw-bold my-1">Sun Siyam Iru Veli</h5>
                                <svg class="svg-inline--fa fa-location-dot me-1" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="location-dot" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-location-dot me-1"></i> Font Awesome fontawesome.com -->
                                <span class="text-black">Dhaalu Atoll</span>
                            </div>
                            <div class="card-list ps-3 py-2 text-black">
                                <ul class="bullets_list_package">
                                    <p><i class="fa fa-check-square-o px-2"></i>
                                        <span> Jacuzzi Water Villa <br>
                                        </span>
                                    </p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> Buffet Breakfast, Lunch &amp;
                                            Dinner
                                            &nbsp;<br>
                                        </span></p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> Return Seaplane Transfer
                                            (Airport –
                                            Resort – Airport)<br>
                                        </span></p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> All Applicable Taxes <br>
                                        </span></p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> </span><span
                                            style="font-size: 11pt; line-height: 107%; font-family: Calibri, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Meet
                                            and assist on arrival and departure</span></p>
                                </ul>
                            </div>
                        </a>
                        <div class="text-center py-3"><a href="javascript:void(0)" class="anchor_click_function"
                                data-url="https://holidayslinkmaldives.com/package/sun-siyam-iru-veli"
                                data-pagename="package-details">

                            </a><a href="javascript:void(0)" class="btn btn-primary anchor_click_function"
                                data-url="https://holidayslinkmaldives.com/package/sun-siyam-iru-veli"
                                data-pagename="package-details">More Details</a>
                        </div>
                    </div>
                    <div class="package-detail position-absolute ps-3">
                        <span class="white-color me-2">04 Nights Package</span>

                    </div>

                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mt-4 position-relative hove_transition">
                    <a href="javascript:void(0)" class="anchor_click_function"
                        data-url="https://holidayslinkmaldives.com/package/diamonds-athuruga-maldives"
                        data-pagename="package-details">
                        <div class="card-header overflow-hidden">
                            <img src="https://holidayslinkmaldives.com/public/uploads/resorts-19.jpg" alt="resort-img"
                                class="img-fluid">
                        </div>
                    </a>
                    <div class="card-body"><a href="javascript:void(0)" class="anchor_click_function"
                            data-url="https://holidayslinkmaldives.com/package/diamonds-athuruga-maldives"
                            data-pagename="package-details">
                            <div class="text-center">
                                <div class="rating-star">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                </div>
                                <h5 class="black-color fw-bold my-1">Diamonds Athuruga Maldives</h5>
                                <svg class="svg-inline--fa fa-location-dot me-1" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="location-dot" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-location-dot me-1"></i> Font Awesome fontawesome.com -->
                                <span class="text-black">South Ari Atoll</span>
                            </div>
                            <div class="card-list ps-3 py-2 text-black">
                                <ul class="bullets_list_package">
                                    <p><i class="fa fa-check-square-o px-2"></i>
                                        <span> Jacuzzi Water Villa <br>
                                        </span>
                                    </p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> Buffet Breakfast, Lunch &amp;
                                            Dinner
                                            &nbsp;<br>
                                        </span></p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> Return Seaplane Transfer
                                            (Airport –
                                            Resort – Airport)<br>
                                        </span></p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> All Applicable Taxes <br>
                                        </span></p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> </span><span
                                            style="font-size: 11pt; line-height: 107%; font-family: Calibri, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Meet
                                            and assist on arrival and departure</span></p>
                                </ul>
                            </div>
                        </a>
                        <div class="text-center py-3"><a href="javascript:void(0)" class="anchor_click_function"
                                data-url="https://holidayslinkmaldives.com/package/diamonds-athuruga-maldives"
                                data-pagename="package-details">

                            </a><a href="javascript:void(0)" class="btn btn-primary anchor_click_function"
                                data-url="https://holidayslinkmaldives.com/package/diamonds-athuruga-maldives"
                                data-pagename="package-details">More Details</a>
                        </div>
                    </div>
                    <div class="package-detail position-absolute ps-3">
                        <span class="white-color me-2">04 Nights Package</span>

                    </div>

                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mt-4 position-relative hove_transition">
                    <a href="javascript:void(0)" class="anchor_click_function"
                        data-url="https://holidayslinkmaldives.com/package/sandies-bathala-maldives"
                        data-pagename="package-details">
                        <div class="card-header overflow-hidden">
                            <img src="https://holidayslinkmaldives.com/public/uploads/resorts-17.webp"
                                alt="resort-img" class="img-fluid">
                        </div>
                    </a>
                    <div class="card-body"><a href="javascript:void(0)" class="anchor_click_function"
                            data-url="https://holidayslinkmaldives.com/package/sandies-bathala-maldives"
                            data-pagename="package-details">
                            <div class="text-center">
                                <div class="rating-star">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                </div>
                                <h5 class="black-color fw-bold my-1">Sandies Bathala Maldives</h5>
                                <svg class="svg-inline--fa fa-location-dot me-1" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="location-dot" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-location-dot me-1"></i> Font Awesome fontawesome.com -->
                                <span class="text-black">North Ari Atoll </span>
                            </div>
                            <div class="card-list ps-3 py-2 text-black">
                                <ul class="bullets_list_package">
                                    <p><i class="fa fa-check-square-o px-2"></i>
                                        <span> Jacuzzi Water Villa <br>
                                        </span>
                                    </p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> Buffet Breakfast, Lunch &amp;
                                            Dinner
                                            &nbsp;<br>
                                        </span></p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> Return Seaplane Transfer
                                            (Airport –
                                            Resort – Airport)<br>
                                        </span></p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> All Applicable Taxes <br>
                                        </span></p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> </span><span
                                            style="font-size: 11pt; line-height: 107%; font-family: Calibri, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Meet
                                            and assist on arrival and departure</span></p>
                                </ul>
                            </div>
                        </a>
                        <div class="text-center py-3"><a href="javascript:void(0)" class="anchor_click_function"
                                data-url="https://holidayslinkmaldives.com/package/sandies-bathala-maldives"
                                data-pagename="package-details">

                            </a><a href="javascript:void(0)" class="btn btn-primary anchor_click_function"
                                data-url="https://holidayslinkmaldives.com/package/sandies-bathala-maldives"
                                data-pagename="package-details">More Details</a>
                        </div>
                    </div>
                    <div class="package-detail position-absolute ps-3">
                        <span class="white-color me-2">04 Nights Package</span>

                    </div>

                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mt-4 position-relative hove_transition">
                    <a href="javascript:void(0)" class="anchor_click_function"
                        data-url="https://holidayslinkmaldives.com/package/sun-siyam-olhuveli"
                        data-pagename="package-details">
                        <div class="card-header overflow-hidden">
                            <img src="https://holidayslinkmaldives.com/public/uploads/resorts-16.jpg" alt="resort-img"
                                class="img-fluid">
                        </div>
                    </a>
                    <div class="card-body"><a href="javascript:void(0)" class="anchor_click_function"
                            data-url="https://holidayslinkmaldives.com/package/sun-siyam-olhuveli"
                            data-pagename="package-details">
                            <div class="text-center">
                                <div class="rating-star">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                </div>
                                <h5 class="black-color fw-bold my-1">Sun Siyam Olhuveli</h5>
                                <svg class="svg-inline--fa fa-location-dot me-1" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="location-dot" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-location-dot me-1"></i> Font Awesome fontawesome.com -->
                                <span class="text-black">South Male Atoll</span>
                            </div>
                            <div class="card-list ps-3 py-2 text-black">
                                <ul class="bullets_list_package">
                                    <p><i class="fa fa-check-square-o px-2"></i>
                                        <span> Jacuzzi Water Villa <br>
                                        </span>
                                    </p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> Buffet Breakfast, Lunch &amp;
                                            Dinner
                                            &nbsp;<br>
                                        </span></p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> Return Seaplane Transfer
                                            (Airport –
                                            Resort – Airport)<br>
                                        </span></p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> All Applicable Taxes <br>
                                        </span></p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> </span><span
                                            style="font-size: 11pt; line-height: 107%; font-family: Calibri, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Meet
                                            and assist on arrival and departure</span></p>

                                </ul>
                            </div>
                        </a>
                        <div class="text-center py-3"><a href="javascript:void(0)" class="anchor_click_function"
                                data-url="https://holidayslinkmaldives.com/package/sun-siyam-olhuveli"
                                data-pagename="package-details">

                            </a><a href="javascript:void(0)" class="btn btn-primary anchor_click_function"
                                data-url="https://holidayslinkmaldives.com/package/sun-siyam-olhuveli"
                                data-pagename="package-details">More Details</a>
                        </div>
                    </div>
                    <div class="package-detail position-absolute ps-3">
                        <span class="white-color me-2">04 Nights Package</span>

                    </div>

                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mt-4 position-relative hove_transition">
                    <a href="javascript:void(0)" class="anchor_click_function"
                        data-url="https://holidayslinkmaldives.com/package/siyam-world-maldives"
                        data-pagename="package-details">
                        <div class="card-header overflow-hidden">
                            <img src="https://holidayslinkmaldives.com/public/uploads/resorts-15.webp"
                                alt="resort-img" class="img-fluid">
                        </div>
                    </a>
                    <div class="card-body"><a href="javascript:void(0)" class="anchor_click_function"
                            data-url="https://holidayslinkmaldives.com/package/siyam-world-maldives"
                            data-pagename="package-details">
                            <div class="text-center">
                                <div class="rating-star">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                    <img src="https://holidayslinkmaldives.com/assets/img/star.webp" alt="star"
                                        class="img-fluid">
                                </div>
                                <h5 class="black-color fw-bold my-1">Siyam World Maldives</h5>
                                <svg class="svg-inline--fa fa-location-dot me-1" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="location-dot" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-location-dot me-1"></i> Font Awesome fontawesome.com -->
                                <span class="text-black">Dhigurah, Noonu Atoll</span>
                            </div>
                            <div class="card-list ps-3 py-2 text-black">
                                <ul class="bullets_list_package">
                                    <p><i class="fa fa-check-square-o px-2"></i>
                                        <span> Jacuzzi Water Villa <br>
                                        </span>
                                    </p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> Buffet Breakfast, Lunch &amp;
                                            Dinner
                                            &nbsp;<br>
                                        </span></p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> Return Seaplane Transfer
                                            (Airport –
                                            Resort – Airport)<br>
                                        </span></p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> All Applicable Taxes <br>
                                        </span></p>
                                    <p><i class="fa fa-check-square-o px-2"></i><span> </span><span
                                            style="font-size: 11pt; line-height: 107%; font-family: Calibri, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Meet
                                            and assist on arrival and departure</span></p>

                                </ul>
                            </div>
                        </a>
                        <div class="text-center py-3"><a href="javascript:void(0)" class="anchor_click_function"
                                data-url="https://holidayslinkmaldives.com/package/siyam-world-maldives"
                                data-pagename="package-details">

                            </a><a href="javascript:void(0)" class="btn btn-primary anchor_click_function"
                                data-url="https://holidayslinkmaldives.com/package/siyam-world-maldives"
                                data-pagename="package-details">More Details</a>
                        </div>
                    </div>
                    <div class="package-detail position-absolute ps-3">
                        <span class="white-color me-2">4 Nights Package</span>

                    </div>

                </div> --}}
            </div>
            <!--<div class="text-center">
                <a href="#" class="btn btn-primary">View More Packages</a>
            </div>-->
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
                        </svg>
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
    <section class="cta p-2 p-lg-5">
        <div class="container-fluid text-lg-start text-md-start text-sm-center text-center">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-2">
                    <img src="New folder/11.png" alt="" class="img-fluid" width="20%">
                    <p>Holidays Link Maldives is one of the best destination management company. We are helping our
                        customers to
                        get tailored made packages globally</p>
                    <div class="d-flex align-items-center">
                        <svg class="svg-inline--fa fa-location-dot me-3"
                            style="color: #FD003A;
                      font-size: 20px;" aria-hidden="true"
                            focusable="false" data-prefix="fas" data-icon="location-dot" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                            </path>
                        </svg>
                        <p class="m-0">Lot # 10398 Ahigas Magu Hulhumale K. Male Maldives</p>
                    </div>
                    <div
                        class="d-flex align-items-center justify-content-center justify-content-lg-start my-3 calls_text">

                        <img src="" alt="" class="me-3 " style="width:20px;">
                        <p class="m-0 me-3"><a>+960-9506464</a>
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="" alt="" class="me-3 " style="width:20px;">
                            <p class="m-0"><a target="_blank">+960-9506464</a>
                            </p>
                        </div>
                        <p></p>
                    </div>
                    <div class="social-icons">
                        <a target="_blank" aria-label="Facebook"><svg class="svg-inline--fa fa-facebook"
                                aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                </path>
                            </svg></a>
                        <a target="_blank" aria-label="YouTube"><svg class="svg-inline--fa fa-youtube"
                                aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                </path>
                            </svg></a>
                        <a target="_blank" aria-label="Instagram"><svg class="svg-inline--fa fa-instagram"
                                aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                </path>
                            </svg></a>
                        <a target="_blank" aria-label="WhatsApp"><svg class="svg-inline--fa fa-whatsapp"
                                aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                                </path>
                            </svg></a>
                        <a target="_blank" aria-label="Tiktok"><svg class="svg-inline--fa fa-tiktok"
                                aria-hidden="true" focusable="false" data-prefix="fab" data-icon="tiktok"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z">
                                </path>
                            </svg></a>

                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <h4 class="dark-blue-color fw-bold">Quick <span class="primary-color">Links</span></h4>
                    <ul class="p-0 mt-2 mt-lg-5">
                        <li><a>Home</a></li>
                        <li><a class="anchor_click_function">About Us</a></li>
                        <li><a class="anchor_click_function">Packages</a></li>
                        <li><a class="anchor_click_function">Experience</a></li>
                        <li><a class="anchor_click_function">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <h4 class="dark-blue-color fw-bold">Legal <span class="primary-color">Links</span></h4>
                    <ul class="p-0 mt-2 mt-lg-5">

                        <li><a class="anchor_click_function">Privacy Policy</a></li>

                        <li><a class="anchor_click_function">Terms &amp; Conditions</a></li>

                        <li><a class="anchor_click_function">Disclaimer</a></li>

                        <li><a class="anchor_click_function">Support</a></li>
                        <li><a href="#">FAQ’s</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-center text-lg-center mt-3 mt-lg-0 te">
                    <h4 class="dark-blue-color fw-bold">Working <span class="primary-color">Hours</span></h4>
                    <div
                        class="mt-lg-5  mt-2  mt-3 mb-3 d-flex align-items-center justify-content-center justify-content-lg-center">
                        <svg class="svg-inline--fa fa-clock me-3" aria-hidden="true" focusable="false"
                            data-prefix="far" data-icon="clock" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z">
                            </path>
                        </svg>
                        <p class="m-0">9 AM - 10 PM , Mon - Sat</p>
                    </div>

                    <a data-url="https://holidayslinkmaldives.com/contact"
                        class="btn btn-primary mb-3  my-lg-3 anchor_click_function">Get Consultation</a>

                </div>


            </div>
        </div>
    </section>




















    <!--........... footer ..........................-->
    <footer class="py-1 text-center reserved_copy">
        <p class="m-0">© 2021 – 2023 All Rights are Reserved by TravanSoft Link Maldives</p>
    </footer>
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
