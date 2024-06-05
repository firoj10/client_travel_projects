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
    {{-- <div class="container-fluid mt-5">
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
    </div> --}}
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
                {{-- <div class="tab-content" id="myTabContent">
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
                </div> --}}
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
                <div class="col-lg-6 col-md-6 col-xl-3 hove_transition mt-3  ">
                    <a href="{{route('packagesdetails',['name'=>$package->name, 'id'=>$package->id ])}}" class="anchor_click_function" data-pagename="resort-details">
                        <div class="card-header overflow-hidden ">
                            <img src="{{ asset($package->thumbnail_image_link)}}" alt="resort" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <div class="rating-star py-2">
                                    <img src="{{ asset('frontend/img/resorts/4-star.png') }}" alt="star"
                                        class="img-fluid">
                                </div>
                                <h5 class="black-color fw-bold my-1">{{$package->name }}</h5>
                                <svg style="color: black" class="svg-inline--fa fa-location-dot " aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="location-dot" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                    </path>
                                </svg>
                                <span style="color: black">{{$package->address}}</span>
                            </div>
                            <div class="card-list  py-2">
                                <ul class="bullets_list_resort">
                                    @php
                                        $descriptions = json_decode($package->short_description);
                                    @endphp
                                    @foreach ($descriptions as $description)
                                        <li></li>
                                        <p class="mb-0" style="color: black"><i class="fa fa-check-square-o px-2"></i>
                                            {{ $description }}<br></p>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="text-center"><a href="" class="btn btn-primary anchor_click_function" data-url="" data-pagename="package-details">More Details</a></div>
                        </div>
                    </a>
                </div>
            @endforeach
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
               
                {{-- @foreach ($mainresorts as $mainresort)
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
                @endforeach --}}
               
              
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
