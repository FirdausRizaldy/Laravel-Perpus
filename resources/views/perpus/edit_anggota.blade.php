@extends('layout/mainlayout')

@section('page_title', 'Edit Data Anggota')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Update Data Anggota</title>
</head>
<body>
    <h1>Update Data Anggota</h1>

    <form action="/anggota/updateAnggota" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

        <div class="card-body">
            
            <div class="form-group">
              <label>NIS</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="NIS_NIP" 
                   value ="{{ $anggota[0]->NIS_NIP }}" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>Nama</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="nama_anggota" 
                  value="{{ $anggota[0]->Nama_anggota }}">
              </div>
            </div>
            <div class="form-group">
              <label>Tahun Masuk</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="tahun_masuk" 
                  value="{{ $anggota[0]->Tahun_masuk }}">
              </div>
            </div>
            <div class="form-group">
              <label>Kelas</label>
              <div class="col-lg-2">
                <input type="number" class="form-control" name="kelas" 
                value="{{ $anggota[0]->Kelas }}">
              </div>
            </div>
            <div class="form-group">
              <label>Username Anggota</label>
              <div class="col-lg-2">
                <input type="text" class="form-control" name="user_anggota" 
                value="{{ $anggota[0]->Username_anggota }}" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>Password Anggota</label>
              <div class="col-lg-2">
                <input type="text" class="form-control" name="pass_anggota" 
                value="{{ $anggota[0]->Password_anggota }}">
              </div>
            </div>
            <div class="form-group">
              <label>Status Anggota</label>
              <div class="col-lg-2">
                <input type="number" class="form-control" name="status_anggota" 
                value="{{ $anggota[0]->Status_anggota }}">
              </div>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Update</button>

        </div>
    </form>

</body>
</html>

@endsection
