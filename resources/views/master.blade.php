<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Napier Management Training Prototype">
    <meta name="author" content="Jack Powell">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <title>NMT | @yield('title')</title>

    <!-- Icons -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('stylesheet')

</head>
@if(Auth::user() && Auth::user()->is_admin == true)
    <body class="app header-fixed sidebar-fixed">
    @else
        <body class="app header-fixed sidebar-hidden">
        @endif

        <!--navbar-->
        @include('layout.header')
        <div class="app-body">

            <!-- Sidebar -->
        @include('layout.sidebar')
        <!-- End of Sidebar -->

            <!-- Main content -->
            <main class="main">

                <!-- Breadcrumb -->
            @include('layout.breadcrumb')
            <!-- End of Breadcrumb -->

                <!-- Content -->
                <div class="container-fluid">
                    <div class="animated fadeIn">

                        @yield('content')

                    </div>
                </div>
            </main>
        </div>
        <!-- Footer -->
        @include('layout.footer')

        <!-- Scripts -->
        @include('layout.scripts')
        @yield('scripts')
        </body>
</html>