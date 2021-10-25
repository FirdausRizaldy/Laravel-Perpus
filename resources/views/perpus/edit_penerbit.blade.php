@extends('layout/mainlayout')

@section('page_title', 'Edit Data Penerbit')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Update Data Penerbit</title>
</head>
<body>
    <h1>Update Data Penerbit</h1>

    <form action="/penerbit/updatePenerbit" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

        <div class="card-body">
            
            <div class="form-group">
              <label>ID Penerbit</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="ID_penerbit" 
                   value ="{{ $penerbit[0]->ID_penerbit }}" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>Nama</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="nama_penerbit" 
                  value="{{ $penerbit[0]->Nama_penerbit }}">
              </div>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="alamat_penerbit" 
                  value="{{ $penerbit[0]->Alamat_penerbit }}">
              </div>
            </div>
            <div class="form-group">
              <label>Nomor Telp</label>
              <div class="col-lg-2">
                <input type="text" class="form-control" name="no_telp" 
                value="{{ $penerbit[0]->No_telp_penerbit }}">
              </div>
            </div>
            <div class="form-group">
              <label>Email</label>
              <div class="col-lg-2">
                <input type="email" class="form-control" name="email" 
                value="{{ $penerbit[0]->Email_penerbit }}">
              </div>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Update</button>

        </div>
    </form>

</body>
</html>

@endsection
