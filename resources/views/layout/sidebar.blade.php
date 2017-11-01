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
        </ul>
        @endif
    </nav>
</div>
