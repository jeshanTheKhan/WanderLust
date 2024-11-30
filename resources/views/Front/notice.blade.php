@extends('layouts.front.frontend')
@section('content')

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Legal Notice</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
<br>
 <!-- Legal Content -->
 <div class="legal-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <section class="mb-5">
                    <h2 class="section-title">Company Information</h2>
                    <p>WanderLust<br>
                    Address : {{$office->office_address}}</p>
                    E-Mail : {{$office->office_email}}</p>
                    Cell Phone : {{$office->office_phonenumber}}</p>
                    Telephone : {{$office->office_telephone}}</p>
                </section>

                <section class="mb-5">
                    <h2 class="section-title">Terms of Use</h2>
                    <p>By accessing and using this website, you accept and agree to be bound by the terms and provision of this agreement. The content of this website is for general information and use only.</p>
                </section>

                <section class="mb-5">
                    <h2 class="section-title">Privacy Policy</h2>
                    <p>We are committed to protecting your privacy. Any personal information collected will be used in accordance with our privacy policy. We do not sell, trade, or transfer your personally identifiable information to third parties.</p>
                </section>

                <section class="mb-5">
                    <h2 class="section-title">Copyright Notice</h2>
                    <p>All content on this website, including text, graphics, logos, images, and software, is the property of Travela or its content suppliers and is protected by international copyright laws.</p>
                </section>

                <section class="mb-5">
                    <h2 class="section-title">Disclaimer</h2>
                    <p>The information contained in this website is for general information purposes only. While we endeavor to keep the information up to date and correct, we make no representations or warranties of any kind about the completeness, accuracy, reliability, suitability, or availability of the website.</p>
                </section>
            </div>
        </div>
    </div>
</div>

        <br>
@endsection