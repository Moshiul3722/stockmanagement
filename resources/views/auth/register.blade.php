<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

    <!-- color-modes:js -->
    <script src="{{ asset('assets/js/color-modes.js') }}"></script>
    <!-- endinject -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap"
        rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css') }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo2/style.css') }}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>

<body class="navbar-dark">
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pe-md-0">
                                    <div class="auth-side-wrapper">

                                    </div>
                                </div>
                                <div class="col-md-8 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <img style="width: 20rem" src="{{ asset('assets/images/logo.png') }}"
                                            alt="" srcset="">
                                        <h5 class="text-secondary fw-normal mb-4">Create a free account.</h5>

                                        <form class="forms-sample" method="POST" action="{{ route('register') }}">
                                            @csrf



                                            <!-- Name -->


                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    autocomplete="name" placeholder="Name">
                                            </div>

                                            {{-- <div>
                                                <x-input-label for="name" :value="__('Name')" />
                                                <x-text-input id="name" class="block mt-1 w-full" type="text"
                                                    name="name" :value="old('name')" required autofocus
                                                    autocomplete="name" />
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div> --}}

                                            <!-- Email Address -->

                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Email">
                                            </div>



                                            {{-- <div class="mt-4">
                                                <x-input-label for="email" :value="__('Email')" />
                                                <x-text-input id="email" class="block mt-1 w-full" type="email"
                                                    name="email" :value="old('email')" required autocomplete="username" />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div> --}}

                                            <!-- Password -->

                                            {{-- <div class="mt-4">
                                                <x-input-label for="password" :value="__('Password')" />

                                                <x-text-input id="password" class="block mt-1 w-full" type="password"
                                                    name="password" required autocomplete="new-password" />

                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div> --}}

                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password"
                                                    name="password" autocomplete="password" placeholder="Password">
                                            </div>


                                            <!-- Confirm Password -->

                                            <div class="mb-3">
                                                <label for="password_confirmation" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    name="password_confirmation" autocomplete="new-password"
                                                    placeholder="Confirm Password">
                                            </div>





                                            {{-- <div class="mt-4">
                                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                    type="password" name="password_confirmation" required
                                                    autocomplete="new-password" />

                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                            </div> --}}


                                            <div>
                                                <button class="btn btn-primary text-white me-2 mb-2 mb-md-0">Sign
                                                    up</button>

                                            </div>

                                            </a>
                                            <a href="{{ route('login') }}" class="d-block mt-3 text-secondary">Already a
                                                user?
                                                Sign in</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('assets/vendors/core/core.js') }}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <!-- End custom js for this page -->

</body>

</html>
