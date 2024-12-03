@extends('layouts.front.frontend')
@section('content')
   <!-- Header Start -->
   <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Our Services</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
        </ol>    
    </div>
</div>
<!-- Header End -->

   <!-- Services Start -->
   <div class="container-fluid bg-light service py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Services</h5>
            <h1 class="mb-0">Our Services</h1>
        </div>
        <div class="row g-4 justify-content-end">
            @foreach($service as $service)
                        <div class="col-lg-12">
                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4">
                    <div class="service-content text-end pe-4 flex-grow-1">
                                <h5 class="mb-4" >{{ $service->service_header }}</h5>
                                <p class="mb-0">{{ $service->service_description }}
                                </p>
                            </div>
                            <div class="service-icon flex-shrink-0">
                                <img src="{{ asset('storage/back/media/services/'.$service->service_icon) }}" style="width: 80px; height: auto;" 
                                alt="Avatar" 
                                title="Service Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Services End -->
    <!-- Testimonial Start -->
<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Testimonial</h5>
            <h1 class="mb-0">Our Clients Say!!!</h1>
        </div>
        @foreach ($testimonial as $testimonial)
        <div class="testimonial-carousel">
            <div class="testimonial-item text-center rounded pb-4">
                <div class="testimonial-comment bg-light rounded p-4">
                    <p class="text-center mb-5">{{ $testimonial->client_comment }}</p>
                </div>
                <div class="testimonial-img p-1">
                    <img src="{{asset('storage/back/media/testimonial/'.$testimonial->client_image)}}" class="img-fluid rounded-circle" alt="John Abraham">
                </div>
                <div style="margin-top: -35px;">
                    <h5 class="mb-0">{{ $testimonial->client_name }}</h5>
                    <p class="mb-0">{{ $testimonial->client_location }}</p>
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                </div>
            </div>
        </div> 
        @endforeach
       
    </div>
</div>
<!-- Testimonial End -->
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