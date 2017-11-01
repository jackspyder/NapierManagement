<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">☰</button>
    <a class="navbar-brand" href="{{ url('/') }}"></a>
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item">
            <a class="nav-link navbar-toggler sidebar-toggler" href="#">☰</a>
        </li>


        <li class="nav-item px-3">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>

        <li class="nav-item px-3">
            <a class="nav-link" href="{{ url('/subjects') }}">Subjects</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="{{ url('/venues') }}">Venues</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="{{ url('/classes') }}">Classes</a>
        </li>
    </ul>
    @if(Auth::guest())
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item d-md-down-none">
                <a class="nav-link navbar-toggler" href="/login">Login |</a>
            </li>


            <li class="nav-item d-md-down-none">
                <a class="nav-link navbar-toggler" href="/register"> Register</a>
            </li>
        </ul>

    @else

        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="true" aria-expanded="false">
                    <img src="{{ Auth::user()->active_avatar }}" class="img-avatar" alt="{{ Auth::user()->email }}">
                    <span class="d-md-down-none">Options  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">

                    <div class="dropdown-header text-center">
                        <strong>Settings</strong>
                    </div>

                    <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}"><i class="fa fa-user"></i>
                        Profile</a>

                    <a class="dropdown-item" href="/bookings/"><i class="fa fa-archive"></i>My Bookings</a>
                    <a class="dropdown-item" href="{{ url('/admin') }}"><i class="fa fa-key"></i> Admin Section</a>
                    <div class="divider"></div>
                    <a class="dropdown-item" href="/logout"><i class="fa fa-lock"></i> Logout</a>
                </div>
            </li>


        </ul>
    @endif
</header>
