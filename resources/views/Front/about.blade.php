@extends('layouts.front.frontend')
@section('content')

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">About</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <h5 class="section-about-title pe-3">About Us</h5>
                @foreach ($about as $about)
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                            <img src="{{ ('storage/back/media/about/'.$about->image) }}" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                        
                        <h1 class="mb-4">Welcome to <span class="text-primary">WanderLust</span></h1>
                        <p class="mb-4">
                            <span class="fw-bold fs-4">Name:</span> {{ $about->name }}
                        </p>
                        <p class="mb-4">
                            <span class="fw-bold fs-4">{{ $about->position }} {{ $about->hotel_name	 }}</span> 
                        </p>
                        
                        <div class="row gy-2 gx-4 mb-4">
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{!! $about->description !!}</p>
                            </div>
   
                        </div>
                       
                    </div>
                </div>
                @endforeach
               


            </div>
        </div>
        <!-- About End -->

        <!-- Travel Guide Start -->
        <div class="container-fluid guide py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Travel Guide</h5>
                    <h1 class="mb-0">Meet Our Guide</h1>
                </div>
                <div class="row g-4">
                    @foreach ($guide as $guide)
                    <div class="col-md-6 col-lg-3">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="{{asset('storage/back/media/guide/'.$guide->guide_image)}}" class="img-fluid w-100 rounded-top" alt="Image">
                                </div>
                                <div class="guide-icon rounded-pill p-2">
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href="{{ $guide->guide_fb }}"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href="{{ $guide->guide_twitter }}"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href="{{ $guide->guide_instagram }}"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href="{{ $guide->guide_linkdln }}"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <h4 class="mt-3">{{ $guide->guide_name }}</h4>
                                    <p class="mb-0">Location : {{ $guide->place }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    

                </div>
            </div>
        </div>
        <!-- Travel Guide End -->

        <!-- Subscribe Start -->
        <div class="container-fluid subscribe py-5">
            <div class="container text-center py-5">
                <div class="mx-auto text-center" style="max-width: 900px;">
                    <h5 class="subscribe-title px-3">Subscribe</h5>
                    <h1 class="text-white mb-4">Our Newsletter</h1>
                    <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum cum repellat a laborum quasi.
                    </p>
                    <div class="position-relative mx-auto">
                        <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->

@endsection