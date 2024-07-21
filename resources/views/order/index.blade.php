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

		@vite(['resources/css/main.min.css', 'resources/css/animate.css', 'resources/js/mainn.js'])
		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="vendor/overlay-scroll/OverlayScrollbars.min.css" />

		<!-- Data Tables -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
		<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

		<style>
			/* CSS untuk teks pada elemen show, entries, previous, next, dan pagination */
		.dataTables_wrapper .dataTables_info,
		.dataTables_wrapper .dataTables_paginate .paginate_button,
		.dataTables_wrapper .dataTables_length label,
		.dataTables_wrapper .dataTables_filter label,
		.dataTables_wrapper .dataTables_length select,
		.dataTables_wrapper .dataTables_filter input {
			color: white;
		}

		/* Jika Anda ingin memastikan input dan select juga memiliki latar belakang gelap */
		.dataTables_wrapper .dataTables_length select,
		.dataTables_wrapper .dataTables_filter input {
			background-color: #333;
			border: 1px solid #555;
		}

		/* CSS untuk latar belakang tombol pagination */
		.dataTables_wrapper .dataTables_paginate .paginate_button {
			background-color: #333;
			border: 1px solid #555;
		}

		/* CSS untuk tombol pagination aktif */
		.dataTables_wrapper .dataTables_paginate .paginate_button.current {
			background-color: #555;
			color: white;
			border: 1px solid #777;
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
								Orders
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
									<span class="user-name d-none d-md-block">Admin</span>
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
										<h5>Admin</h5>
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
										<div class="card-title text-white">Orders</div>
									</div>
									<div class="item form-group mt-4 px-4 d-flex justify-content-between align-items-center">
										<form action="{{ route('orders.print') }}" method="get" class="text-white d-flex flex-column align-items-end">
											<div class="form-group">
												<label for="start_date" class="text-white">Tanggal Mulai:</label>
												<input type="date" id="start_date" name="start_date" class="form-control">
											</div>
											<div class="form-group">
												<label for="end_date" class="text-white">Tanggal Selesai:</label>
												<input type="date" id="end_date" name="end_date" class="form-control">
											</div>
											<button class="btn btn-success mt-2">Cetak</button>
										</form>
									</div>
									<div>
										<div style="overflow-x:auto;">
											<table id="myTable" class="table">
												<thead>
													<tr>
														<th>No</th>
														<th>Tanggal</th>
														<th>Customer</th>
														<th>Detail Alamat</th>
														<th>No Telp</th>
														<th>Amount</th>
														<th>Status 
															Pembayaran</th>
														<th>Status
															Pesanan
														</th>
														<th>Kurir</th>
													</tr>
												</thead>
												<tbody>
													@php $no = 1 @endphp
													@foreach ($orders as $order)
													<tr>
														<td>{{ $no++ }}</td>
														<td>{{ $order->tanggal_order }}</td>
														<td>
															<div class="media-box">
																<div class="media-box-body">
																	<div class="text-truncate">{{ $order->nama }}</div>
																	<p>{{ $order->kota }}</p>
																</div>
															</div>
														</td>
														<td>{{ $order->alamat }}</td>
														<td>{{ $order->no_telepon }}</td>
														<td>{{ number_format($order->total_harga, 0, ',', '.') }}</td>
														<td>
															@if($order->status == 'Paid')
																<span class="badge gradient-green min-70">Paid</span>
															@else
																<span class="badge gradient-red min-70">Unpaid</span>
															@endif
														</td>
														<td>
															@if($order->lacak == 'Dibuat')
																Pesanan dibuat
															@elseif($order->lacak == 'Dikemas')
																Pesanan dikemas
															@elseif($order->lacak == 'Dikirim')
																Pesanan dikirim
															@elseif($order->lacak == 'Diterima')
																Pesanan diterima
															@endif
														</td>
														<td>
														<form action="/orders/updatekurir/{{ $order->id }}" method="post">
															@csrf
															@method('put')
															<div class="mb-3">
																<select name="kurir" class="form-select">
																	<option value=" ">Pilih Kurir</option>
																	<option value="kurir1" {{ $order->kurir === 'kurir1' ? 'selected' : '' }}>Kurir 1</option>
																	<option value="kurir2" {{ $order->kurir === 'kurir2' ? 'selected' : '' }}>Kurir 2</option>
																	<option value="kurir3" {{ $order->kurir === 'kurir3' ? 'selected' : '' }}>Kurir 3</option>
																</select>
															</div>
															<button type="submit" class="btn btn-primary">Simpan</button>
														</form>
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
		<script>
		$(document).ready( function () {
			$('#myTable').DataTable({
				"order": [[0, "desc"]] // Mengurutkan kolom pertama (indeks 0) secara descending
			});
		});
		</script>
		<!-- Page wrapper end -->

		<!-- *************
			************ Required JavaScript Files *************
		************* -->
		 <!-- Vendor Js Files -->
		 <script src="vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
		<script src="vendor/overlay-scroll/custom-scrollbar.js"></script>

		<!-- Apex Charts -->
		<script src="vendor/apex/apexcharts.min.js"></script>
		<script src="vendor/apex/custom/home3/notificationsGraph.js"></script>
		<script src="vendor/apex/custom/home3/signupsGraph.js"></script>
		<script src="vendor/apex/custom/home3/qtrTargetGraph.js"></script>
		<script src="vendor/apex/custom/home3/ordersGraph.js"></script>
		<script src="vendor/apex/custom/home3/revenueGraph.js"></script>

    
	
		<!-- Main Js Required -->
		<script src="js/mainn.js"></script>
		
		
	</body>

</html>