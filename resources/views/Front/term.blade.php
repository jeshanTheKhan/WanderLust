@extends('layouts.front.frontend')
@section('content')

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Term & Condition</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
  <!-- Main Content -->
  <div class="container my-5">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body p-4 p-md-5">
                    <h2 class="mb-4">1. Acceptance of Terms</h2>
                    <p>By accessing and using Travela's website and services, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions.</p>

                    <h2 class="mb-4 mt-5">2. Booking and Payments</h2>
                    <ul class="list-unstyled">
                        <li class="mb-3">• All bookings are subject to availability and confirmation</li>
                        <li class="mb-3">• Payment terms vary by package and will be clearly communicated during booking</li>
                        <li class="mb-3">• Prices are subject to change without prior notice</li>
                    </ul>

                    <h2 class="mb-4 mt-5">3. Cancellation Policy</h2>
                    <p>Cancellation policies vary depending on the package and timing:</p>
                    <ul class="list-unstyled">
                        <li class="mb-3">• 30+ days before departure: Full refund minus processing fees</li>
                        <li class="mb-3">• 15-29 days before departure: 50% refund</li>
                        <li class="mb-3">• 14 days or less before departure: No refund</li>
                    </ul>

                    <h2 class="mb-4 mt-5">4. Travel Insurance</h2>
                    <p>We strongly recommend purchasing comprehensive travel insurance. Travela is not responsible for any losses or damages during your trip.</p>

                    <h2 class="mb-4 mt-5">5. Passport and Visas</h2>
                    <p>Travelers are responsible for ensuring they have valid passports and necessary visas for their destination.</p>

                    <h2 class="mb-4 mt-5">6. Privacy Policy</h2>
                    <p>Your privacy is important to us. Please review our Privacy Policy to understand how we collect and use your personal information.</p>

                    <h2 class="mb-4 mt-5">7. Limitation of Liability</h2>
                    <p>Travela shall not be liable for any direct, indirect, incidental, special, or consequential damages resulting from the use or inability to use our services.</p>

                    <div class="mt-5 pt-4 border-top">
                        <p class="text-muted">Last updated: November 30, 2023</p>
                        <p class="text-muted mb-0">If you have any questions about these Terms and Conditions, please contact us.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection