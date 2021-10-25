@extends('layout/mainlayout')

@section('page_title', 'Tambah eksemplar')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Tambah Data Eksemplar</title>
</head>
<body>
    <h1>Tambah Data Eksemplar</h1>
      <form action="/eksemplar/insertDataEksemplar" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        
            <div class="card-body">

                <div class="form-group">
                    <label for="inputisbn">No ISBN</label>
                    <div class="col-lg-4">
                    <select name="No_ISBN" class="form-control"  required>
                    <option value="" disabled selected>Pilih ISBN</option>
                    @foreach($buku as $key)
                    <option value="{{ $key->No_ISBN }}">{{ $key->No_ISBN }} Judul Buku :{{ $key->Judul_buku }}</option>
                    @endforeach
                    </select>
                    </div>
                </div>
            </div lass="col-lg-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
                <div class="form-group">
                  <label><!--Status Eksemplar--></label>
                  <div class="col-lg-2">
                    <input type="hidden" value="1" class="form-control" name="Status_eksemplar">
                  </div>
                </div>
                <div class="form-group">
                  <label><!--Kondisi Eksemplar--></label>
                  <div class="col-lg-2">
                    <input type="hidden" value="1" class="form-control" name="Kondisi_eksemplar">
                  </div>
       </form>

</body>
</html>

@endsection
