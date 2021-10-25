@extends('layout.mainsiswa')
@section('page_title','Peminjaman')

@section('custom_css')
<!-- DataTables -->
<link rel="stylesheet" href="{{URL::to('/')}}/asset/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{URL::to('/')}}/asset/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Halaman Peminjaman</title>
</head>
<body>
    <h1>Data Peminjaman</h1>
    <br>
    <a href="/peminjaman/tambahPeminjaman"><b>Tambah Data Peminjaman</b></a>
    <br>
    <br>
    <table id="example1" class="table table-bordered table-striped">
    <thead>

        <tr>
            <th>ID Peminjaman</th>
            <th>NIP</th>
            <th>NIS</th>
            <th>Jumlah Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Opsi</th>
            <th>Buku</th>
        </tr>
    </thead>
 @foreach($peminjaman as $data)
    <tr>
        <td>{{ $data->ID_peminjaman }}</td>
        <td>{{ $data->NIP }}</td>
        <td>{{ $data->NIS_NIP }}</td>
        <td>{{ $data->Jumlah_buku }}</td>
        <td>{{ $data->Tgl_pinjam }}</td>
        <td><a href='/peminjaman/edit/{{ $data->ID_peminjaman }}'>
                
                 Edit &nbsp
                
                <a href='/peminjaman#'>
                  
                  Detail
                
               </a>-
             </a>
        </td>
        <td><a href="/peminjaman/{{ $data->ID_peminjaman }}">Tambah Buku</a></td>
    </tr>
 @endforeach
 </table>

</body>
</html>

@endsection

@section('custom_script')
<!-- DataTables -->
<script src="{{URL::to('/')}}/asset/datatables/jquery.dataTables.min.js"></script>
<script src="{{URL::to('/')}}/asset/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{URL::to('/')}}/asset/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{URL::to('/')}}/asset/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endsection
