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
		<link rel="stylesheet" href="css/animate.css" />

		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="fonts/icomoon/icomoon.css" />

		<!-- Main css -->
        <link href="css/main.min.css" rel="stylesheet">

		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="vendor/overlay-scroll/OverlayScrollbars.min.css" />
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
							
							<li class="breadcrumb-item breadcrumb-active" aria-current="page">
								Testimoni
							</li>
						</ol>
						<!-- Breadcrumb end -->

					</div>
					<!-- Breadcrumb container end -->

					<!-- Header actions ccontainer start -->
					<div class="header-actions-container">

						<!-- Search container start -->
						<div class="search-container">
						</div>
						<!-- Search container end -->

						<!-- Header actions start -->
						<ul class="header-actions">
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name d-none d-md-block">Ella Lindsey</span>
									<span class="avatar">
										<img src=" /images/user.png" alt="Admin Themes" />
										<span class="status online"></span>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
									<div class="header-profile-avatar">
										<img src=" /images/user.png" alt="Admin Themes" />
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

						<!-- Row start -->
						<div class="row gutters">
							<div class="col-sm-12 col-12">
								<div class="card gradient-dark-grey">
									<div class="card-header">
										<div class="card-title">Customers</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table v-middle m-0">
												<thead>
													<tr>
													<th>No</th>
													<th>Tanggal</th>
													<th>Nama Produk</th>
													<th>Rating</th>
													<th>Komentar</th>
													</tr>
												</thead>
												<tbody>
                                                    @php $no = 1 @endphp
                                                    @foreach ($testimonis as $testimoni)
													<tr>
													<td>{{ $no++ }}</td>
														<td>{{ $testimoni->created_at }}</td>
														<td>{{ $testimoni->product->nama_barang }}</td>
														<td>{{ $testimoni->rating }}</td>
														<td>{{ $testimoni->komentar }}</td>
													</tr>
                                                    @endforeach
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Modal View Row -->
						<div class="modal modal-dark fade" id="viewRow" tabindex="-1" aria-labelledby="viewRowLabel"
							aria-hidden="true">
							<div class="modal-dialog modal-lg modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="viewRowLabel">View Details</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<!-- Row start -->
										<div class="row gutters">
											<div class="col-xxl-4">
												<div class="customer-card">
													<h6>Customer Name</h6>
													<h5>Garrett Winters</h5>
												</div>
											</div>
											<div class="col-xxl-4">
												<div class="customer-card">
													<h6>Customer ID</h6>
													<h5>#FLM00763</h5>
												</div>
											</div>
											<div class="col-xxl-4">
												<div class="customer-card">
													<h6>Contact</h6>
													<h5>067-676-98320</h5>
												</div>
											</div>
											<div class="col-xxl-4">
												<div class="customer-card">
													<h6>Amount Spent</h6>
													<h5>$2570.00</h5>
												</div>
											</div>
											<div class="col-xxl-4">
												<div class="customer-card">
													<h6>Last Login</h6>
													<h5>21/11/2022</h5>
												</div>
											</div>
											<div class="col-xxl-4">
												<div class="customer-card">
													<h6>Coupons Used</h6>
													<h5>7</h5>
												</div>
											</div>
											<div class="col-xxl-4">
												<div class="customer-card">
													<h6>Total Orders</h6>
													<h5>95</h5>
												</div>
											</div>
											<div class="col-xxl-4">
												<div class="customer-card">
													<h6>Cancelled Orders</h6>
													<h5>2</h5>
												</div>
											</div>
											<div class="col-xxl-4">
												<div class="customer-card">
													<h6>Reviews</h6>
													<h5>21</h5>
												</div>
											</div>
										</div>
										<!-- Row end -->
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-success" data-bs-dismiss="modal">
											Close
										</button>
									</div>
								</div>
							</div>
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
	</body>

</html>