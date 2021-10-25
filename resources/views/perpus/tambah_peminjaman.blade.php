@extends('layout/mainlayout')

@section('page_title', 'Tambah Peminjaman')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Tambah Data Peminjaman</title>
</head>
<body>
    <h1>Tambah Data Peminjaman</h1>
    
      <form action="/peminjaman/insertDataPeminjaman" method="post"> 
        <!--<form class="form-horizontal" role="form"  action="/peminjaman/insertDataPeminjaman">-->
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        
  

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
          
            <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Tambah Peminjaman</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-3" >No ISBN</label>
                    <div class= "col-lg-7">
                    <input type="text" class="form-control" name="No_ISBN" 
                    value ="{{ $buku[0]->No_ISBN }}" readonly>
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <label class="col-sm-3" for="inputisbn">Anggota</label>
                  <div class="col-lg-7">
                  <select name="NIS_NIP" class="form-control"  required>
                  <option value="" disabled selected>Pilih Anggota</option>
                  @foreach($anggota as $key)
                  <option value="{{ $key->NIS_NIP }}">{{ $key->NIS_NIP }} : {{ $key->Nama_anggota }}</option>
                  @endforeach
                  </select>
                  </div>
                </div>
                <br>
                <div class="form-group row">
                <label class="col-sm-3" for="inputpeg">Pegawai Perpustakaan</label>
                <div class="col-lg-7">
				        <select name="NIP" class="form-control" required>
					      <option value="" disabled selected>Pilih pegawai</option>
					      @foreach($pegawai as $key)
					      <option value="{{ $key->NIP }}">{{ $key->Nama_pegawai }}</option>
					      @endforeach
				        </select>
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <label class="col-sm-3" >Jumlah Buku</label>
                  <div class="col-lg-7">
                    <input type="number" class="form-control" name="Jumlah_buku" value="1" readonly>
                  </div>
              </div>
              <br>
              <div class="form-group row">
                <label class="col-sm-3" >Tanggal Pinjam</label>
                  <div class="col-lg-7">
                    <input type="date" class="form-control" name="Tgl_pinjam">
                  </div>
                </div>
              <button type="submit" class="btn btn-primary" href="/peminjaman/tambahdetail">next</button>

              </div>
            </div>
            <!-- /.card -->


                 
                </form>
              
              <!-- /.card-body -->
           
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
                
              </div>
       </form>

</body>
</html>

@endsection
