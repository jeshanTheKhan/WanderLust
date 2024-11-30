@extends('layouts.front.frontend')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Packages</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

<!-- Blog Header -->
<header class="blog-header text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">{{ $data->blog_header }}</h1>
        <div class="d-flex justify-content-center gap-4 mt-4">
            <span><i class="far fa-user me-2"></i>By {{ $data->user }}</span>
            <span><i class="far fa-calendar me-2"></i>{{ $data->blog_date }}</span>
            <span><i class="far fa-comments me-2"></i>3 Comments</span>
        </div>
    </div>
</header>

<!-- Blog Content -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <article class="blog-content">
                <img src="{{asset('storage/back/media/blog/'.$data->blog_main_image)}}" alt="{{ $data->place }}" class="mb-4">
                <p>{{$data->blog_short_description}}</p>


                <h2 class="mt-4 mb-3">Details : </h2>
               <p>
                {!! $data->blog_main_description !!}
               </p>
            </article>



            <!-- Comments Section -->
            {{-- <div class="mt-5">
                <h3 class="mb-4">3 Comments</h3>
                
                <!-- Comment -->
                <div class="d-flex mb-4">
                    <img src="/placeholder.svg" alt="Commenter" class="rounded-circle" width="60" height="60">
                    <div class="ms-3">
                        <h5 class="mb-1">Sarah Johnson</h5>
                        <p class="text-muted mb-2">December 16, 2023</p>
                        <p>Great article! The tips are really helpful for beginners like me.</p>
                        <button class="btn btn-sm btn-outline-primary">Reply</button>
                    </div>
                </div>

                <!-- Comment Form -->
                <div class="bg-light p-4 rounded-3 mt-5">
                    <h4 class="mb-4">Leave a Comment</h4>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" rows="4" placeholder="Your Comment"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Post Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> --}}
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Search Widget -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title mb-3">Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search posts...">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>

            <!-- Categories Widget -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title mb-3">Place List</h4>
                    <ul class="list-unstyled mb-0">
                        @foreach ($place as $place)
                        <li class="mb-2"><a  class="text-decoration-none">{{ $place->place_name }}</a></li>           
                        @endforeach
       
                    </ul>
                </div>
            </div>

            <!-- Recent Posts Widget -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title mb-3">Recent Package</h4>
                    @foreach ($package as $package)
                    <div class="d-flex mb-3">
                        <img src="{{asset('storage/back/media/package/'.$package->package_images)}}" alt="Post thumbnail" class="rounded" width="80" height="80">
                        <div class="ms-3">
                            <h6 class="mb-1"><a href="#" class="text-decoration-none">{{ $package->package_name }}</a></h6>
                            <small class="text-muted">{{ $package->place }}</small>
                        </div>
                    </div>
                    @endforeach
                
               
                </div>
            </div>

            <!-- Tags Widget -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Tags</h4>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="#" class="btn btn-sm btn-outline-secondary">Travel</a>
                        <a href="#" class="btn btn-sm btn-outline-secondary">Adventure</a>
                        <a href="#" class="btn btn-sm btn-outline-secondary">Photography</a>
                        <a href="#" class="btn btn-sm btn-outline-secondary">Nature</a>
                        <a href="#" class="btn btn-sm btn-outline-secondary">Tips</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection