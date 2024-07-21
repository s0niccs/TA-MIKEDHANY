<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap 5 Admin Dashboards" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="canonical" href="https://www.bootstrap.gallery/">
		<meta property="og:url" content="https://www.bootstrap.gallery">
		<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
		<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
		<meta property="og:type" content="Website">
		<meta property="og:site_name" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="images/favicon.svg" />
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		<!-- Title -->
		<title>Best Admin Dashboards</title>

		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Animated css -->
		<link rel="stylesheet" href="css/animate.css" />

		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="fonts/icomoon/icomoon.css" />

		<!-- Main css -->
        <link href="css/main.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
			integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
			crossorigin=""/>
			 <!-- Make sure you put this AFTER Leaflet's CSS -->
			<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
				integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
				crossorigin=""></script>

		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="vendor/overlay-scroll/OverlayScrollbars.min.css" />
		@vite(['resources/css/main.min.css', 'resources/css/animate.css', 'resources/js/mainn.js'])

		<style>
        #map {
            height: 500px;
            width: 100%;
        }
    	</style>

	</head>

	<body>


		<!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Sidebar wrapper start -->
			<nav class="sidebar-wrapper">

				<!-- Sidebar brand starts -->
				<div class="sidebar-brand">
					<a href="index.html" class="logo">
						<img src="images/logo.svg" alt="Admin Dashboard Templates" />
					</a>
				</div>
				<!-- Sidebar brand starts -->

				<!-- Sidebar menu starts -->
				<div class="sidebarMenuScroll">
					<div class="sidebar-menu">
						<ul>
							<li>
								<a>
								<x-nav-link :href="route('home')" :active="request()->routeIs('user.index')" class="text-center">
									{{ __('Dashboard') }}
								</x-nav-link>
								</a>
							</li>
							<li>
							<li>
								<a>
								<x-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')" class="text-center">
									{{ __('Users') }}
								</x-nav-link>
								</a>
							</li>
							<li>
								<a>
								<x-nav-link :href="route('product.index')" :active="request()->routeIs('user.index')" class="text-center">
									{{ __('Products') }}
								</x-nav-link>
								</a>
							</li>
							<li>
								<a>
								<x-nav-link :href="route('orders.index')" :active="request()->routeIs('user.index')" class="text-center">
									{{ __('Orders') }}
								</x-nav-link>
								</a>
							</li>
							<li>
								<a>
								<x-nav-link :href="route('transactions.index')" :active="request()->routeIs('user.index')" class="text-center">
									{{ __('Transaction') }}
								</x-nav-link>
								</a>
							</li>
							<li>
								<a>
								<x-nav-link :href="route('testimoni.index')" :active="request()->routeIs('user.index')" class="text-center">
									{{ __('Testimoni') }}
								</x-nav-link>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Sidebar menu ends -->

			</nav>
			<!-- Sidebar wrapper end -->

			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">

				<!-- Page header starts -->
				<div class="page-header">

					<!-- Breadcrumb container start -->
					<div class="breadcrumb-container">

						<!-- Toggle sidebar start -->
						<div class="toggle-sidebar" id="toggle-sidebar">
							<i class="icon-menu"></i>
						</div>
						<!-- Toggle sidebar end -->


						<!-- App brand start -->
						<div class="app-brand-sm">
							<a href="index.html" class="d-xl-none d-lg-block">
								<img src="images/logo.svg" class="logo" alt="Bootstrap Gallery">
							</a>
						</div>
						<!-- App brand end -->

						<!-- Breadcrumb start -->
						<ol class="breadcrumb d-xl-flex d-none">
							<li class="breadcrumb-item">
								<i class="icon-house_siding"></i>
								<a href="index.html">Home</a    >
							</li>
							<li class="breadcrumb-item breadcrumb-active" aria-current="page">
								Dashboard Admin
							</li>
						</ol>
						<!-- Breadcrumb end -->

					</div>
					<!-- Breadcrumb container end -->

					<!-- Header actions ccontainer start -->
					<div class="header-actions-container">

						<!-- Header actions start -->
						<ul class="header-actions">
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name d-none d-md-block">Ella Lindsey</span>
									<span class="avatar">
										<img src="images/user.png" alt="Admin Themes" />
										<span class="status online"></span>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
									<div class="header-profile-avatar">
										<img src="images/user.png" alt="Admin Themes" />
									</div>
									<div class="header-profile-block">
										<h5>Ella Lindsey</h5>
										<p>Admin</p>
									</div>
									<div class="header-profile-actions">
										<a href="profile.html" class="gradient-blue"><i class="icon-person_outline"></i>Profile</a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();" class="gradient-red">
                                                                <i class="icon-power_settings_new"></i>
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
									</div>
								</div>
							</li>
						</ul>
						<!-- Header actions end -->

					</div>
					<!-- Header actions ccontainer end -->

				</div>
				<!-- Page header ends -->

				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

					<!-- Content wrapper start -->
					<div class="content-wrapper">

					<div class="container mt-5">
						<h1 class="text-center mb-4">Admin Analytics Dashboard </h1>
						<!-- Row start -->
						<div class="row gutters">
							<!-- Kartu pertama (peta) -->
							<div class="">
								<div class="card gradient-orange2 ">
									<div class="gradient-vertical-strip"></div>
									<div class="card-body">
										<div class="card-title">
											<h3>Map <br></h3>
										</div><br>
										<div id="map"></div>
									</div>
								</div>
							</div>
							<!-- Kartu kedua (contoh chart atau konten lainnya) -->
							<div class="">
								<div class="card gradient-teal">
									<div class="gradient-vertical-strip"></div>
									<div class="card-body">
									<div class="card-title">
											<h3 style="color=black">Penjualan Produk<br></h3>
										</div><br>
										<canvas id="salesChart" ></canvas>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->
					</div>

					</div>
					<!-- Content wrapper end -->

					<!-- App Footer start -->
					<div class="app-footer">
						<span>© Bootstrap Gallery 2023</span>
					</div>
					<!-- App footer end -->

				</div>
				<!-- Content wrapper scroll end -->

			</div>
			<!-- *************
				************ Main container end *************
			************* -->
		</div>
		<!-- Page wrapper end -->

		<!-- *************
			************ Required JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/modernizr.js"></script>
		<script src="js/moment.js"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Overlay Scroll JS -->
		<script src="vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
		<script src="vendor/overlay-scroll/custom-scrollbar.js"></script>

		<!-- Apex Charts -->
		<script src="vendor/apex/apexcharts.min.js"></script>
		<script src="vendor/apex/custom/home3/notificationsGraph.js"></script>
		<script src="vendor/apex/custom/home3/signupsGraph.js"></script>
		<script src="vendor/apex/custom/home3/qtrTargetGraph.js"></script>
		<script src="vendor/apex/custom/home3/ordersGraph.js"></script>
		<script src="vendor/apex/custom/home3/revenueGraph.js"></script>

		<!-- Circleful Charts -->
		<script src="vendor/circliful/circliful.min.js"></script>
		<script src="vendor/circliful/circliful.custom.js"></script>

		<!-- Main Js Required -->
		<script src="js/mainn.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

		   <!-- Bootstrap JS and dependencies -->
		   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        var map = L.map('map').setView([-2.548926, 118.0148634], 5); // Center map to Indonesia

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var ordersPerCity = @json($ordersPerCity);

        ordersPerCity.forEach(function(city) {
            // Add marker for each city
            // You'll need to replace this with actual coordinates for each city
            var coordinates = getCoordinatesForCity(city.kota);
            if (coordinates) {
                L.marker(coordinates)
                    .bindPopup('<b>' + city.kota + '</b><br>Orders: ' + city.count)
                    .addTo(map);
            }
        });

        function getCoordinatesForCity(cityName) {
			// Convert cityName to lowercase
			// cityName = cityName.toLowerCase();
            // Replace this with actual coordinates for each city
            var cityCoordinates = {
                'jakarta': [-6.2088, 106.8456],
        'surabaya': [-7.2575, 112.7521],
        'bandung': [-6.9175, 107.6191],
        'medan': [3.5952, 98.6722],
        'makassar': [-5.1477, 119.4327],
        'semarang': [-6.9667, 110.4167],
        'palembang': [-2.9909, 104.7567],
        'denpasar': [-8.6500, 115.2167],
        'yogyakarta': [-7.7975, 110.3695],
        'balikpapan': [-1.2654, 116.8312],
        'pontianak': [-0.0275, 109.3425],
        'samarinda': [-0.5022, 117.1536],
        'batam': [1.0822, 104.0305],
        'padang': [-0.9471, 100.4172],
        'malang': [-7.9839, 112.6214],
        'manado': [1.4748, 124.8428],
        'bengkulu': [-3.7889, 102.2655],
        'pekanbaru': [0.5333, 101.4500],
        'jambi': [-1.6100, 103.6100],
        'mataram': [-8.5833, 116.1167],
        'ambon': [-3.6544, 128.1900],
        'banda_aceh': [5.5483, 95.3238],
        'palangkaraya': [-2.2083, 113.9167],
        'kupang': [-10.1788, 123.5820],
        'tarakan': [3.3130, 117.5912],
        'gorontalo': [0.5371, 123.0678],
        'kendari': [-3.9973, 122.5133],
        'ternate': [0.7893, 127.3630],
        'bima': [-8.4659, 118.7260],
        'timika': [-4.5446, 136.8885],
        'jayapura': [-2.5307, 140.7181],
        'sorong': [-0.8762, 131.2558],
        'merauke': [-8.4939, 140.4018],
        'manokwari': [-0.8615, 134.0625],
        'nabire': [-3.3673, 135.5051],
        'tual': [-5.6343, 132.7487],
        'bontang': [0.1333, 117.5000],
        'palu': [-0.8987, 119.8707],
        'bitung': [1.4456, 125.1885],
        'pematangsiantar': [2.9614, 99.0615],
        'singkawang': [0.9093, 108.9846],
        'tasikmalaya': [-7.3274, 108.2207],
        'bogor': [-6.5950, 106.8167],
        'depok': [-6.4025, 106.7942],
        'tangerang': [-6.2024, 106.6527],
        'bekasi': [-6.2349, 106.9924],
        'cimahi': [-6.8721, 107.5422],
        'cirebon': [-6.7170, 108.5523],
        'madiun': [-7.6298, 111.5239],
        'probolinggo': [-7.7496, 113.2153],
        'kediri': [-7.8486, 112.0173],
        'jember': [-8.1724, 113.6995],
        'pasuruan': [-7.6451, 112.9075],
        'tuban': [-6.8976, 112.0648],
        'blitar': [-8.0952, 112.1600],
        'mojokerto': [-7.4726, 112.4333],
        'purwokerto': [-7.4214, 109.2346],
        'purworejo': [-7.7121, 110.0025],
        'klaten': [-7.7058, 110.6050],
        'kudus': [-6.8048, 110.8417],
        'jepara': [-6.5944, 110.6785],
        'pati': [-6.7515, 111.0389],
        'banyuwangi': [-8.2192, 114.3695],
        'tegal': [-6.8674, 109.1199],
        'cilacap': [-7.7188, 109.0153],
        'magelang': [-7.4706, 110.2175],
        'salatiga': [-7.3315, 110.5084],
        'banjarmasin': [-3.3194, 114.5908],
        'banjarbaru': [-3.4417, 114.8275],
        'martapura': [-3.4125, 114.8527],
        'tanah_laut': [-3.8000, 114.8500],
        'tanah_bumbu': [-3.4858, 116.0000],
        'tapin': [-2.8833, 114.9333],
        'hulu_sungai_selatan': [-2.5833, 115.0833],
        'hulu_sungai_tengah': [-2.4000, 115.1667],
        'hulu_sungai_utara': [-2.2500, 115.2500],
        'balangan': [-2.1750, 115.3667],
        'tabalong': [-1.7333, 115.4833],
        'kotabaru': [-3.2333, 116.2333],
        'barito_selatan': [-1.8000, 114.0000],
        'barito_timur': [-1.8000, 115.0833],
        'barito_utara': [-1.5833, 115.0833],
        'murung_raya': [-0.9333, 114.0667],
        'kapuas': [-1.9500, 114.2333],
        'gunung_mas': [-1.3333, 114.9000],
        'katingan': [-1.6167, 113.4500],
        'pulau_pisang': [-1.4000, 109.1000],
        'sekadau': [-0.0348, 110.9686],
        'sintang': [0.0672, 111.4976],
        'sanggau': [0.1253, 110.6168],
        'ketapang': [-1.8541, 109.9731],
        'kayong_utara': [-1.2179, 110.0167],
        'kapuas_hulu': [0.8331, 114.9167],
        'melawi': [-0.7167, 112.3000],
        'landak': [-0.4833, 109.8833],
        'bengkayang': [1.0667, 109.9667],
        'paser': [-1.8875, 116.2167],
        'penajam_paser_utara': [-1.2833, 116.7667],
        'kutai_kartanegara': [-0.7000, 117.0000],
        'kutai_timur': [0.3000, 117.6000],
        'kutai_barat': [0.1389, 116.4697],
        'berau': [2.1167, 117.5000],
        'mahakam_hulu': [1.8333, 115.9500],
        'bulungan': [2.9000, 116.9833],
        'nunukan': [4.0833, 117.6667],
        'malinau': [3.5667, 116.5500],
        'tana_tidung': [3.5333, 117.0000],
        'sembakung': [3.1333, 117.1000],
                // Add more cities here
            };

            return cityCoordinates[cityName];
        }

		// jumlah produk terjual
		var ctxBarr = document.getElementById('salesChart').getContext('2d');
        var dataBarr = {
            labels: {!! json_encode($labels2) !!},
            datasets: [{
                label: 'Total Sales',
                data: {!! json_encode($data2) !!},
                backgroundColor: [
                    'rgba(255, 99, 132, 1.0)',
					'rgba(54, 162, 235, 1.0)',
					'rgba(255, 206, 86, 1.0)',
					'rgba(153, 102, 255, 1.0)',
                ],
            }]
        };
		var options = {
			plugins: {
				legend: {
					labels: {
						color: 'white' // Mengatur warna teks label legend menjadi putih
					}
				}
			},
			scales: {
				x: {
					ticks: {
						color: 'white' // Mengatur warna teks label sumbu x menjadi putih
					}
				},
				y: {
					ticks: {
						color: 'white' // Mengatur warna teks label sumbu y menjadi putih
					}
				}
			}
		};

		var myBarChart = new Chart(ctxBarr, {
			type: 'bar',
			data: dataBarr,
			options: options
		});

        var salesChart = new Chart(ctxBarr, {
            type: 'bar',
            data: dataBarr,
        });
    </script>
</body>

</html>