@extends('layout/mainlayout')

@section('page_title', 'Edit Data Pengembalian')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Update Data Pengembalian</title>
</head>
<body>
    <h1>Update Data Pengembalian</h1>

    <form action="/pengembalian/updatePengembalian" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

        <div class="card-body">
            
            <div class="form-group">
              <label>NO ISBN</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="Kode_buku" 
                   value ="{{ $detail_peminjaman[0]->Kode_buku }}" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>ID Peminjaman</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="ID_peminjaman" 
                  value="{{ $detail_peminjaman[0]->ID_peminjaman }}" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>Status Peminjaman</label>
              <div class="col-lg-2">
                <input type="number" class="form-control" name="Status_peminjaman" 
                value="0" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>Denda Perbuku</label>
              <div class="col-lg-2">
                <input type="number" class="form-control" name="Denda_perbuku" 
                value="{{ $detail_peminjaman[0]->Denda_perbuku }}">
              </div>
            </div>
            <div class="form-group">
              <label>Tanggal Harus Kembali</label>
              <div class="col-lg-2">
                <input type="date" class="form-control" name="Tgl_haruskembali" 
                value="{{ $detail_peminjaman[0]->Tgl_haruskembali }}">
              </div>
            </div>
            <div class="form-group">
              <label>Tanggal Kembali</label>
              <div class="col-lg-2">
                <input type="date" class="form-control" name="Tgl_kembali" 
                value="<?php echo date('Y-m-d'); ?>">
              </div>
            </div>
            <div class="form-group">
              <label>Status Verivikasi</label>
              <div class="col-lg-2">
                <input type="number" class="form-control" name="Status_verifikasi" 
                value="{{ $detail_peminjaman[0]->Status_verifikasi }}">
              </div>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Update</button>

        </div>
    </form>

</body>
</html>

@endsection
