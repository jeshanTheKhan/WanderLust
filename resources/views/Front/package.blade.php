@extends('layouts.front.frontend')
@section('content')

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Package</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
<!-- Package Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Our Latest Package</h5>
            <h1 class="mb-4">Our Popular & Latest Package</h1>
            
        </div>
        <div class="row g-4 justify-content-center">
            
            @foreach ($package as $package)
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="{{asset('storage/back/media/package/'.$package->package_images)}}" alt="Image">
                            
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                        <p class="mb-3">Package Name : {{ $package->package_name }} </p>
                        <a href="#" class="h4">{{ $package->blog_header }}</a>
                        <p class="my-3">{{ $package->short_description }}</p>
                        <a href="{{ route('package.details', $package->package_id) }}" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
            

        </div>
    </div>
</div>
<!-- Package End -->

 <!-- Tour Booking Start -->
 <div class="container-fluid booking py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h5 class="section-booking-title pe-3">Booking</h5>
                <h1 class="text-white mb-4">Online Booking</h1>
                <p class="text-white mb-4">Ready to turn your travel dreams into reality? With our seamless online booking system, your next adventure is just a click away. Whether you're planning a tranquil escape or an exhilarating journey, our platform ensures a hassle-free experience from start to finish. Discover the world your way—quick, easy, and tailored to you.</p>
                <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Read More</a>
            </div>
            <div class="col-lg-6">
                <h1 class="text-white mb-3">Book A Tour Deals</h1>
                <p class="text-white mb-4">Get <span class="text-warning">50% Off</span> On Your First Adventure Trip With WanderLust. Get More Deal Offers Here.</p>
                <form method="POST" action="{{route('booking.request')}}">
                @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-white border-0" id="name" name="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control bg-white border-0" id="email" name="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-white border-0" id="email" name="days" placeholder="Number of Day's">
                                <label for="text">Stay Day's</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="date" class="form-control bg-white border-0" id="date" name="date" placeholder="Select Date" />
                                <label for="date">Select Date</label>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select bg-white border-0" id="select1" name="place">
                                    @foreach ($place as $place)
                                    <option value="{{ $place->place_name }}">{{ $place->place_name }}</option>
                                    @endforeach
                                    
                                    
                                </select>
                                <label for="select1">Destination</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select bg-white border-0" id="SelectPerson"  name="person" >
                                    <option value="1">Persons 1</option>
                                    <option value="2">Persons 2</option>
                                    <option value="3">Persons 3</option>
                                </select>
                                <label for="SelectPerson">Persons</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <select class="form-select bg-white border-0" id="CategoriesSelect"  name="pakage" >
                                    @foreach ($package_name as $package_name)
                                    <option value="{{ $package_name->package_id }}">{{ $package_name->package_name }}</option>
                                    @endforeach
                                    

                                </select>
                                <label for="CategoriesSelect">Package Name</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control bg-white border-0" placeholder="Special Request" name="special"  id="message" style="height: 100px"></textarea>
                                <label for="message">Special Request</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary text-white w-100 py-3" type="submit">Book Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tour Booking End -->
        <!-- Subscribe Start -->
        <div class="container-fluid subscribe py-5">
            <div class="container text-center py-5">
                <div class="mx-auto text-center" style="max-width: 900px;">
                    <h5 class="subscribe-title px-3">Subscribe</h5>
                    <h1 class="text-white mb-4">Our Newsletter</h1>
                    <p class="text-white mb-5">For Next Update .Please Subscribe Our Website.Please Stay With us.</p>
                    <div class="position-relative mx-auto">
                        <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->
@endsection