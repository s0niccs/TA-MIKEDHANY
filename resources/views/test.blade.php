<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Tes</h1>
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5>Tes Tes</h5>
        <form action="/checkoutt" method="POST">
          @csrf
          <div class="form-group mb-3" style="align-items: start; text-align: left; color: black !important;">
                                              <label for="nama">Nama <span class="required">*</span></label>
                                              <input class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" type="text" placeholder="Masukkan nama Anda">
                                          </div>

                                          <div class="form-group mb-3" style="align-items: start; text-align: left; color: black !important;">
                                              <label for="alamat">Detail Alamat <span class="required">*</span></label>
                                              <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat" cols="30" rows="5"></textarea>
                                          </div>

                                          <div class="form-group mb-3" style="align-items: start; text-align: left; color: black !important;">
                                              <label for="no_telepon">Nomor Telepon <span class="required">*</span></label>
                                              <input class="form-control @error('no_telepon') is-invalid @enderror"  id="no_telepon" name="no_telepon" type="text" placeholder="Masukkan nomor telepon">
                                          </div>

                                          <div class="form-group mb-3" style="align-items: start; text-align: left; color: black !important;">
                                              <label for="kota">Kota <span class="required">*</span></label>
                                              <input class="form-control @error('kota') is-invalid @enderror" " id="kota" name="kota" type="text" placeholder="Masukkan kota pengiriman">
                                          </div>
          <button class="btn btn-primary">checkout </button>
        </form>
      </div>
    </div>
  </div>
  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
