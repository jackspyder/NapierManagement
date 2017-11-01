<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Napier Management Training Prototype">
    <meta name="author" content="Jack Powell">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NMT | @yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Icons -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">




    @yield('stylesheet')

    <script>
        var nmt = {
            stripeKey: "{{config('services.stripe.key')}}"
        };
    </script>
</head>
<body class="app header-fixed sidebar-fixed">

@yield('header')

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