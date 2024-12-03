@extends('layouts.front.frontend')
@section('content')

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Our Blog</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

       <!-- Blog Start -->
       <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Our Blog</h5>
                <h1 class="mb-4">Popular Travel Blogs</h1>
                
            </div>
            <div class="row g-4 justify-content-center">
                
                @foreach ($blog as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="{{asset('storage/back/media/blog/'.$blog->blog_main_image)}}" alt="Image">
                                <div class="blog-icon">
                                    <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                            <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $blog->blog_date }}</small>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <p class="mb-3">Posted By: {{ $blog->blog_posted }} </p>
                            <a href="#" class="h4">{{ $blog->blog_header }}</a>
                            <p class="my-3">{{ $blog->blog_short_description }}</p>
                            <a href="{{ route('blog.details',$blog->blog_id ) }}" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
                

            </div>
        </div>
    </div>
    <!-- Blog End -->

               <!-- Subscribe Start -->
               <div class="container-fluid subscribe py-5">
                <div class="container text-center py-5">
                    <div class="mx-auto text-center" style="max-width: 900px;">
                        <h5 class="subscribe-title px-3">Subscribe</h5>
                        <h1 class="text-white mb-4">Our Newsletter</h1>
                        <p class="text-white mb-5">For Next Update .Please Subscribe Our Website.Please Stay With us.
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