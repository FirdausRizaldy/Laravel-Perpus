@extends('layout/mainlayout')

@section('page_title', 'Tambah Jenis Buku')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Tambah Data Jenis Buku</title>
</head>
<body>
    <h1>Tambah Data Jenis Buku</h1>
      <form action="/jenisBuku/insertDataJenisBuku" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        
            <div class="card-body">
                <div class="form-group">
                  <label>Jenis Buku</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="nama_jenis">
                  </div>
                </div>
                <div class="form-group">
                  <label>Kode</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="kode_jenis">
                  </div>
                </div>
                
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
       </form>

</body>
</html>

@endsection
