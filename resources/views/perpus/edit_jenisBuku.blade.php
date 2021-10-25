@extends('layout/mainlayout')

@section('page_title', 'Edit Data Jenis Buku')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Update Data Jenis Buku</title>
</head>
<body>
    <h1>Update Data Jenis Buku</h1>

    <form action="/jenisBuku/updateJenisBuku" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

        <div class="card-body">
            
            <div class="form-group">
              <label>ID Jenis</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="ID_jenis" 
                   value ="{{ $jenis_buku[0]->ID_jenis }}" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>Jenis Buku</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="nama_jenis" 
                  value="{{ $jenis_buku[0]->Nama_jenisbuku }}">
              </div>
            </div>
            <div class="form-group">
              <label>Kode</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="kode_jenis" 
                  value="{{ $jenis_buku[0]->Kode_jenisbuku }}">
              </div>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Update</button>

        </div>
    </form>

</body>
</html>

@endsection
