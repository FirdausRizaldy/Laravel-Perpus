@extends('layout/mainlayout')

@section('page_title', 'Tambah Penerimaan')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Tambah Data Penerimaan</title>
</head>
<body>
    <h1>Tambah Data Penerimaan</h1>
      <form action="/penerimaan/insertDataPenerimaan" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        
        <div class="form-group">
                    <label for="inputisbn">Pegawai</label>
                    <div class="col-lg-2">
                    <select name="NIP" class="form-control"  required>
                    <option value="" disabled selected>Pilih Pegawai</option>
                    @foreach($pegawai as $key)
                    <option value="{{ $key->NIP }}">{{ $key->NIP }} : {{ $key->Nama_pegawai }}</option>
                    @endforeach
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputisbn">ID Asal</label>
                    <div class="col-lg-2">
                    <select name="ID_asal" class="form-control"  required>
                    <option value="" disabled selected>Pilih Asal</option>
                    @foreach($asal as $key)
                    <option value="{{ $key->ID_asal }}">{{ $key->ID_asal }} : {{ $key->Asal }}</option>
                    @endforeach
                    </select>
                    </div>
                </div>
                <div class="form-group">
                  <label>Tanggal Penerimaan</label>
                  <div class="col-lg-2">
                    <input type="date" class="form-control" name="Tanggal_penerimaan">
                  </div>
                </div>
                <div class="form-group">
                  <label>Jumlah Buku Diterima</label>
                  <div class="col-lg-2">
                    <input type="number" class="form-control" name="Jumlah_buku_diterima">
                  </div>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <div class="col-lg-2">
                    <input type="text" class="form-control" name="Keterangan">
                  </div>
                </div>
                
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
       </form>

</body>
</html>

@endsection
