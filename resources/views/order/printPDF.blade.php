<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        table {
            border-spacing: 0;
            width: 100%;
        }

        #laporan {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            border-collapse: collapse;
            width: 100%;
        }

        #laporan td,
        #laporan th {
            border: 1px solid #ddd;
            padding: 6px;
        }

        #laporan tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #laporan tr:hover {
            background-color: #ddd;
        }

        #laporan th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #04AA6D;
            color: white;
        }

        .center {
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="">
    <title>Laporan Data</title>
</head>

<body>
    <h2 class="center">LAPORAN DATA ORDER</h2>
    <table id="laporan">
        <thead>
            <tr>
                <th>Tanggal Order</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Total Harga</th>
                <th>Username</th>
                <th>Status Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->tanggal_order }}</td>
                    <td>{{ $order->nama }}</td>
                    <td>{{ $order->alamat }}</td>
                    <td>{{ $order->no_telepon }}</td>
                    <td>Rp{{ number_format($order->total_harga, 0, ',', '.') }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td> {{ $order->status_message }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
