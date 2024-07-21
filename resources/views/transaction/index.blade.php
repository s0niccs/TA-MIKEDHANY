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
		@vite(['resources/css/main.min.css', 'resources/css/animate.css', 'resources/js/mainn.js'])
	</head>

	<body>

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
								<a>Home</a>
							</li>
							<li class="breadcrumb-item breadcrumb-active" aria-current="page">
								Transaction
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
										<a href="account-settings.html" class="gradient-green"><i class="icon-edit_road"></i>Settings</a>
										<a href="login.html" class="gradient-red"><i class="icon-power_settings_new"></i>Logout</a>
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
										<div class="card-title">Transaction</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table v-middle m-0">
												<thead>
													<tr>
														<th>Jumlah</th>
														<th>Nama Produk</th>
														<th>Order By</th>
														<th>Tanggal Transaksi</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
                                                    @php $no = 1 @endphp
                                                    @foreach ($transactions as $transaction)
													<tr>
														<td>
                                                        {{ $transaction->jumlah }}
														</td>
														<td>
															<div class="media-box">
																<div class="media-box-body">
																	<div class="text-truncate">
                                                                    {{ $transaction->product->nama_barang }}
																	</div>
																	
																</div>
															</div>
														</td>
														<td>{{ $transaction->order->nama }}</td>
														<td>{{ $transaction->tanggal_transaksi }}</td>
														<td>@if($transaction->order->status == 'Paid')
																<span class="badge gradient-green min-70">Paid</span>
															@else
																<span class="badge gradient-red min-70">Unpaid</span>
															@endif
														</td>
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
													<h5>{{ $transaction->nama }}</h5>
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
													<h5>{{ $transaction->no_telepon }}</h5>
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