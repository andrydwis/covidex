<!-- Sidebar outter -->
<div class="main-sidebar">
    <!-- sidebar wrapper -->
    <aside id="sidebar-wrapper">
        <!-- sidebar brand -->
        <div class="sidebar-brand">
            <a href="index.html">Covidex</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">CX</a>
        </div>
        <!-- sidebar menu -->
        <ul class="sidebar-menu">
            <!-- menu header -->
            <li class="menu-header">Menu</li>
            <!-- menu item -->
            <li>
                <a href="{{route('main')}}"><i class="fas fa-home"></i><span>Home</span></a>
            </li>
            @auth
            @if(auth()->user()->role == 'client')
            <li>
                <a href="{{route('dashboard')}}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-server"></i><span>Data Covid</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('global')}}">Data Global</a></li>
                    <li><a class="nav-link" href="{{route('local')}}">Data Indonesia</a></li>
                </ul>
            </li>
            @endif
            @endauth
        </ul>
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            @guest
            <a href="{{route('login')}}" class="btn btn-primary btn-lg btn-block btn-icon-split"><i class="fas fa-sign-in-alt"></i> Login</a>
            <a href="{{route('register')}}" class="btn btn-primary btn-lg btn-block btn-icon-split"><i class="fas fa-user-plus"></i> Register</a>
            @endguest
            @auth
            <form method="POST" action="{{route('logout')}}">
                @csrf
                <button class="btn btn-danger btn-lg btn-block btn-icon-split" type="submit"><i class="fas fa-sign-out-alt"></i> Logout</button>
            </form>
            @endauth
        </div>
    </aside>
</div>