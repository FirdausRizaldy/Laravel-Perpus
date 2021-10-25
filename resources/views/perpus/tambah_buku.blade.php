@extends('layout/mainlayout')

@section('page_title', 'Tambah Buku')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Tambah Data Buku</title>


</head>
<body>
    <h1>Tambah Data Buku</h1>
      <form action="/buku/insertDataBuku" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        
            <div class="card-body">
                <div class="form-group">
                    <label for="inputisbn">Jenis Buku</label>
                    <div class="col-sm-3">
                    <select name="ID_jenis" class=" form-control"  required>
                    <option value="" disabled selected>Pilih Jenis Buku</option>
                    @foreach($jenis as $key)
                    <option value="{{ $key->ID_jenis }}">{{ $key->ID_jenis }} : {{ $key->Nama_jenisbuku }}</option>
                    @endforeach
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputisbn">Penerbit</label>
                    <div class="col-sm-3">
                    <select name="ID_penerbit" class="form-control"  required>
                    <option value="" disabled selected>Pilih Penerbit Buku</option>
                    @foreach($penerbit as $key)
                    <option value="{{ $key->ID_penerbit }}">{{ $key->ID_penerbit }} : {{ $key->Nama_penerbit }}</option>
                    @endforeach
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputisbn">Bahasa</label>
                    <div class="col-sm-3">
                    <select name="ID_bahasa" class="form-control"  required>
                    <option value="" disabled selected>Pilih Bahasa Buku</option>
                    @foreach($bahasa as $key)
                    <option value="{{ $key->ID_bahasa }}">{{ $key->ID_bahasa }} : {{ $key->Nama_bahasa }}</option>
                    @endforeach
                    </select>
                    </div>
                </div>
                <div class="form-group">
                  <label>Judul Buku</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="Judul_buku">
                  </div>
                </div>
                <div class="form-group">
                  <label>Tahun Terbit</label>
                  <div class="col-sm-3">
                    <input type="year" class="form-control" name="Tahun_terbit" id="date">
                  </div>
                </div>
                <div class="form-group">
                  <label>Penulis</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="Penulis">
                  </div>
                </div>
                <div class="form-group">
                  <label>Cetakan ke</label>
                  <div class="col-sm-3">
                    <input type="number" class="form-control" name="Cetakan_ke">
                  </div>
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <div class="col-sm-3">
                    <input type="number" class="form-control" name="Harga">
                  </div>
                </div>
                <div class="form-group">
                  <label>Jumlah Eksemplar</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="Jumlah_eksemplar">
                  </div>
                </div>
                <div class="form-group">
                  <label>Kategori Buku</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="Kategori_buku">
                  </div>
                </div>
                
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
       </form>

</body>

  
</html>



@endsection
