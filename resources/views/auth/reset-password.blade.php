
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>CelestialUI Admin</title>
        <!-- base:css -->
        <link rel="stylesheet" href="{{ asset('public/login/vendors/typicons.font/font/typicons.css') }}">
        <link rel="stylesheet" href="{{ asset('public/login/vendors/css/vendor.bundle.base.css') }}">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{ asset('public/login/css/vertical-layout-light/style.css') }}">
        <!-- endinject -->
        <link rel="shortcut icon" href="{{ asset('public/login/images/favicon.png') }}" />
    </head>
    
    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                                <div class="brand-logo">
                                    <img src="{{ asset('public/login/images/logo.svg') }}" alt="logo">
                                </div>
                                <h4>New here?</h4>
                                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps.</h6>
                                <form class="pt-3" method="POST" action="{{ route('password.store') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-lg"  type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg" name="password" required autocomplete="new-password" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" placeholder=" Retype Password" required>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                            SUBMIT
                                        </button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- base:js -->
        <script src="{{ asset('public/login/vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- inject:js -->
        <script src="{{ asset('public/login/js/off-canvas.js') }}"></script>
        <script src="{{ asset('public/login/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('public/login/js/template.js') }}"></script>
        <script src="{{ asset('public/login/js/settings.js') }}"></script>
        <script src="{{ asset('public/login/js/todolist.js') }}"></script>
        <!-- endinject -->
    </body>
    
    </html>
    
    
