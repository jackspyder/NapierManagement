<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <title>@yield('title')</title>

    <!-- Icons -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('stylesheet')

</head>
<body class="app header-fixed aside-menu-hidden">
<!-- Navbar-->
@include('public.layout.header')
<div class="app-body">

    <main class="main">

        @include('public.layout.breadcrumb')

        <div class="container-fluid">
            <div class="animated fadeIn">
                @yield('content')#
            </div>
        </div>
    </main>

    @include('public.layout.asidemenu')
</div>
@include('public.layout.footer')

@include('public.layout.scripts')


{{--@include('scripts')--}}

</body>
</html>