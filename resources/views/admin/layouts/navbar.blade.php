<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
      <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
      </ul>
  
    </form>
    <ul class="navbar-nav navbar-right">
      
     
      <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        {{-- <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1"> --}}
     
      
            <img class="rounded-circle mr-1" src="{{asset(Auth::user()->image)}}" alt="">
      

       
        <div class="d-sm-none d-lg-inline-block">
           {{ auth()->user()->name }}  
        </div></a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="{{route('admin.profile')}}" class="dropdown-item has-icon">
            <i class="far fa-user"></i> Profile
          </a>
          <div class="dropdown-divider"></div>
          
          {{-- <x-dropdown-link :href="route('admin.profile')">
            {{ __('Profile') }}
        </x-dropdown-link> --}}
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="route('logout')" onclick="event.preventDefault();
          this.closest('form').submit();" class="dropdown-item has-icon text-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </form>
        </div>
      </li>
    </ul>
  </nav>