@extends('public')

@section('title')
    Public Test
@endsection

@section('content')

    <div class="col-12">
        {{--<div class="jumbotron jumbotron-fluid">--}}
            {{--<div class="container">--}}
                {{--<p class="lead">This website is for demonstration purposes only and is not in production use!</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="alert alert-warning text-center" role="alert">
            This website is for demonstration purposes only and is not in production use
        </div>

        <section>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                     style="padding-bottom: 1rem">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('/img/car/1_454x340.jpg') }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('/img/car/9_454x340.jpg') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('/img/car/4_454x340.jpg') }}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

        </section>

        <!-- Services -->
        <section id="services" style="padding-top: 1rem">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Welcome to Napier Management Training</h2>
                        <h3 class="section-subheading text-muted">Take a look at the services we have on offer.</h3>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x fa-primary"></i>
              <i class="fa fa-building fa-stack-1x fa-inverse"></i>
            </span>
                        <h4 class="service-heading">Venues</h4>
                        <p class="text-muted">Click here to view our range of available Venues</p>
                    </div>
                    <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x fa-primary"></i>
              <i class="fa fa-graduation-cap fa-stack-1x fa-inverse"></i>
            </span>
                        <h4 class="service-heading">Subjects</h4>
                        <p class="text-muted">Take a look at the fantastic subjects we have on offer.</p>
                    </div>
                    <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x fa-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
                        <h4 class="service-heading">View Classes</h4>
                        <p class="text-muted">Click here to view and book a class online today!</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

@stop