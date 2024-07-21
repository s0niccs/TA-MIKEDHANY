<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <x-app-layout>
        
        <div class="container body mx-auto">
        <div class="main_container">
            <div class="right_col" role="main">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('status') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="page-title mt-4">
                    <div class="title_left">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Products') }}
            </h2>
                    </div>
                </div>
                <div class="container body mx-auto">
        <div class="main_container">
            <div class="right_col" role="main">
                <div class="page-title mt-3">
                    <div class="title_left">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_content">
                                <br />
                                <form action="/products/{{ $product->id }}" method="POST" id="demo-form2"
                                    data-parsley-validate class="form-horizontal form-label-left"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Nama Barang
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name"
                                                value="{{ old('nama_barang', $product['nama_barang']) }}"
                                                placeholder="Enter name product"
                                                class="form-control @error('nama_barang') is-invalid @enderror"
                                                name="nama_barang">
                                            @error('nama_barang')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Deskripsi Barang
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name"
                                                value="{{ old('deskripsi', $product['deskripsi']) }}"
                                                placeholder="Enter product desc"
                                                class="form-control @error('deskripsi') is-invalid @enderror"
                                                name="deskripsi">
                                            @error('deskripsi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Stok
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="number" id="first-name"
                                                value="{{ old('stok', $product['stok']) }}"
                                                placeholder="Enter product stock"
                                                class="form-control @error('stok') is-invalid @enderror" name="stok">
                                            @error('stok')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Harga
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="number" id="first-name" step="any"
                                                value="{{ old('harga', $product['harga']) }}"
                                                placeholder="Enter product price"
                                                class="form-control @error('harga') is-invalid @enderror"
                                                name="harga">
                                            @error('harga')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Foto Produk
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="file" id="first-name" value="{{ old('foto', '') }}"
                                                class="form-control @error('foto') is-invalid @enderror"
                                                name="foto">
                                            <div class="mt-2 mb-4">
                                                <img src="{{ asset('uploads/products/' . $product->foto) }}"
                                                    height="80px" width="80px" alt="">
                                            </div>
                                            @error('foto')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="item form-group mt-2">
                                        <div class="col-md-6 col-sm-6 d-flex">
                                            <<button class="btn btn-danger border-0">
                                            <a href="/products"><i aria-hidden="true" style="color:white !important;"></i></a>Cancel</button>
                    
                                            
                                            <button class="btn btn-primary border-0 px-2">
                                            <a href=""><i aria-hidden="true" style="color:white !important;"></i></a>Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
                </div>
            </div>
        </div>
    </div>
    
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    

    @vite('resources/js/app.js')
</body>

</html>
