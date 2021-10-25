@extends('layout/mainlayout')

@section('page_title', 'Edit Data Buku')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Update Data Buku</title>
</head>
<body>
    <h1>Update Data Buku</h1>

    <form action="/buku/updateBuku" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

        <div class="card-body">
            
            <div class="form-group">
              <label>ISBN</label>
              <div class="col-lg-4">
                  <input type="text" class="form-control" name="No_ISBN" 
                   value ="{{ $buku[0]->No_ISBN }}" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>ID Jenis</label>
              <div class="col-lg-4">
                <select name="ID_jenis" class="form-control" required>
                  <option value="" disabled selected>Pilih Jenis</option>
                  @foreach($jenis_buku as $key)
          <option value="{{ $key->ID_jenis }}" {{ $buku[0]->ID_jenis == $key->ID_jenis ? 'selected' : '' }}>
            {{ $key->ID_jenis }} : {{ $key->Nama_jenisbuku }}</option>
					@endforeach
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label>ID Penerbit</label>
              <div class="col-lg-4">
                <select name="ID_penerbit" class="form-control" required>
                  <option value="" disabled selected>Pilih penerbit</option>
                  @foreach($penerbit as $key)
          <option value="{{ $key->ID_penerbit }}" {{ $buku[0]->ID_penerbit == $key->ID_penerbit ? 'selected' : '' }}>
            {{ $key->ID_penerbit }} : {{ $key->Nama_penerbit }}</option>
					@endforeach
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label>ID Bahasa</label>
              <div class="col-lg-4">
                <select name="ID_bahasa" class="form-control" required>
                  <option value="" disabled selected>Pilih Bahasa</option>
                  @foreach($bahasa as $key)
          <option value="{{ $key->ID_bahasa }}" {{ $bahasa[0]->ID_bahasa == $key->ID_bahasa ? 'selected' : '' }}>
            {{ $key->ID_bahasa }} : {{ $key->Nama_bahasa }}</option>
					@endforeach
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label>Judul Buku</label>
              <div class="col-lg-4">
                <input type="text" class="form-control" name="Judul_buku" 
                value="{{ $buku[0]->Judul_buku }}">
              </div>
            </div>
            <div class="form-group">
              <label>Tahun Terbit</label>
              <div class="col-lg-4">
                <input type="year" class="form-control" name="Tahun_terbit" 
                value="{{ $buku[0]->Tahun_terbit }}">
              </div>
            </div>
            <div class="form-group">
              <label>Penulis</label>
              <div class="col-lg-4">
                <input type="year" class="form-control" name="Penulis" 
                value="{{ $buku[0]->Penulis }}">
              </div>
            </div>
            <div class="form-group">
              <label>Cetakan ke</label>
              <div class="col-lg-4">
                <input type="year" class="form-control" name="Cetakan_ke" 
                value="{{ $buku[0]->Cetakan_ke }}">
              </div>
            </div>
            <div class="form-group">
              <label>Harga</label>
              <div class="col-lg-4">
                <input type="year" class="form-control" name="Harga" 
                value="{{ $buku[0]->Harga }}">
              </div>
            </div>
            <div class="form-group">
              <label>Jumlah Eksemplar</label>
              <div class="col-lg-4">
                <input type="year" class="form-control" name="Jumlah_eksemplar" 
                value="{{ $buku[0]->Jumlah_eksemplar }}">
              </div>
            </div>
            <div class="form-group">
              <label>Kategori Buku</label>
              <div class="col-lg-4">
                <input type="year" class="form-control" name="Kategori_buku" 
                value="{{ $buku[0]->Kategori_buku }}">
              </div>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Update</button>

        </div>
    </form>

</body>
</html>

@endsection
