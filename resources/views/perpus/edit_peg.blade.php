@extends('layout/mainlayout')

@section('page_title', 'Edit Data')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Update Data Pegawai</title>
</head>
<body>
    <h1>Update Data Pegawai</h1>

    <form action="/pegawai/updatePegawai" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

        <div class="card-body">
            
        <div class="form-group">
              <label>NIP</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="NIP" 
                   value ="{{ $pegawai[0]->NIP }}" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>Nama Pegawai</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="Nama_pegawai" value="{{ $pegawai[0]->Nama_pegawai }}">
              </div>
            </div>
            <div class="form-group">
              <label>Username</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="Username" value="{{ $pegawai[0]->Username }}" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>Password</label>
              <div class="col-lg-2">
                <input type="text" class="form-control" name="Password" value="{{ $pegawai[0]->Password }}">
              </div>
            </div>
            <div class="form-group">
              <label>Status Pegawai</label>
              <div class="col-lg-2">
                <input type="number" class="form-control" name="Status_pegawai" value="{{ $pegawai[0]->Status_pegawai }}">
              </div>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Update</button>

        </div>
    </form>

</body>
</html>

@endsection
