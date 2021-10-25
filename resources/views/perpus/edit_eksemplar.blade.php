@extends('layout/mainlayout')

@section('page_title', 'Edit Data Eksemplar')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Update Data Eksemplar</title>
</head>
<body>
    <h1>Update Data Eksemplar</h1>

    <form action="/eksemplar/updateEksemplar" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

        <div class="card-body">
            
            <div class="form-group">
              <label>Kode Buku</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="Kode_buku" 
                   value ="{{ $kode[0]->Kode_buku }}" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>No ISBN</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="No_ISBN" 
                  value="{{ $kode[0]->No_ISBN }}" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>Status Eksemplar</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="Status_eksemplar" 
                  value="{{ $kode[0]->Status_eksemplar }}">
              </div>
            </div>
            <div class="form-group">
              <label>Kondisi Eksemplar</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="Kondisi_eksemplar" 
                  value="{{ $kode[0]->Kondisi_eksemplar }}">
              </div>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Update</button>

        </div>
    </form>

</body>
</html>

@endsection
