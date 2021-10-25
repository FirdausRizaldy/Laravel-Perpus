@extends('layout/mainlayout')

@section('page_title', 'Tambah Penerbit')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Tambah Data Penerbit</title>
</head>
<body>
    <h1>Tambah Data Penerbit</h1>
      <form action="/penerbit/insertDataPenerbit" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        
            <div class="card-body">
                <div class="form-group">
                  <label>Nama Penerbit</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="nama_penerbit">
                  </div>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="alamat_penerbit">
                  </div>
                </div>
                <div class="form-group">
                  <label>Nomor Telp</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="no_telp">
                  </div>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <div class="col-lg-2">
                    <input type="email" class="form-control" name="email">
                  </div>
                </div>
                
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
       </form>

</body>
</html>

@endsection
