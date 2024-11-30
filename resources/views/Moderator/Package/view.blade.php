@extends('layouts.moderator.backend')
@section('content')
<div class="right_col" role="main">
<!-- Package Details -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <h2 class="mb-4">{{ $package->package_name }}</h2>
                <img src="{{asset('storage/back/media/package/'.$package->package_images)}}" style="width: 50%;height:50%;" alt="Avatar" title="Change the avatar">
                <p class="lead">{{ $package->short_description }}</p>
                
               
                <p class="lead">{!! $package->main_description !!}</p>
              
            </div>
        </div>
    </div>
</section>
</div>
@endsection