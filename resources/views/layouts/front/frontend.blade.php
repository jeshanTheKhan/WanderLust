<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>WanderLust - Tourism Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <link href="{{ asset('public/front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('public/front/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('public/front/css/style.css') }}" rel="stylesheet">

    <!-- Toaster & Sweetalert Style -->
    <link href="{{asset('public/backend/build/css/toastr.css')}}" rel="stylesheet">
        

    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-primary px-5 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        @php
                            $data = App\Models\Office::first();
                            @endphp
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $data->fb }}"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $data->linkdln }}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $data->instagram }}"><i class="fab fa-instagram fw-normal"></i></a>
                      
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        @auth
                        @if(auth()->user()->user_role === 'admin')
                            <a href="{{ route('admin.home') }}">
                                <small class="me-3 text-light"><i class="fa fa-user me-2"></i>Dashboard</small>
                            </a>
                        @elseif(auth()->user()->user_role === 'shop_keeper')
                            <a href="{{ route('shop.home') }}">
                                <small class="me-3 text-light"><i class="fa fa-user me-2"></i>Dashboard</small>
                            </a>
                        @elseif(auth()->user()->user_role === 'moderator')
                            <a href="{{ route('moderator.home') }}">
                                <small class="me-3 text-light"><i class="fa fa-user me-2"></i>Dashboard</small>
                            </a>
                        @else
                            <a href="{{ route('dashboard') }}">
                                <small class="me-3 text-light"><i class="fa fa-user me-2"></i>Dashboard</small>
                            </a>
                        @endif
                    @else
                        <!-- Links for guests -->
                        <a href="{{ route('register') }}" target="blank">
                            <small class="me-3 text-light"><i class="fa fa-user me-2"></i>Register</small>
                        </a>
                        <a href="{{ route('login') }}" target="blank">
                            <small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small>
                        </a>
                    @endauth
                    

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>WanderLust</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('welcome') }}" class="nav-item nav-link ">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                        <a href="{{ route('services') }}" class="nav-item nav-link">Services</a>
                        <a href="{{ route('packages') }}" class="nav-item nav-link">Packages</a>
                        <a href="{{ route('blog') }}" class="nav-item nav-link">Blog</a>
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="destination.html" class="dropdown-item">Destination</a>
                                <a href="tour.html" class="dropdown-item">Explore Tour</a>
                                <a href="booking.html" class="dropdown-item">Travel Booking</a>
                                <a href="gallery.html" class="dropdown-item">Our Gallery</a>
                                <a href="guides.html" class="dropdown-item">Travel Guides</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> --}}
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="{{ route('packages') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
                </div>
            </nav>
            @yield('content')

                 <!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Get In Touch</h4>
                            @php
                            $data = App\Models\Office::first();
                            @endphp
                            <a href=""><i class="fas fa-home me-2"></i> {{ $data->office_address }}</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> {{ $data->office_email }}</a>
                            <a href=""><i class="fas fa-phone me-2"></i> {{ $data->office_phonenumber }}</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> {{ $data->office_telephone }}</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="{{ $data->fb }}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="{{ $data->instagram }}"><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="{{ $data->linkdln }}"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Company</h4>
                            <a href="{{ route('about') }}"><i class="fas fa-angle-right me-2"></i> About</a>
                            <a href="{{ route('blog') }}"><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href="{{ route('packages') }}"><i class="fas fa-angle-right me-2"></i> Package</a>
                            <a href="{{ route('services') }}"><i class="fas fa-angle-right me-2"></i> Services</a>
                            <a href="{{ route('contact') }}"><i class="fas fa-angle-right me-2"></i> Contract</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Support</h4>
                            <a href="{{ route('contact') }}"><i class="fas fa-angle-right me-2"></i> Contact</a>
                            <a href="{{ route('notice') }}"><i class="fas fa-angle-right me-2"></i> Legal Notice</a>
                            <a href="{{ route('policy') }}"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href="{{ route('term') }}"><i class="fas fa-angle-right me-2"></i> Terms and Conditions</a>
                        </div>
                    </div>

            </div>
        </div>
        <!-- Footer End -->
        

        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('public/front/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('public/front/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('public/front/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('public/front/lib/easing/easing.min.js') }}"></script>
        

        <!-- Template Javascript -->
        <script src="{{ asset('public/front/js/main.js') }}"></script>
            <!-- Toaster & Sweetalert Style -->
    <script src="{{asset('public/backend/build/js/toastr.min.js')}}"></script>
    <script>
     @if(Session::has('message'))
       var type="{{Session::get('alert-type','info')}}"
       switch(type){
           case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
           case 'success':
               toastr.success("{{ Session::get('message') }}");
               break;
           case 'warning':
               toastr.warning("{{ Session::get('message') }}");
               break;
           case 'error':
               toastr.error("{{ Session::get('message') }}");
               break;
       }
     @endif
   </script>
    </body>

</html>