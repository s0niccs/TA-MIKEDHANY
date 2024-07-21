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

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

    <!-- Main CSS -->
    <link href="css/main.min.css" rel="stylesheet">

    <!-- Overlay Scroll CSS -->
    <link rel="stylesheet" href="vendor/overlay-scroll/OverlayScrollbars.min.css" />

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
    <!-- Main container start -->
    <div class="container-fluid">
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
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-active" aria-current="page">
                        Dashboard Kurir
                    </li>
                </ol>
                <!-- Breadcrumb end -->
            </div>
            <!-- Breadcrumb container end -->

            <!-- Header actions container start -->
            <div class="header-actions-container">
                <!-- Header actions start -->
                <ul class="header-actions">
                    <li class="dropdown">
                        <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                            <span class="user-name d-none d-md-block">{{ Auth::user()->name }}</span>
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
                                <h5>{{ Auth::user()->name }}</h5>
                                <p>Kurir</p>
                            </div>
                            <div class="header-profile-actions">
                                <a href="profile.html" class="gradient-blue"><i class="icon-person_outline"></i>Profile</a>
                                <a href="account-settings.html" class="gradient-green"><i class="icon-edit_road"></i>Settings</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();" class="gradient-red">
                                        <i class="icon-power_settings_new"></i>
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                                <!-- <a href="login.html" class="gradient-red"><i class="icon-power_settings_new"></i>Logout</a> -->
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- Header actions end -->
            </div>
            <!-- Header actions container end -->
        </div>
        <!-- Page header ends -->

        <!-- Table start -->
        <div class="row gutters">
            <div class="col-sm-12 col-12">
                <div class="card gradient-dark-grey">
                    <div class="card-header">
                        <div class="card-title">Daftar Pengiriman</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable" class="table v-middle m-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Order</th>
                                        <th>Nama</th>
                                        <th>Kota</th>
                                        <th>Detail Alamat</th>
                                        <th>Nama Produk</th>
                                        <th>Total Harga</th>
                                        <th>Tgl Order</th>
                                        <th>Tgl Update</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1 @endphp
                                    @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->nama }}</td>
                                        <td>{{ $order->kota }}</td>
                                        <td>{{ $order->alamat }}</td>
                                        <td>
                                            @foreach ($order->transactions as $transaction)
                                            <p>{{ $transaction->product->nama_barang }}</p>
                                            @endforeach
                                        </td>
                                        <td>{{ $order->total_harga }}</td>
                                        <td>{{ $order->tanggal_order }}</td>
                                        <td>{{ $order->tanggal_update }}</td>
                                        <td>
                                            <form action="/orders/updatelacak/{{ $order->id }}" method="post">
                                                @csrf
                                                @method('put')
                                                <div class="mb-3">
                                                    <select name="lacak" class="form-select">
                                                        <option value="Dibuat" {{ $order->lacak === 'Dibuat' ? 'selected' : '' }}>Dibuat</option>
                                                        <option value="Dikemas" {{ $order->lacak === 'Dikemas' ? 'selected' : '' }}>Dikemas</option>
                                                        <option value="Dikirim" {{ $order->lacak === 'Dikirim' ? 'selected' : '' }}>Dikirim</option>
                                                        <option value="Diterima" {{ $order->lacak === 'Diterima' ? 'selected' : '' }}>Diterima</option>
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
        <!-- Table end -->

        <!-- Content wrapper scroll start -->
        <div class="content-wrapper-scroll">
            <!-- Content wrapper start -->
            <div class="content-wrapper"></div>
            <!-- Content wrapper end -->

            <!-- App Footer start -->
            <div class="app-footer">
                <span>© Bootstrap Gallery 2023</span>
            </div>
            <!-- App footer end -->
        </div>
        <!-- Content wrapper scroll end -->
    </div>
    <!-- Main container end -->

    <!-- jQuery first, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

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

    <!-- Main JS -->
    <script src="js/mainn.js"></script>
</body>