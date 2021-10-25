@extends('layout/mainsiswa')
@section('page_title', 'Pinjam Buku')
@section('PERPUSTAKAAN', 'PERPUSTAKAAN')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')


<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
    <h1></h1>
    <form action="/anggota/pinjam/insertPeminjaman" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(
) ?>">
<!-- general form elements -->
<div class="card card-primary col-lg-7">
              <div class="card-header">
                <h3 class="card-title">TAMBAH PEMINJAMAN</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                <div class="form-group">
            <label for="inputpeg">Pegawai Perpustakaan</label>
            <select name="NIP" class="form-control" required>
           <option value="" disabled selected>Pilih pegawai</option>
           @foreach($pegawai as $key)
           <option value="{{ $key->NIP }}">{{ $key->Nama_pegawai }}</option>
           @endforeach
            </select>
             </div>
                <div class="form-group">
                    <label>No ISBN</label>
                    <div class= "col-lg-7">
                    <input type="text" class="form-control" name="No_ISBN" readonly 
                    value ="{{ $buku[0]->No_ISBN }}" readonly>
                  </div>
                </div>

                <div class="form-group">
                    <label>Judul Buku</label>
                    <div class= "col-lg-7">
                    <input type="text" class="form-control" name="Judul_buku" readonly 
                    value ="{{ $buku[0]->Judul_buku }}" readonly>
                  </div>
                </div>

                <div class="form-group">
                    <label>NIS_NIP</label>
                    <div class= "col-lg-7">
                    <input type="text" class="form-control" name="NIS_NIP" placeholder=" ">
                  </div>
                </div>
                
                <div class="form-group">
                    <label>Jumlah Buku</label>
                    <div class= "col-lg-7">
                    <input type="number" class="form-control" name="Jumlah_buku" value="1">
                  </div>
                </div>
                <div class="form-group">
                    <label>Tanggal Peminjaman</label>
                    <div class= "col-lg-7">
                    <input type="date" class="form-control" name="Tgl_pinjam" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                    <label>Tanggal Kembali</label>
                    <div class= "col-lg-7">
                    <input type="date" class="form-control" name="Tgl_haruskembali" placeholder="">
                  </div>
                </div>
              
              <div class="form-group">
                  <label>Denda</label>
                  <div class= "col-lg-7">
                  <input type="number" class="form-control" name="Denda_perbuku" value="0" readonly>
                </div>
              </div>
            </div>
              
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            
        </form>

</body>
</html>
@endsection