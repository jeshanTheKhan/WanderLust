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



</section>
<div class="container-fluid p-0">
    <!-- Header -->

  
    <!-- Package Details -->
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="mb-4">{{ $data->package_name }}</h2>
          <img src="{{asset('storage/back/media/package/'.$data->package_images)}}" class="img-fluid mb-4 rounded" alt="{{ $data->package_name }}">
          <p class="lead mb-4">{{ $data->short_description }}</p>
          <div class="package-description">
            {!! $data->main_description !!}
          </div>
        </div>
      </div>
    </div>
@endsection