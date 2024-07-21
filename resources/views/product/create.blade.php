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

		<!-- Title -->
		<title>Best Admin Dashboards</title>

		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Animated css -->
		<link rel="stylesheet" href="{{ asset('css/animate.css') }}" />

		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="{{ asset('fonts/icomoon/icomoon.css') }}" />

		<!-- Main css -->
        <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">

		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="{{ asset('vendor/overlay-scroll/OverlayScrollbars.min.css') }}" />
		<style>
			.content-wrapperr {
			height: 20%; /* Pastikan wrapper mengambil tinggi penuh layar */
			display: flex;
			justify-content: center;
			align-items: center;
			}
			.form-control:focus,
			.form-control:not(:placeholder-shown) {
				color: white;
			}

			.form-control::placeholder {
				color: #ccc; /* Optional: Change placeholder color */
			}
		</style>
</head>

	<body>
		<!-- Loading wrapper start -->
		<!-- <div id="loading-wrapper">
			<div class="spinner-border"></div>
			<div class="loading-messsage">
				<span>L</span>
				<span>o</span>
				<span>a</span>
				<span>d</span>
				<span>i</span>
				<span>n</span>
				<span>g</span>
			</div>
		</div> -->
		<!-- Loading wrapper end -->

		<!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Sidebar wrapper start -->
			<nav class="sidebar-wrapper">

				<!-- Sidebar brand starts -->
				<div class="sidebar-brand">
					<a href="index.html" class="logo">
						<img src=" /images/logo.svg" alt="Admin Dashboard Templates" />
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
								<img src=" /images/logo.svg" class="logo" alt="Bootstrap Gallery">
							</a>
						</div>
						<!-- App brand end -->

						<!-- Breadcrumb start -->
						<ol class="breadcrumb d-xl-flex d-none">
							<li class="breadcrumb-item">
								<i class="icon-house_siding"></i>
								<a href="index.html">Home</a>
							</li>
							<li class="breadcrumb-item">Product</li>
							
						</ol>
						<!-- Breadcrumb end -->

					</div>
					<!-- Breadcrumb container end -->

					<!-- Header actions ccontainer start -->
					<div class="header-actions-container">

						<!-- Search container start -->
						<div class="search-container">

							<!-- Search input group start -->
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search..." />
								<button class="btn" type="button">
									<i class="icon-search"></i>
								</button>
							</div>
							<!-- Search input group end -->

						</div>
						<!-- Search container end -->

						

					</div>
					<!-- Header actions ccontainer end -->

				</div>
				<!-- Page header ends -->

				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

					<!-- Content wrapper start -->
					<div class="content-wrapperr">
						<div class="col-md-4 col-sm-6 col-12">
							<div class="card gradient-dark-grey">
								<div class="card-header">
									<div class="card-title">Tambah Produk</div>
								</div>
								<form action="/products" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
									@csrf
									<div class="card-body">
										<div class="mb-3 control-dark">
											<label class="form-label">Nama barang<span class="required">*</span></label>
											<input type="text" name="nama_barang" id="first-name" value="{{ old('nama_barang', '') }}" class="form-control @error('nama_barang') is-invalid @enderror" placeholder="Masukkan nama barang" />
											@error('nama_barang')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror
										</div>
										<div class="mb-3 control-dark">
											<label class="form-label" for="first-name">Deskripsi Barang<span class="required">*</span></label>
											<textarea class="form-control" rows="2" type="text" id="first-name" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Masukkan deskripsi barang">{{ old('deskripsi', '') }}</textarea>
											@error('deskripsi')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror
										</div>
										<div class="mb-3 control-dark">
											<label class="form-label">Harga<span class="required">*</span></label>
											<div class="input-group mb-3 control-dark">
												<span class="input-group-text">Rp</span>
												<input type="number" class="form-control" step="any" id="first-name" name="harga" value="{{ old('harga', '') }}" placeholder="Masukkan harga barang" class="form-control @error('harga') is-invalid @enderror" />
												@error('harga')
													<div class="invalid-feedback">
														{{ $message }}
													</div>
												@enderror
											</div>
										</div>
										<div class="mb-3 control-dark">
											<label class="form-label">Stok<span class="required">*</span></label>
											<input type="number" id="first-name" name="stok" value="{{ old('stok', '') }}" placeholder="Masukkan jumlah stok" class="form-control @error('stok') is-invalid @enderror" />
											@error('stok')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror
										</div>
										<div class="mb-3 control-dark">
											<label class="form-label">Foto Produk<span class="required">*</span></label>
											<div class="input-group mb-3 control-dark">
												<input type="file" id="first-name" name="foto" class="form-control @error('foto') is-invalid @enderror" />
												@error('foto')
													<div class="invalid-feedback">
														{{ $message }}
													</div>
												@enderror
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group mt-4">
											<div class="d-flex col-md-6 col-sm-6">
												<button class="btn btn-danger border-0">
													<a href="/products"><i aria-hidden="true" style="color:white !important;"></i>Cancel</a>
												</button>
												<button type="submit" class="btn btn-primary border-0 px-2">Tambah</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

					<!-- Content wrapper end -->


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
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('js/modernizr.js') }}"></script>
		<script src="{{ asset('js/moment.js') }}"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Overlay Scroll JS -->
		<script src="{{ asset('vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
		<script src="{{ asset('vendor/overlay-scroll/custom-scrollbar.js') }}"></script>

		<!-- Apex Charts -->
		<script src="{{ asset('vendor/apex/apexcharts.min.js') }}"></script>
		<script src="{{ asset('vendor/apex/custom/home3/notificationsGraph.js') }}"></script>
		<script src="{{ asset('vendor/apex/custom/home3/signupsGraph.js') }}"></script>
		<script src="{{ asset('vendor/apex/custom/home3/qtrTargetGraph.js') }}"></script>
		<script src="{{ asset('vendor/apex/custom/home3/ordersGraph.js') }}"></script>
		<script src="{{ asset('vendor/apex/custom/home3/revenueGraph.js') }}"></script>

		<!-- Circleful Charts -->
		<script src="{{ asset('vendor/circliful/circliful.min.js') }}"></script>
		<script src="{{ asset('vendor/circliful/circliful.custom.js') }}"></script>

		<!-- Main Js Required -->
		<script src="{{ asset('js/mainn.js') }}"></script>
	</body>
</html>