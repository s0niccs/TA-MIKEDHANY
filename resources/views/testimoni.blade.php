<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>

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

    <!-- Template Stylesheet -->
    @vite(['resources/css/style.css', 'resources/css/bootstrap.min.css', 'resources/js/main.js'])
</head>

<body>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Testimoni</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Testimoni section starts  -->
<section class="contact" id="contact">
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!-- resources/views/rating.blade.php -->
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">{{ __('Testimoni') }}</div>
                        <div class="card-body">
                            <h5 class="card-title">Order ID {{ $order->id }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">By {{ $order->user->name }}</h6>
                            <form id="ratingForm" action="{{ route('testimoni.store') }}" method="POST">
                                @csrf
                                @foreach ($order->transactions as $transaction)
                                    <p>{{ $transaction->product->nama_barang }} - {{ $transaction->jumlah }} pcs</p>

                                    <div class="ratingForm" data-product-id="{{ $transaction->product->id }}">
                                        <div class="rating">
                                            <input type="hidden" name="testimoni[{{ $transaction->product->id }}][rating]" class="selectedRating" value="0">
                                            <input type="hidden" name="testimoni[{{ $transaction->product->id }}][product_id]" value="{{ $transaction->product->id }}">
                                            <input type="hidden" name="testimoni[{{ $transaction->product->id }}][user_id]" value="{{ $order->user->id }}">
                                            <input type="hidden" name="testimoni[{{ $transaction->product->id }}][order_id]" value="{{ $order->id }}">
                                            <i class="star fas fa-star" data-rating="1"></i>
                                            <i class="star fas fa-star" data-rating="2"></i>
                                            <i class="star fas fa-star" data-rating="3"></i>
                                            <i class="star fas fa-star" data-rating="4"></i>
                                            <i class="star fas fa-star" data-rating="5"></i>
                                        </div>
                                        <hr>
                                        <div class="form-group mb-3" style="align-items: start; text-align: left; color: black !important;">
                                            <label for="alamat">Komentar<span class="required">*</span></label>
                                            <textarea class="form-control" name="testimoni[{{ $transaction->product->id }}][komentar]" id="alamat" placeholder="Masukkan komentar" cols="30" rows="5">{{ old('komentar', '') }}</textarea>
                                        </div>
                                    </div>
                                @endforeach
                                <button type="submit" class="btn btn-secondary mt-3">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimoni section ends -->

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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

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
    <script>
        $(document).ready(function(){
            $(".star").click(function(){
                var selectedRating = $(this).data("rating");

                // Set nilai rating yang dipilih ke input tersembunyi dalam form yang sesuai
                $(this).closest(".ratingForm").find(".selectedRating").val(selectedRating);

                // Ganti warna bintang-bintang sebelumnya menjadi warna pilihan
                $(this).prevAll().addBack().addClass("rated");
                $(this).nextAll().removeClass("rated");
            });
        });
    </script>

    <style>
        .rated {
            color: gold;
        }
    </style>
</body>

</html>
