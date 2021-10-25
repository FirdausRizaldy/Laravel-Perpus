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
    <form action="/anggota/pinjam/insertHistory" method="post">
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
             </div>
                <div class="form-group">
                    <label>iD Peminjaman</label>
                    <div class= "col-lg-7">
                    <input type="text" class="form-control" name="ID_peminjaman" readonly 
                    value ="{{ $peminjaman[0]->ID_peminjaman }}" readonly>
                  </div>
                </div>
            
                <div class="form-group">
                    <label>Kode Buku</label>
                    <div class= "col-lg-7">
                    <input type="text" class="form-control" name="Kode_buku" readonly 
                    value ="{{ $kode[0]->Kode_buku }}" readonly>
                  </div>
                </div>

                <div class="form-group">
                    <label>Status Peminjaman</label>
                    <div class= "col-lg-7">
                    <input type="text" class="form-control" name="Status_peminjaman" value="1" readonly>
                  </div>
                </div>
                
                <div class="form-group">
                    <label>Denda Buku</label>
                    <div class= "col-lg-7">
                    <input type="number" class="form-control" name="Denda_perbuku" value="10000">
                  </div>
                </div>
                <div class="form-group">
                    <label>Tanggal Harus Kembali</label>
                    <div class= "col-lg-7">
                    <input type="date" class="form-control" name="Tgl_haruskembali" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                    <label>Tanggal Kembali</label>
                    <div class= "col-lg-7">
                    <input type="date" class="form-control" name="Tgl_kembali" placeholder="">
                  </div>
                </div>
              
                <div class="form-group">
                    <label>Perpanjang</label>
                    <div class= "col-lg-7">
                    <input type="number" class="form-control" name="Perpanjangan" value="0" readonly>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Status verifikasi</label>
                    <div class= "col-lg-7">
                    <input type="number" class="form-control" name="Status_verifikasi" value="0" readonly>
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