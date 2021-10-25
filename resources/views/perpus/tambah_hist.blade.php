@extends('layout.mainlayout')
@section('page_title','Tambah detail peminjaman ')
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
    <form  action="/peminjaman/insertdetail" method="post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(
) ?>">
  {{ csrf_field() }}
<!-- general form elements -->
<div class="card card-primary col-lg-7">
             
              <!-- /.card-header -->
              <!-- form start -->
              
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Detail Peminjaman</h3>
              </div>
              <!-- /.card-header -->
              <form class="form-horizontal">
              <div class="card-body">
                
                  <div class="row">
                    <div class="col-sm-8">
                      <!-- text input -->
                      <div class="form-group">
                        <label>ID Peminjaman</label>
                    <input type="text" class="form-control" name="ID_peminjaman" value="{{ $users[0]->ID_peminjaman }}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Status Peminjaman</label>
                      <div class= "col-sm-4">
                      <input type="number" class="form-control" name="Status_peminjaman" value="1" readonly>
                    </div>
                    </div>
                  
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="inputpeg">Kode Buku</label>
                        <select name="Kode_buku" class="form-control" required>
                        <option value="" disabled selected>Kode Buku</option>
                        @foreach($eksemplar_buku as $key)
                        <option value="{{ $key->Kode_buku }}">{{ $key->Kode_buku }} - {{ $key->No_ISBN }}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  
    
                  <div class="row">
                    <div class="col-sm-7">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Tanggal Harus kembali</label>
                        <option  value="" disabled selected>Buku harus kembali <br> 3 hari dari tanggal pinjam</option>
                        <input type="date" class="form-control" name="Tgl_haruskembali" value="{{ date('Y-m-d', strtotime("+3 days")) }}" readonly>
                      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="form-group">
                        <label>Perpanjangan</label>
                        <div class="col-sm-2">
                        <option value="" disabled selected>isi 0 jika tidak melakukan perpanjangan,<br/> isi 1 jika melakukan perpanjangan</option>
                        <input type="number" class="form-control" name="Perpanjangan" placeholder=" ">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <div class="col-sm-4">
                        <label>Status verifikasi</label>
                        <input type="number" class="form-control" name="Status_verifikasi" readonly value="0" >
                      </div>
                    </div>
                
                    </div>
                  </div>
                </div>
              </div>
            </div>
                  <button type="submit" class="btn btn-primary" href="/peminjaman/tambahdetail">Submit</button>
            
        </form>

</body>
</html>
@endsection