<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ENERO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="index.html" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-white">ENERO</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/home') }}" class="nav-item nav-link">Home</a>
                @guest
                <a href="{{ url('login') }}" class="nav-item nav-link">Login</a>
                @else
                <a href="/carts" class="nav-item nav-link"><i class="bi bi-cart"></i> Cart</a>
                <a href="{{ url('/riwayat') }}" class="nav-item nav-link">Transaksi</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        @if(Auth::check())
                        {{ __(" " . Auth::user()->name . "") }}
                        @endif
                    </a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{ route('profile.edit') }}" class="dropdown-item active">Profile</a>
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                @endguest
            </div>

        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Content Start -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg custom-class">
                <div class="max-w-xl">
                    <section>
                        <div class="row">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header"><h4 class="text-lg font-medium text-gray-900">
                                                {{ __('Profile Information') }}
                                            </h4>
                                            </div>
                                            <div class="card-body">
                                                <header>
                                                    <p class="mt-1 text-sm text-gray-600">
                                                        {{ __("Update your account's profile information and email address.") }}
                                                    </p>
                                                </header>

                                                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                                    @csrf
                                                </form>

                                                <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                                                        @csrf
                                                        @method('patch')

                                                        
                                                        <div class="form-group mb-3" style="align-items: start; text-align: left; color: black !important;">
                                                            <x-input-label class="form-group mb-3"  for="name" :value="__('Name')" />
                                                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                                                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                                        </div>

                                                        <div class="form-group mb-3" style="align-items: start; text-align: left; color: black !important;">
                                                            <x-input-label for="email" :value="__('Email')" />
                                                            <x-text-input  id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                                                            <x-input-error class="mt-2" :messages="$errors->get('email')" />

                                                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                                                <div>
                                                                    <p class="text-sm mt-2 text-gray-800">
                                                                        {{ __('Alamat email Anda belum diverifikasi.') }}

                                                                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                            {{ __('Klik di sini untuk mengirim ulang email verifikasi.') }}
                                                                        </button>
                                                                    </p>

                                                                    @if (session('status') === 'verification-link-sent')
                                                                        <p class="mt-2 font-medium text-sm text-green-600">
                                                                            {{ __('A new verification link has been sent to your email address.') }}
                                                                        </p>
                                                                    @endif
                                                                </div>
                                                            @endif
                                                        </div>

                                                        <div class="form-group mb-3" style="align-items: start; text-align: left; color: black !important;">
                                                            <x-input-label class="form-group mb-3"  for="alamat" :value="__('Alamat')" />
                                                            <x-text-input id="alamat" name="alamat" type="text" class="mt-1 block w-full" :value="old('alamat', $user->alamat)" required autofocus autocomplete="alamat" />
                                                            <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
                                                        </div>

                                                        <div class="flex items-center gap-4">
                                                            <x-primary-button class="btn btn-secondary mt-4">{{ __('Save') }}</x-primary-button>
                                                             

                                                            @if (session('status') === 'profile-updated')
                                                                <p
                                                                    x-data="{ show: true }"
                                                                    x-show="show"
                                                                    x-transition
                                                                    x-init="setTimeout(() => show = false, 2000)"
                                                                    class="text-sm text-gray-600"
                                                                >{{ __('Saved.') }}</p>
                                                            @endif
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                <section>
                        <div class="row">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header"><h4 class="text-lg font-medium text-gray-900">
                                                        {{ __('Update Password') }}
                                                    </h4>
                                            </div>
                                            <div class="card-body">
                                                <header>
                                                    <p class="mt-1 text-sm text-gray-600">
                                                        {{ __('Ensure your account is using a long, random password to stay secure.') }}
                                                    </p>
                                                </header>

                                                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                                                    @csrf
                                                    @method('put')

                                                    <div class="form-group mb-3" style="align-items: start; text-align: left; color: black !important;">
                                                        <x-input-label for="current_password" :value="__('Current Password')" />
                                                        <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                                                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                                    </div>

                                                    <div class="form-group mb-3" style="align-items: start; text-align: left; color: black !important;">
                                                        <x-input-label for="password" :value="__('New Password')" />
                                                        <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                                                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                                    </div>

                                                    <div class="form-group mb-3" style="align-items: start; text-align: left; color: black !important;">
                                                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                                        <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                                                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                                    </div>

                                                    <div class="flex items-center gap-4">
                                                        <x-primary-button  class="btn btn-secondary mt-4">{{ __('Save') }}</x-primary-button>

                                                        @if (session('status') === 'password-updated')
                                                            <p
                                                                x-data="{ show: true }"
                                                                x-show="show"
                                                                x-transition
                                                                x-init="setTimeout(() => show = false, 2000)"
                                                                class="text-sm text-gray-600"
                                                            >{{ __('Saved.') }}</p>
                                                        @endif
                                                    </div>
                                                </form>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6">
                        <h4 class="text-light mb-4">Address</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Surabaya</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 812-3453-7045</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>enero10@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h4 class="text-light mb-4">Services</h4>
                        <a class="btn btn-link" href="">Product</a>
                        <a class="btn btn-link" href="">Cart</a>
                        <a class="btn btn-link" href="">Checkout</a>
                        <a class="btn btn-link" href="">History</a>
                        <a class="btn btn-link" href="">Testimoni</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">ENERO</a>, All Right Reserved.
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


   


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js">
         
    </script>
</body>

</html>
