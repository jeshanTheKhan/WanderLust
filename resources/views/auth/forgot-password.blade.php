{{-- 
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form> --}}

    <!DOCTYPE html>
    <html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>WanderLust</title>
  <!-- base:css -->
  <link rel="stylesheet" href="public/backend/login/vendors/typicons.font/font/typicons.css">
  <link rel="stylesheet" href="public/backend/login/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="public/backend/login/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="public/backend/login/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo" style="text-align: center"> 
                <img src="public/backend/login/images/WhatsApp_Image_2024-11-19_at_20.42.42_f44f7eac-removebg-preview.png" height="150px" alt="logo">
                <h1 style="text-align: center;color:#1E90FF">Send Request For Update Password</h1>
              </div>

              <form class="pt-3" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="email" :value="old('email')" required autofocus autocomplete="username">
                </div>
               
                <div class="mt-3">
                  {{-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="public/backend/login/index.html">SIGN IN</a> --}}
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">Send Request</button>
                </div>
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
  <script src="public/backend/login/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="public/backend/login/js/off-canvas.js"></script>
  <script src="public/backend/login/js/hoverable-collapse.js"></script>
  <script src="public/backend/login/js/template.js"></script>
  <script src="public/backend/login/js/settings.js"></script>
  <script src="public/backend/login/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>


