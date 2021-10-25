@extends('layout/mainlayout')

@section('page_title', 'Edit Data Bahasa')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Update Data Bahasa</title>
</head>
<body>
    <h1>Update Data Bahasa</h1>

    <form action="/bahasa/updateBahasa" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

        <div class="card-body">
            
            <div class="form-group">
              <label>ID Bahasa</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="ID_bahasa" 
                   value ="{{ $bahasa[0]->ID_bahasa }}" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>Bahasa</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="bahasa" 
                  value="{{ $bahasa[0]->Nama_bahasa }}">
              </div>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Update</button>

        </div>
    </form>

</body>
</html>

@endsection
