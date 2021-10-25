@extends('layout/mainlayout')

@section('page_title', 'Tambah Anggota')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Tambah Data Anggota</title>
</head>
<body>
    <h1>Tambah Data Anggota</h1>
      <form action="/anggota/insertDataAnggota" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        
            <div class="card-body">
                <div class="form-group">
                  <label>Nama</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="nama_anggota">
                  </div>
                </div>
                <div class="form-group">
                  <label>Tahun Masuk</label>
                  <div class="col-lg-2">
                    <input type="date" class="form-control" name="tahun_masuk">
                  </div>
                </div>
                <div class="form-group">
                  <label>kelas</label>
                  <div class="col-lg-2">
                    <input type="number" class="form-control" name="kelas">
                  </div>
                </div>
                <div class="form-group">
                  <label>Username Anggota</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="user_anggota">
                  </div>
                </div>
                <div class="form-group">
                  <label>Password Anggota</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="pass_anggota">
                  </div>
                </div>
                <div class="form-group">
                  <label>Status Anggota</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="status_anggota">
                  </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
       </form>

</body>
</html>

@endsection
