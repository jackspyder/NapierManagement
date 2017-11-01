@extends('master')

@section('title')
    Home
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card card-inverse card-danger text-center">
                <div class="card-block">
                    <blockquote class="card-blockquote">
                        <p style="font-size: x-large">!!This website is for demonstration purposes only!!</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-9">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('img/cities/edinburgh.jpg') }}" alt="First slide">
                        <div class="carousel-caption">
                            <h1>Edinburgh</h1>
                            <h3>One of our fantastic Venues!</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/cities/glasgow.jpg') }}" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Glasgow</h3>
                            <p>The amazing view from our Glasgow Venues.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/cities/office.jpg') }}" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Offices</h3>
                            <p>A look at our new classroom interiors!</p>
                        </div>
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
        </div>
    </div>

    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Welcome to Napier Management Training</h2>
            <h3 class="section-subheading text-muted">Take a look around at what we have on offer!</h3>
        </div>
    </div>
    <br>
    <div class="row justify-content-center text-center">

        <div class="col-3">
            <div class="card">
                <div class="card-block">
                        <span class="fa-stack fa-5x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                    <h4 class="service-heading">Subjects</h4>
                </div>
                <div class="card-footer">
                    <p>Take a look a the many excellent subjects you can learn. Just click below to begin
                        exploring.</p>
                    <div class="row justify-content-center">
                        <a href="{{ url('/subjects') }}" class="btn btn-primary">View Subjects</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <div class="card-block">
                        <span class="fa-stack fa-5x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                    <h4 class="service-heading">Classes</h4>
                </div>
                <div class="card-footer">
                    <p>We offer a wide range of available classes to attend at a range of venues. Click below to take a
                        look.</p>
                    <div class="row justify-content-center">
                        <a href="{{ url('/classes') }}" class="btn btn-primary">View Classes</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <div class="card-block">
                        <span class="fa-stack fa-5x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                    <h4 class="service-heading">Venues</h4>
                </div>
                <div class="card-footer">
                    <p>Our Facilities are second to none. With a wide range of locations across Scotland you're sure to
                        find one that suits. Click now to see more!</p>
                    <div class="row justify-content-center">
                        <a href="{{ url('/venues') }}" class="btn btn-primary">View Venues</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        $('.carousel').carousel({
            interval: 5000
        })
    </script>
@stop