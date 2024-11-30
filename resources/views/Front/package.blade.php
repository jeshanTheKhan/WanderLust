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
<!-- Packages Start -->
<div class="container-fluid packages py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Packages</h5>
            <h1 class="mb-0">Awesome Packages</h1>
        </div>
        <div class="packages-carousel owl-carousel owl-loaded owl-drag">

        <div class="owl-stage-outer">
            <div class="owl-stage" style="transform: translate3d(-1901px, 0px, 0px); transition: 1s; width: 3804px;"><div class="owl-item cloned" style="width: 355.333px; margin-right: 25px;">
                <div class="packages-item">
                <div class="packages-img">
                    <img src="img/packages-2.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                    <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Venice - Italy</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                    </div>
                    <div class="packages-price py-2 px-4">$449.00</div>
                </div>
                <div class="packages-content bg-light">
                    <div class="p-4 pb-0">
                        <h5 class="mb-0">The New California</h5>
                        <small class="text-uppercase">Hotel Deals</small>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                    </div>
                    <div class="row bg-primary rounded-bottom mx-0">
                        <div class="col-6 text-start px-0">
                            <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                        </div>
                        <div class="col-6 text-end px-0">
                            <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                        </div>
                    </div>
                </div>
            </div></div>
            <div class="owl-item cloned" style="width: 355.333px; margin-right: 25px;"><div class="packages-item">
                <div class="packages-img">
                    <img src="img/packages-3.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                    <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Venice - Italy</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                    </div>
                    <div class="packages-price py-2 px-4">$549.00</div>
                </div>
                <div class="packages-content bg-light">
                    <div class="p-4 pb-0">
                        <h5 class="mb-0">Discover Japan</h5>
                        <small class="text-uppercase">Hotel Deals</small>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                    </div>
                    <div class="row bg-primary rounded-bottom mx-0">
                        <div class="col-6 text-start px-0">
                            <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                        </div>
                        <div class="col-6 text-end px-0">
                            <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                        </div>
                    </div>
                </div>
            </div></div>
            
            <div class="owl-item active" style="width: 355.333px; margin-right: 25px;"><div class="packages-item">
                <div class="packages-img">
                    <img src="img/packages-1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                    <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Thayland</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                    </div>
                    <div class="packages-price py-2 px-4">$649.00</div>
                </div>
                <div class="packages-content bg-light">
                    <div class="p-4 pb-0">
                        <h5 class="mb-0">Thayland Trip</h5>
                        <small class="text-uppercase">Hotel Deals</small>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                    </div>
                    <div class="row bg-primary rounded-bottom mx-0">
                        <div class="col-6 text-start px-0">
                            <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                        </div>
                        <div class="col-6 text-end px-0">
                            <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                        </div>
                    </div>
                </div>
            </div></div><div class="owl-item cloned active" style="width: 355.333px; margin-right: 25px;"><div class="packages-item">
                <div class="packages-img">
                    <img src="img/packages-4.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                    <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Venice - Italy</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                    </div>
                    <div class="packages-price py-2 px-4">$349.00</div>
                </div>
                <div class="packages-content bg-light">
                    <div class="p-4 pb-0">
                        <h5 class="mb-0">Venice - Italy</h5>
                        <small class="text-uppercase">Hotel Deals</small>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                    </div>
                    <div class="row bg-primary rounded-bottom mx-0">
                        <div class="col-6 text-start px-0">
                            <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                        </div>
                        <div class="col-6 text-end px-0">
                            <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                        </div>
                    </div>
                </div>
            </div></div><div class="owl-item cloned" style="width: 355.333px; margin-right: 25px;"><div class="packages-item">
                <div class="packages-img">
                    <img src="img/packages-2.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                    <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Venice - Italy</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                    </div>
                    <div class="packages-price py-2 px-4">$449.00</div>
                </div>
                <div class="packages-content bg-light">
                    <div class="p-4 pb-0">
                        <h5 class="mb-0">The New California</h5>
                        <small class="text-uppercase">Hotel Deals</small>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                    </div>
                    <div class="row bg-primary rounded-bottom mx-0">
                        <div class="col-6 text-start px-0">
                            <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                        </div>
                        <div class="col-6 text-end px-0">
                            <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                        </div>
                    </div>
                </div>
            </div></div>
            @foreach ($package as $package)
            <div class="owl-item cloned" style="width: 355.333px; margin-right: 25px;"><div class="packages-item">
                <div class="packages-img">
                    <img src="{{asset('storage/back/media/package/'.$package->package_images)}}" class="img-fluid w-100 rounded-top" alt="Image">
                    {{-- <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Venice - Italy</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                    </div> --}}
                    {{-- <div class="packages-price py-2 px-4">$549.00</div> --}}
                </div>
                <div class="packages-content bg-light">
                    <div class="p-4 pb-0">
                        <h5 class="mb-0">{{ $package->package_name }}</h5>
                        <small class="text-uppercase">Hotel Deals</small>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p class="mb-4">{{ $package->short_description }}</p>
                    </div>
                    <div class="row bg-primary rounded-bottom mx-0">
                        <div class="col-6 text-start px-0">
                            <a href="{{route('package.details',$package->package_id)}}" class="btn-hover btn text-white py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
            
          
            </div></div> 
            @endforeach
            
        
        
        </div></div><div class="owl-nav"><div class="owl-prev"><i class="bi bi-arrow-left"></i></div><div class="owl-next"><i class="bi bi-arrow-right"></i></div></div><div class="owl-dots disabled"></div></div>
    
        </div>
</div>
<!-- Packages End -->

 <!-- Tour Booking Start -->
 <div class="container-fluid booking py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h5 class="section-booking-title pe-3">Booking</h5>
                <h1 class="text-white mb-4">Online Booking</h1>
                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                </p>
                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                </p>
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