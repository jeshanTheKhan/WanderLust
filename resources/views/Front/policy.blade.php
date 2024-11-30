@extends('layouts.front.frontend')
@section('content')

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Privacy Policy</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">About</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
<!-- Privacy Policy Content -->
<main class="container my-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <section class="mb-5">
                <h2>Introduction</h2>
                <p>At WanderLust, we take your privacy seriously. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services.</p>
            </section>

            <section class="mb-5">
                <h2>Information We Collect</h2>
                <p>We collect information that you provide directly to us, including:</p>
                <ul>
                    <li>Name and contact information</li>
                    <li>Booking and travel preferences</li>
                    <li>Payment information</li>
                    <li>Communication history</li>
                </ul>
            </section>

            <section class="mb-5">
                <h2>How We Use Your Information</h2>
                <p>We use the information we collect to:</p>
                <ul>
                    <li>Process your travel bookings</li>
                    <li>Communicate with you about our services</li>
                    <li>Improve our website and services</li>
                    <li>Send you marketing communications (with your consent)</li>
                </ul>
            </section>

            <section class="mb-5">
                <h2>Information Sharing</h2>
                <p>We may share your information with:</p>
                <ul>
                    <li>Travel service providers</li>
                    <li>Payment processors</li>
                    <li>Marketing partners (with your consent)</li>
                    <li>Legal authorities when required by law</li>
                </ul>
            </section>

            <section class="mb-5">
                <h2>Your Rights</h2>
                <p>You have the right to:</p>
                <ul>
                    <li>Access your personal information</li>
                    <li>Correct inaccurate information</li>
                    <li>Request deletion of your information</li>
                    <li>Opt-out of marketing communications</li>
                </ul>
            </section>

            <section class="mb-5">
                <h2>Security</h2>
                <p>We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
            </section>

            <section class="mb-5">
                <h2>Contact Us</h2>
                <p>If you have any questions about this Privacy Policy, please contact us at:</p>
                <p>Email: {{ $office->office_email }}<br>
                Phone: {{ $office->office_phonenumber }}</p>
            </section>
        </div>
    </div>
</main>

@endsection