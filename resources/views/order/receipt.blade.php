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
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Order Detail</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



    <!-- receipt starts  -->
    <section class="contact" id="contact">
        <div class="row">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Order Detail') }}</div>

                            @php
                                $total_price = 0.0;
                            @endphp

                            <div class="card-body">
                                <h5 class="card-title">Order ID {{ $order->id }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">By {{ $order->user->name }}</h6>
                                <hr>
                                @foreach ($order->transactions as $transaction)
                                    <p>{{ $transaction->product->nama_barang }} - {{ $transaction->jumlah }} pcs</p>
                                    @php
                                        $total_price += $transaction->product->harga * $transaction->jumlah;
                                    @endphp
                                @endforeach
                                <hr>
                                <p>Total: Rp{{ number_format($total_price, 0, ',', '.') }}</p>
                                <hr>
                                <h6 class="card-title">Nama : {{ $order->nama }}</h6>
                                <h6 class="card-title">Alamat : {{ $order->alamat }}</h6>
                                <h6 class="card-title">No Telepon : {{ $order->no_telepon }}</h6>
                                <h6> Status Pembayaran : 
                                     @if ($order->verifikasi === 'tolak')
                                        Transaksi ditolak, silahkan melakukan checkout kembali
                                    @elseif ($order->verifikasi === 'terima')
                                        Transaksi diterima.
                                        <a  href="{{ url('testimoni', ['id' => $order->id]) }}">
                                            <button class="btn btn-secondary mt-4" type="button">Beri Penilaian</button>
                                        </a>
                                    @else
                                        Sedang dalam proses verifikasi pembayaran
                                    @endif 
                                </h6>
                            </div>
                        </div>
                        <div class="d-flex flex-column ">
                            <a href="/products"><button class="btn btn-primary me-4 mt-3"
                                    type="button">Back</button></a>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- receipt ends -->


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
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
