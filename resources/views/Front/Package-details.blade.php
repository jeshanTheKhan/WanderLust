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


<!-- Package Details -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <h2 class="mb-4">{{ $data->package_name }}</h2>
                <img src="{{asset('storage/back/media/package/'.$data->package_images)}}" style="width: 50%;height:50%;" alt="Avatar" title="Change the avatar">
                <p class="lead">{{ $data->short_description }}</p>
                
               
                <p class="lead">{!! $data->main_description !!}</p>
              
            </div>
        </div>
    </div>
</section>
@endsection