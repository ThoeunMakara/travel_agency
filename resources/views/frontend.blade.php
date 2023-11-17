<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tourist - Travel Agency HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('travel_agency')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('travel_agency')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('travel_agency')}}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('travel_agency')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('travel_agency')}}/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
        @include('partials.spinner')
    <!-- Spinner End -->


    <!-- Topbar Start -->
        @include('partials.topbar')
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
        {{-- @include('partials.navbar') --}}
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
                    <!-- <img src="{{asset('travel_agency')}}/img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        <a href="package.html" class="nav-item nav-link">Packages</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="destination.html" class="dropdown-item">Destination</a>
                                <a href="booking.html" class="dropdown-item">Booking</a>
                                <a href="team.html" class="dropdown-item">Travel Guides</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
                </div>
            </nav>

            <div class="container-fluid bg-primary py-5 mb-5 hero-header">
                <div class="container py-5">
                    <div class="row justify-content-center py-5">
                        <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                            <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
                            <p class="fs-4 text-white mb-4 animated slideInDown">Tempor erat elitr rebum at clita diam amet diam et eos erat ipsum lorem sit</p>
                            <div class="position-relative w-75 mx-auto animated slideInDown">
                                <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                                <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
        @include('partials.about')
    <!-- About End -->


    <!-- Service Start -->
        @include('partials.service')
    <!-- Service End -->


    <!-- Destination Start -->
        @include('partials.destination')
    <!-- Destination Start -->


    <!-- Package Start -->
        @include('partials.package')
    <!-- Package End -->


    <!-- Booking Start -->
        @include('partials.booking')
    <!-- Booking Start -->


    <!-- Process Start -->
        @include('partials.process')
    <!-- Process Start -->


    <!-- Team Start -->
        @include('partials.travelguide')
    <!-- Team End -->


    <!-- Testimonial Start -->
        @include('partials.testimonial')
    <!-- Testimonial End -->


    <!-- Footer Start -->
        @include('partials.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('travel_agency')}}/lib/wow/wow.min.js"></script>
    <script src="{{asset('travel_agency')}}/lib/easing/easing.min.js"></script>
    <script src="{{asset('travel_agency')}}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{asset('travel_agency')}}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{asset('travel_agency')}}/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{asset('travel_agency')}}/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{asset('travel_agency')}}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('travel_agency')}}/js/main.js"></script>
</body>

</html>
