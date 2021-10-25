@extends('layout/mainlayout')

@section('page_title', 'Edit Data Penerimaan')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Update Data Peminjaman</title>
</head>
<body>
    <h1>Update Data Peminjaman</h1>

    <form action="/peminjaman/updatePeminjaman" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

        <div class="card-body">
            
            <div class="form-group">
              <label>ID Peminjaman</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="ID_peminjaman" 
                   value ="{{ $peminjaman[0]->ID_peminjaman }}" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>NIP</label>
              <div class="col-lg-2">
                <select name="NIP" class="form-control" required>
                  <option value="" disabled selected>Pilih pegawai</option>
                  @foreach ($pegawai as $a)
          <option value="{{ $a->NIP }}" {{ $peminjaman[0]->NIP == $a->NIP ? 'selected' : '' }}>
            {{ $a->NIP }} : {{ $a->Nama_pegawai }}</option>
					@endforeach
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label>NIS</label>
              <div class="col-lg-2">
                <select name="NIS_NIP" id="NIS_NIP" class="form-control">
                  <option value="" disabled selected>Pilih anggota</option>
                  @foreach ($anggota as $a)
                  <option value="{{ $a->NIS_NIP }}" {{ $peminjaman[0]->NIS_NIP == $a->NIS_NIP ? 'selected' : '' }}>
                    {{ $a->NIS_NIP }} : {{ $a->Nama_anggota }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label>Jumlah Buku</label>
              <div class="col-lg-2">
                <input type="number" class="form-control" name="Jumlah_buku" 
                value="{{ $peminjaman[0]->Jumlah_buku }}" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>Tanggal Pinjam</label>
              <div class="col-lg-2">
                <input type="date" class="form-control" name="Tgl_pinjam" 
                value="{{ $peminjaman[0]->Tgl_pinjam }}">
              </div>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Update</button>

        </div>
    </form>

</body>
</html>

@endsection
