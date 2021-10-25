@extends('layout/mainlayout')

@section('page_title', 'Edit Data Penerimaan')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Update Data Penerimaan</title>
</head>
<body>
    <h1>Update Data Penerimaan</h1>

    <form action="/penerimaan/updatePenerimaan" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

        <div class="card-body">
            
            <div class="form-group">
              <label>ID Penerimaan</label>
              <div class="col-lg-6">
                  <input type="text" class="form-control" name="ID_penerimaan" 
                   value ="{{ $penerimaan[0]->ID_penerimaan }}" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>NIP</label>
              <div class="col-lg-6">
                <select name="NIP" class="form-control" required>
                  <option value="" disabled selected>Pilih pegawai</option>
                  @foreach ($pegawai as $a)
          <option value="{{ $a->NIP }}" {{ $penerimaan[0]->NIP == $a->NIP ? 'selected' : '' }}>
            {{ $a->NIP }} : {{ $a->Nama_pegawai }}</option>
					@endforeach
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label>ID Asal</label>
              <div class="col-lg-6">
                <select name="ID_asal" class="form-control" required>
                  <option value="" disabled selected>Pilih Asal</option>
                  @foreach ($asal as $a)
          <option value="{{ $a->ID_asal }}" {{ $penerimaan[0]->ID_asal == $a->ID_asal ? 'selected' : '' }}>
            {{ $a->ID_asal }} : {{ $a->Asal }}</option>
					@endforeach
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label>Tanggal Penerimaan</label>
              <div class="col-lg-6">
                <input type="text" class="form-control" name="Tanggal_penerimaan" 
                value="{{ $penerimaan[0]->Tanggal_penerimaan }}">
              </div>
            </div>
            <div class="form-group">
              <label>Jumlah Buku Diterima</label>
              <div class="col-lg-6">
                <input type="number" class="form-control" name="Jumlah_buku_diterima" 
                value="{{ $penerimaan[0]->Jumlah_buku_diterima }}">
              </div>
            </div>
            <div class="form-group">
              <label>Keterangan</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="Keterangan" 
                value="{{ $penerimaan[0]->Keterangan }}">
              </div>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Update</button>

        </div>
    </form>

</body>
</html>

@endsection
