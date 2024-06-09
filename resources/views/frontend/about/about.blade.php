<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <title>About</title>
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
     <section class="header_nav container-fluid px-0">
        @include('frontend.layouts.header')
    </section> 
    
    
    <section class="about-banner" style="background-image: url('{{asset('frontend/img/about/about2.png')}}')">
        <div class="container-fluid">
            <div class="about-content text-center">
                <h1 class="white-color fw-bold fs-1">About <span class="primary-color">US </span></h1>
            </div>
        </div>
    </section>
    <!-- Global Partners  section-->
    <section class="trust">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <svg style="width: 40px" class="svg-inline--fa fa-handshake primary-color fs-1" aria-hidden="true" focusable="false"
                        data-prefix="far" data-icon="handshake" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M272.2 64.6l-51.1 51.1c-15.3 4.2-29.5 11.9-41.5 22.5L153 161.9C142.8 171 129.5 176 115.8 176H96V304c20.4 .6 39.8 8.9 54.3 23.4l35.6 35.6 7 7 0 0L219.9 397c6.2 6.2 16.4 6.2 22.6 0c1.7-1.7 3-3.7 3.7-5.8c2.8-7.7 9.3-13.5 17.3-15.3s16.4 .6 22.2 6.5L296.5 393c11.6 11.6 30.4 11.6 41.9 0c5.4-5.4 8.3-12.3 8.6-19.4c.4-8.8 5.6-16.6 13.6-20.4s17.3-3 24.4 2.1c9.4 6.7 22.5 5.8 30.9-2.6c9.4-9.4 9.4-24.6 0-33.9L340.1 243l-35.8 33c-27.3 25.2-69.2 25.6-97 .9c-31.7-28.2-32.4-77.4-1.6-106.5l70.1-66.2C303.2 78.4 339.4 64 377.1 64c36.1 0 71 13.3 97.9 37.2L505.1 128H544h40 40c8.8 0 16 7.2 16 16V352c0 17.7-14.3 32-32 32H576c-11.8 0-22.2-6.4-27.7-16H463.4c-3.4 6.7-7.9 13.1-13.5 18.7c-17.1 17.1-40.8 23.8-63 20.1c-3.6 7.3-8.5 14.1-14.6 20.2c-27.3 27.3-70 30-100.4 8.1c-25.1 20.8-62.5 19.5-86-4.1L159 404l-7-7-35.6-35.6c-5.5-5.5-12.7-8.7-20.4-9.3C96 369.7 81.6 384 64 384H32c-17.7 0-32-14.3-32-32V144c0-8.8 7.2-16 16-16H56 96h19.8c2 0 3.9-.7 5.3-2l26.5-23.6C175.5 77.7 211.4 64 248.7 64H259c4.4 0 8.9 .2 13.2 .6zM544 320V176H496c-5.9 0-11.6-2.2-15.9-6.1l-36.9-32.8c-18.2-16.2-41.7-25.1-66.1-25.1c-25.4 0-49.8 9.7-68.3 27.1l-70.1 66.2c-10.3 9.8-10.1 26.3 .5 35.7c9.3 8.3 23.4 8.1 32.5-.3l71.9-66.4c9.7-9 24.9-8.4 33.9 1.4s8.4 24.9-1.4 33.9l-.8 .8 74.4 74.4c10 10 16.5 22.3 19.4 35.1H544zM64 336a16 16 0 1 0 -32 0 16 16 0 1 0 32 0zm528 16a16 16 0 1 0 0-32 16 16 0 1 0 0 32z">
                        </path>
                    </svg><!-- <i class="fa-regular fa-handshake primary-color fs-1"></i> Font Awesome fontawesome.com -->
                    <h5 class="fw-semibold my-2">100+ Global Partners</h5>
                    <p>We have more than 100+ travel partners to accomodate you globally.</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center border-left" style="border-left: 0.5px dotted #666666;">
                    <svg style="width: 40px" class="svg-inline--fa fa-box primary-color fs-1" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="box" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M50.7 58.5L0 160H208V32H93.7C75.5 32 58.9 42.3 50.7 58.5zM240 160H448L397.3 58.5C389.1 42.3 372.5 32 354.3 32H240V160zm208 32H0V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192z">
                        </path>
                    </svg><!-- <i class="fa-solid fa-box primary-color fs-1"></i> Font Awesome fontawesome.com -->
                    <h5 class="fw-semibold my-2">Tailored Packages</h5>
                    <p>We have best tailored packages to meet the needs of individuals &amp; groups</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center border-left border-right"
                    style="border-left: 0.5px dotted #666666; border-right: 0.5px dotted #666666;">
                    <svg style="width: 40px" class="svg-inline--fa fa-hand-holding-dollar primary-color fs-1" aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="hand-holding-dollar" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M312 24V34.5c6.4 1.2 12.6 2.7 18.2 4.2c12.8 3.4 20.4 16.6 17 29.4s-16.6 20.4-29.4 17c-10.9-2.9-21.1-4.9-30.2-5c-7.3-.1-14.7 1.7-19.4 4.4c-2.1 1.3-3.1 2.4-3.5 3c-.3 .5-.7 1.2-.7 2.8c0 .3 0 .5 0 .6c.2 .2 .9 1.2 3.3 2.6c5.8 3.5 14.4 6.2 27.4 10.1l.9 .3c11.1 3.3 25.9 7.8 37.9 15.3c13.7 8.6 26.1 22.9 26.4 44.9c.3 22.5-11.4 38.9-26.7 48.5c-6.7 4.1-13.9 7-21.3 8.8V232c0 13.3-10.7 24-24 24s-24-10.7-24-24V220.6c-9.5-2.3-18.2-5.3-25.6-7.8c-2.1-.7-4.1-1.4-6-2c-12.6-4.2-19.4-17.8-15.2-30.4s17.8-19.4 30.4-15.2c2.6 .9 5 1.7 7.3 2.5c13.6 4.6 23.4 7.9 33.9 8.3c8 .3 15.1-1.6 19.2-4.1c1.9-1.2 2.8-2.2 3.2-2.9c.4-.6 .9-1.8 .8-4.1l0-.2c0-1 0-2.1-4-4.6c-5.7-3.6-14.3-6.4-27.1-10.3l-1.9-.6c-10.8-3.2-25-7.5-36.4-14.4c-13.5-8.1-26.5-22-26.6-44.1c-.1-22.9 12.9-38.6 27.7-47.4c6.4-3.8 13.3-6.4 20.2-8.2V24c0-13.3 10.7-24 24-24s24 10.7 24 24zM568.2 336.3c13.1 17.8 9.3 42.8-8.5 55.9L433.1 485.5c-23.4 17.2-51.6 26.5-80.7 26.5H192 32c-17.7 0-32-14.3-32-32V416c0-17.7 14.3-32 32-32H68.8l44.9-36c22.7-18.2 50.9-28 80-28H272h16 64c17.7 0 32 14.3 32 32s-14.3 32-32 32H288 272c-8.8 0-16 7.2-16 16s7.2 16 16 16H392.6l119.7-88.2c17.8-13.1 42.8-9.3 55.9 8.5zM193.6 384l0 0-.9 0c.3 0 .6 0 .9 0z">
                        </path>
                    </svg><!-- <i class="fa-solid fa-hand-holding-dollar primary-color fs-1"></i> Font Awesome fontawesome.com -->
                    <h5 class="fw-semibold my-2">Best Price Guaranty</h5>
                    <p>We are offering best price which you won’t be able to find anywhere.</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <svg style="width: 40px" class="svg-inline--fa fa-headphones primary-color fs-1" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="headphones" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M256 80C149.9 80 62.4 159.4 49.6 262c9.4-3.8 19.6-6 30.4-6c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48c-44.2 0-80-35.8-80-80V384 336 288C0 146.6 114.6 32 256 32s256 114.6 256 256v48 48 16c0 44.2-35.8 80-80 80c-26.5 0-48-21.5-48-48V304c0-26.5 21.5-48 48-48c10.8 0 21 2.1 30.4 6C449.6 159.4 362.1 80 256 80z">
                        </path>
                    </svg><!-- <i class="fa-solid fa-headphones primary-color fs-1"></i> Font Awesome fontawesome.com -->
                    <h5 class="fw-semibold my-2">On Trip Support</h5>
                    <p>Our team will be available thought-out your trip to provide you best experience.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- COMPANY'S PROFILE -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2>COMPANY'S PROFILE</h2>
                    <p class="mt-2">Demo was established in 2018 as a local Destination Management
                        Company with the
                        strong ties to South Asian travel community and with an aim to broaden our services globally.
                        Our vision and focus are serving the travelers around the world with our knowledge, expertise
                        and our passion to travel. We began our journey on 2018, however our team consists of
                        professional travel consultants and well connected with travel trade partners in the Maldives.
                        We believe in establishing and maintaining a sold relationship with our associates and our
                        customers in order to provide the highest quality of service</p>
                    <h2>VISION:</h2>
                    <p class="mt-2">Providing a marvelous experience to tourists and settling down each course of action
                        that can
                        enhance your Maldives visit. We are rehearsing present day methodologies to stand out and
                        imagine giving first rate the travel industry administration, becoming prestigious destination
                        specialists of Maldives.</p>
                </div>
                <div class="col-lg-5">
                    <img src="{{asset('frontend/img/about/about1.png')}}" alt="" class=""
                        width="100%" height="100%">

                </div>
            </div>
            <div class="row my-5 flex-row-reverse">
                <div class="col-lg-7">
                    <h2>COMPANY'S PROFILE</h2>
                    <p class="mt-2">Demo was established in 2018 as a local Destination Management
                        Company with the
                        strong ties to South Asian travel community and with an aim to broaden our services globally.
                        Our vision and focus are serving the travelers around the world with our knowledge, expertise
                        and our passion to travel. We began our journey on 2018, however our team consists of
                        professional travel consultants and well connected with travel trade partners in the Maldives.
                        We believe in establishing and maintaining a sold relationship with our associates and our
                        customers in order to provide the highest quality of service</p>
                    <h2>VISION:</h2>
                    <p class="mt-2">Providing a marvelous experience to tourists and settling down each course of action
                        that can
                        enhance your Maldives visit. We are rehearsing present day methodologies to stand out and
                        imagine giving first rate the travel industry administration, becoming prestigious destination
                        specialists of Maldives.</p>
                </div>
                <div class="col-lg-5">
                    <img src="{{asset('frontend/img/about/about1.png')}}" alt="" class=""
                    width="100%" height="100%">

                </div>
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
          <svg class="svg-inline--fa fa-envelope-open me-3 white-color" aria-hidden="true" focusable="false"
            data-prefix="far" data-icon="envelope-open" role="img" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512" data-fa-i2svg="">
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
      <div class="col-md-6 mt-3 mt-lg-0 d-flex align-items-center justify-content-start justify-content-lg-end">

        <div class="input d-flex align-items-center justify-content-between rounded-pill p-1">

          <input type="hidden" class="csrf_test_name" name="csrf_test_name" value="070ec39d1c63513063041b4de4fda8f1">
          <input type="email" name="email" placeholder="Enter your email Address" class="subscribe_email">
          <input type="hidden" class="csrf_test_name2" name="csrf_test_name" value="070ec39d1c63513063041b4de4fda8f1">
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
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('frontend/css/wow.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>

</html>