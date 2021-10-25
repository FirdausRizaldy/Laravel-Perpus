@extends('layout/mainlayout')

@section('page_title', 'Tambah Customer')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Tambah Data Customer</title>
</head>
<body>
    <h1>Tambah Data Customer</h1>
      <form action="/customer/insertData" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        
            <div class="card-body">
                <div class="form-group">
                  <label>Nama Depan</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="f_name">
                  </div>
                </div>
                <div class="form-group">
                  <label>Nama Belakang</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="l_name">
                  </div>
                </div>
                <div class="form-group">
                  <label>Telp</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="phone">
                  </div>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <div class="col-lg-2">
                    <input type="Email" class="form-control" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="street">
                  </div>
                </div>
                <div class="form-group">
                  <label>Kota</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="city">
                  </div>
                </div>
                <div class="form-group">
                  <label>Provinsi</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="state">
                  </div>
                </div>
                <div class="form-group">
                  <label>Kode pos</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="zip_code">
                  </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
       </form>

</body>
</html>

@endsection
