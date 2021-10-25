@extends('layout/mainlayout')

@section('page_title', 'Tambah Bahasa')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Tambah Data Bahasa</title>
</head>
<body>
    <h1>Tambah Data Bahasa</h1>
      <form action="/bahasa/insertDataBahasa" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        
            <div class="card-body">
                <div class="form-group">
                  <label>Bahasa</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="bahasa">
                  </div>
                </div>
                
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
       </form>

</body>
</html>

@endsection
