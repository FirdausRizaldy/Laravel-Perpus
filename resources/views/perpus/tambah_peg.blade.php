@extends('layout/mainlayout')

@section('page_title', 'Tambah Pegawai')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Tambah Data Pegawai</title>
</head>
<body>
    <h1>Tambah Data Pegawai</h1>
      <form action="/pegawai/insertDataPeg" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        
            <div class="card-body">
                <div class="form-group">
                  <label>Nama Pegawai</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="nama">
                  </div>
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="username">
                  </div>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <label>Status Pegawai</label>
                  <div class="col-lg-2">
                    <input type="number" class="form-control" name="status">
                  </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
       </form>

</body>
</html>

@endsection
