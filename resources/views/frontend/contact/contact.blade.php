<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <style>
      

        .form .input input,
        .form .text-area textarea {
            padding: 0.5rem;
            width: 100%;
            border: none;
            outline: none;
            resize: none;
        }

        .form .input {
            border: 1px solid #ced4da;
            width: 48%;
        }

        .form .input input,
        .form .text-area textarea {
            padding: 0.5rem;
            width: 100%;
            border: none;
            outline: none;
            resize: none;
        }

        .form .text-area {
            border: 1px solid #ced4da;
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
    <section class="about-banner"
        style="background-image: url('https://holidayslinkmaldives.com/public/uploads/banner_about.jpeg')">
        <div class="container-fluid">
            <div class="about-content text-center">
                <h1 class="white-color fw-bold fs-1">Contact <span class="primary-color">US </span></h1>
            </div>
        </div>
    </section>
    <section class="form py-5 wow fadeInUp" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container">


            <h4 class="fw-semibold mb-2">Get in Touch With Us</h4>
            <div class="row px-3">
                <div class="col-md-4">
                    <form class="contact_submit">
                        <div class="row justify-content-between">
                            <div class="col-6 p-0 input">
                                <input type="text" placeholder="First Name" name="f_name">
                            </div>
                            <div class="col-6 p-0 input">
                                <input type="text" placeholder="Last Name" name="l_name">
                            </div>
                        </div>
                        <div class="row justify-content-between my-2">
                            <div class="col-6 p-0 input">
                                <input type="tel" placeholder="Phone Number" name="phone_number">
                            </div>
                            <div class="col-6 p-0 input">
                                <input type="emial" placeholder="Email Address" name="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 text-area">
                                <textarea name="message" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-btn text-end my-3">
                            <button type="submit" class="btn btn-primary submitbtn" name="form_contact"
                                value="1">Send Your Message</button>
                        </div>
                        <input type="hidden" class="csrf_test_name" name="csrf_test_name"
                            value="93f63f47bcecaec05d0e6463581a56e6">
                    </form>
                </div>
                <div class="col-md-4 px-5">
                    <div class="address d-flex flex-column">
                        <div class="col">
                            <div>
                                <svg class="svg-inline--fa fa-location-dot me-2 primary-color" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="location-dot" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-location-dot me-2 primary-color"></i> Font Awesome fontawesome.com -->
                                <span class="fw-bold">Address</span>
                            </div>
                            <div class="ps-4">
                                <p class="m-0 mt-2">R 16-06, Hithigas Magu Golhi 5, Hulhumale, Maldives </p>
                            </div>
                        </div>
                        <div class="col mt-2">
                            <div>
                                <svg class="svg-inline--fa fa-envelope me-2 primary-color" aria-hidden="true"
                                    focusable="false" data-prefix="far" data-icon="envelope" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z">
                                    </path>
                                </svg><!-- <i class="fa-regular fa-envelope me-2 primary-color"></i> Font Awesome fontawesome.com -->
                                <span class="fw-bold">Email Address</span>
                            </div>
                            <div class="ps-4">
                                <p class="m-0 mt-2">info@holidayslinkmaldives.com</p>
                            </div>
                        </div>
                        <div class="col mt-2">
                            <div>
                                <svg class="svg-inline--fa fa-location-dot me-2 primary-color" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="location-dot" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-location-dot me-2 primary-color"></i> Font Awesome fontawesome.com -->
                                <span class="fw-bold">Contact</span>
                            </div>
                            <div class="ps-4">
                                <p class="m-0 mt-2">+960-9506464</p>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="tour-map col-md-4 ">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.0120955559487!2d73.54039167383448!3d4.217898645656186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b3f7f950953135d%3A0xe83b162b1d062446!2sHolidays%20Link%20Maldives!5e0!3m2!1sen!2s!4v1696941577995!5m2!1sen!2s"
                        width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend/css/wow.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
