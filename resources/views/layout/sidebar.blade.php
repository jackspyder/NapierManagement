<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin') }}"><i class="icon-speedometer"></i> Dashboard</a>
            </li>

            <li class="nav-title">
                User Options
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/subjects') }}"><i class="icon-chemistry"></i> Subjects</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/classes') }}"><i class="icon-graduation"></i> Classes</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/venues') }}"><i class="icon-location-pin"></i> Venues</a>
            </li>


            @if(Auth::user() && Auth::user()->is_admin == true)
                <li class="nav-title">
                    Administration
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-chemistry"></i> Subjects</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/subjects') }}"><i class="icon-list"></i> View
                                Subjects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/subjects/create') }}"><i class="icon-plus"></i> Add
                                Subject</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-graduation"></i> Classes</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/lessons') }}"><i class="icon-list"></i> View
                                Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/lessons/create') }}"><i class="icon-plus"></i> Add
                                Class</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-location-pin"></i> Venues</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/venues') }}"><i class="icon-list"></i> View Venues</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/venues/create') }}"><i class="icon-plus"></i> Add
                                Venues</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/users') }}"><i class="icon-people"></i> Users</a>
                </li>
                <li class="divider"></li>

            <li class="nav-title">
                UI Elements
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Components</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/templates/buttons') }}"><i class="icon-puzzle"></i>
                            Buttons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/templates/social') }}"><i class="icon-puzzle"></i> Social
                            Buttons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/templates/cards') }}"><i class="icon-puzzle"></i> Cards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/templates/forms') }}"><i class="icon-puzzle"></i> Forms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/templates/modals') }}"><i class="icon-puzzle"></i> Modals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/templates/switches') }}"><i class="icon-puzzle"></i> Switches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/templates/tables') }}"><i class="icon-puzzle"></i> Tables</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/templates/tabs') }}"><i class="icon-puzzle"></i> Tabs</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Icons</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/templates/font-awesome-icons') }}"><i class="icon-star"></i>
                            Font Awesome</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/templates/simple-line-icons') }}"><i class="icon-star"></i>
                            Simple Line Icons</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/templates/widgets') }}"><i class="icon-calculator"></i> Widgets <span
                            class="badge badge-info">NEW</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/templates/charts') }}"><i class="icon-pie-chart"></i> Charts</a>
            </li>
            <li class="divider"></li>
            <li class="nav-title">
                Extras
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Pages</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/templates/login') }}" target="_top"><i class="icon-star"></i>
                            Login</a>
                        <a class="nav-link" href="{{ route('login') }}" target="_top"><i class="icon-star"></i>
                            Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/templates/register') }}" target="_top"><i
                                    class="icon-star"></i> Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/templates/error404') }}" target="_top"><i
                                    class="icon-star"></i> Error 404</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/templates/error500') }}" target="_top"><i
                                    class="icon-star"></i> Error 500</a>
                    </li>
                </ul>
            </li>

        </ul>
        @endif
    </nav>
</div>
