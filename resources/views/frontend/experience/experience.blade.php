<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <title>Experience</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <style>
  .container {
    position: relative; /* Ensure this is the parent of the positioned element */
}

.centered-content {
    display: flex;
    flex-direction: column; /* Align items vertically */
    justify-content: center;
    align-items: center;
    text-align: center;
    width: calc(100% - 48px); /* Adjust width to fit container, considering left positioning */
}
        .swiper2 {
            width: 100%;
            height: 100%;
            overflow: hidden !important;

        }

        .col-md-4 {
            text-align: center;
            font-size: 18px;
            background: #fff;

            justify-content: center;
            align-items: center;
        }

        .col-md-4 img {
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
    <section class="about-banner" style="background-image: url('{{ asset('frontend/img/banner_experience.png') }}')">
        <div class="container-fluid">
            <div class="about-content text-center">
                <h1 class="white-color fw-bold fs-1">Experience <span class="primary-color">Resorts</span>
                </h1>
                <p><span class="fw-semibold  white-color">Find the best & the reliable resorts to get an unforgettable
                        holiday experience in the tropical paradise of the Maldives.</span>
                </p>
            </div>
        </div>
    </section>




    <!--.............................................Newsletter-->
    <section class="container-fluid ">
        <div>
            <div class="experience-heading text-center mb-4">
                <h2 class="black-color fw-bold">
                    Our <span class="primary-color">Experience</span> </h2>
                <img src="{{ asset('frontend/img/resorts/subtitle-vector.png') }}" alt="vector" class="img-fluid">
            </div>
        </div>
        <div class="mb-4">
            <div class="row px-5">
                @foreach ($experiences as $experience)
                    <div class=" col-12 col-md-4 col-lg-3 ">
                        <a href="{{ route('experiencedetails', ['name' => $experience->title, 'id' => $experience->id]) }}">
                            <div class=" exp-card text-center position-relative my-2"
                                style="background-image: url('{{ $experience->thumbnail_image_link }}');">
                                <div
                                style="position: absolute; top: 70%;  width: 100%; display: flex; justify-content: center;">
                                <div>
                                    <h2 class="" style=" color: white">{{ $experience->title }}</h2>
                                    {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quidem, eaque fugit quaerat doloremque eveniet cupiditate voluptates recusandae odit earum!</p> --}}
                                    <p class="" style=" color: white">{{ $experience->sub_title }}</p>
                                </div>
                            </div>

                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Swiper JS -->


        <!-- Initialize Swiper -->

    </section>
    <!--.............................................Newsletter-->



    <!--.............................................Newsletter-->

    <section class="joint_news px-5 py-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s"
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script src="{{ asset('frontend/css/wow.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./css/wow.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
