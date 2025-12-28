{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from techzaa.in/larkon/admin/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Dec 2025 05:53:46 GMT -->

<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title>Sign In | Larkon - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully responsive premium admin dashboard template" />
    <meta name="author" content="Techzaa" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico">

    <!-- Vendor css (Require in all Page) -->
    <link href="{{ asset('assets') }}/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons css (Require in all Page) -->
    <link href="{{ asset('assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- App css (Require in all Page) -->
    <link href="{{ asset('assets') }}/css/app.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config js (Require in all Page) -->
    <script src="{{ asset('assets') }}/js/config.js"></script>
</head>

<body class="h-100">
    <div class="d-flex flex-column h-100 p-3">
        <div class="d-flex flex-column flex-grow-1">
            <div class="row h-100">
                <div class="col-xxl-7">
                    <div class="row justify-content-center h-100">
                        <div class="col-lg-6 py-lg-5">
                            <div class="d-flex flex-column h-100 justify-content-center">
                                <div class="auth-logo mb-4">
                                    <a href="index.html" class="logo-dark">
                                        <img src="{{ asset('assets') }}/images/logo-dark.png" height="24"
                                            alt="logo dark">
                                    </a>

                                    <a href="index.html" class="logo-light">
                                        <img src="{{ asset('assets') }}/images/logo-light.png" height="24"
                                            alt="logo light">
                                    </a>
                                </div>

                                <h2 class="fw-bold fs-24">Sign In</h2>

                                <p class="text-muted mt-1 mb-4">Enter your email address and password to access admin
                                    panel.</p>

                                <div class="mb-5">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label"
                                                for="example-email">{{ __('Email Address') }}</label>
                                            <input type="email" id="example-email"
                                                @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                                required autocomplete="email" autofocus name="example-email"
                                                class="form-control bg-" placeholder="Enter your email">
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror


                                        <div class="mb-3">
                                            <a href="auth-password.html"
                                                class="float-end text-muted text-unline-dashed ms-1">Reset password</a>
                                            <label class="form-label"
                                                for="example-password">{{ __('Password') }}</label>
                                            <input id="example-password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required
                                                autocomplete="current-password"class="form-control"
                                                placeholder="Enter your password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="checkbox-signin" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="checkbox-signin">{{ __('Remember Me') }}</label>
                                            </div>
                                        </div>


                                        <div class="mb-1 text-center d-grid">
                                            <button class="btn btn-soft-primary" type="submit"> {{ __('Login') }}</button>
                                             @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                        </div>
                                    </form>

                                    <p class="mt-3 fw-semibold no-span">OR sign with</p>

                                    <div class="d-grid gap-2">
                                        <a href="javascript:void(0);" class="btn btn-soft-dark"><i
                                                class="bx bxl-google fs-20 me-1"></i> Sign in with Google</a>
                                        <a href="javascript:void(0);" class="btn btn-soft-primary"><i
                                                class="bx bxl-facebook fs-20 me-1"></i> Sign in with Facebook</a>
                                    </div>
                                </div>

                                <p class="text-danger text-center">Don't have an account? <a
                                        href="{{ route('register') }}" class="text-dark fw-bold ms-1">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-5 d-none d-xxl-flex">
                    <div class="card h-100 mb-0 overflow-hidden">
                        <div class="d-flex flex-column h-100">
                            <img src="{{ asset('assets') }}/images/small/img-10.jpg" alt=""
                                class="w-100 h-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor Javascript (Require in all Page) -->
    <script src="{{ asset('assets') }}/js/vendor.js"></script>

    <!-- App Javascript (Require in all Page) -->
    <script src="{{ asset('assets') }}/js/app.js"></script>

</body>


<!-- Mirrored from techzaa.in/larkon/admin/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Dec 2025 05:53:46 GMT -->

</html>
