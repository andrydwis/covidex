<!-- navbar background color -->
<div class="navbar-bg"></div>
<!-- navbar -->
<nav class="navbar navbar-expand-lg main-navbar">
    <!-- navbar nav left -->
    <form class="form-inline mr-auto">
        <!-- navbar toggler -->
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>
    <!-- navbar right -->
    <ul class="navbar-nav navbar-right">
        <!-- navbar notification toggle -->

        <!-- navbar right item -->
        @auth
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                @if(auth()->user()->detail)
                <img alt="image" src="{{asset('storage/'.auth()->user()->detail->photo)}}" width="30" height="30" class="rounded-circle mr-1">
                @else
                <img alt="image" src="{{asset('assets/img/avatar/avatar-1.png')}}" width="30" height="30" class="rounded-circle mr-1">
                @endif
                <div class="d-sm-none d-lg-inline-block">Hello, {{auth()->user()->name}}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{route('profile')}}" class="dropdown-item has-icon">
                    <i class="fas fa-user"></i> Profile
                </a>
                <a href="{{route('setting')}}" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a>
                <div class="dropdown-divider"></div>
            </div>
        </li>
        @endauth
    </ul>
</nav>