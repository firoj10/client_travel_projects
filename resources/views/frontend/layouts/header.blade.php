<nav class="navbar navbar-expand-lg ">
    <a href="{{route('home')}}" class="navbar-brand">
        <img src="{{ asset('frontend/img/11.png') }}" alt="logo">
    </a>
    <button class="navbar-toggler ms-auto mx-2" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto text-center">
            <p class="nav-item">
                <a href="{{route('home')}}" class="nav-link">Home</a>
                </p>
            <p class="nav-item">
                <a href="{{route('resorts')}}" class="nav-link anchor_click_function" data-url=""
                    data-pagename="resorts">Resorts</a>
                </p>
            {{-- <p class="nav-item">
                <a href="{{route('guesthouse')}}" class="nav-link anchor_click_function" data-url=""
                    data-pagename="resorts">Guest House</a>
                </p> --}}
            <p class="nav-item">
                <a href="{{route('packages')}}" class="nav-link anchor_click_function" data-url=""
                    data-pagename="packages">Packages</a>
                </p>
            <p class="nav-item">
                <a href="{{route('experience')}}" class="nav-link anchor_click_function" data-url=""
                    data-pagename="experience">Experience</a>
                </p>
            <p class="nav-item">
                <a href="{{route('about')}}" class="nav-link anchor_click_function" data-url=""
                    data-pagename="about">About Us</a>
                </p>
            <p class="nav-item" style="margin-left: 20px">
                <a href="{{route('contact')}}" 
                class="btn btn-secondary  contact_bt anchor_click_function"
                data-pagename="contact">Contact Us</a>
                </p>
        </ul>
        {{-- <div class="nav-buttons ">
            <a href="{{route('contact')}}" 
                class="btn btn-secondary  contact_bt mb-lg-0 mb-md-0 mb-sm-2 mb-2 anchor_click_function"
                data-pagename="contact">Contact Us</a>
        </div> --}}
    </div>
</nav>
