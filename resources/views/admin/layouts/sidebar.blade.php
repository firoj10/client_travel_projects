<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('admin.dashboard')}}"> 
            <img width="50" src="{{asset('frontend/img/11.png')}}" alt="">
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">Tr</a>
        </div>
        <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class=active><a class="nav-link" href="{{route('admin.stay.index')}}">Stay</a></li>
                    <li class=active><a class="nav-link" href="{{route('admin.package.index')}}">Package</a></li>
                    <li class=active><a class="nav-link" href="{{route('admin.experience.index')}}">Experience</a></li>
                    <li class=active><a class="nav-link" href="{{route('admin.quotation')}}">Quotation</a></li>
                </ul>
            </li> 
        </ul>
    </aside>
</div>
