@extends('layout/mainlayout')

@section('page_title', 'Buku')

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
    <title>Halaman Buku</title>
</head>
<body>
    <h1>Data Buku</h1>
    <br>
    <a href="/buku/tambahBuku"><b>Tambah Data Buku</b></a>
    <br>
    <br>
    <table id="example1" class="table table-bordered table-striped">
    <thead>

        <tr>
            <th>ISBN</th>
            <th>ID Jenis</th>
            <th>ID Penerbit</th>
            <th>ID Bahasa</th>
            <th>Judul Buku</th>
            <th>Tahun Terbit</th>
            <th>Penulis</th>
            <th>Cetakan ke</th>
            <th>Harga</th>
            <th>Jumlah Eksemplar</th>
            <th>Kategori Buku</th>
            <th>Opsi</th>
        </tr>
    </thead>
 @foreach($buku as $data)
    <tr>
        <td>{{ $data->No_ISBN }}</td>
        <td>{{ $data->ID_jenis }}</td>
        <td>{{ $data->ID_penerbit }}</td>
        <td>{{ $data->ID_bahasa }}</td>
        <td>{{ $data->Judul_buku }}</td>
        <td>{{ $data->Tahun_terbit }}</td>
        <td>{{ $data->Penulis }}</td>
        <td>{{ $data->Cetakan_ke }}</td>
        <td>{{ $data->Harga }}</td>
        <td>{{ $data->Jumlah_eksemplar }}</td>
        <td>{{ $data->Kategori_buku }}</td>
        <td><a href='/buku/edit/{{ $data->No_ISBN }}'>
          <button type="button" class="btn btn-block btn-warning btn-xs-2">Edit</button>
            </a>
             
            <a href='/peminjaman/tambahPeminjaman/{{$data->No_ISBN}}'>
                             
            <button type="button" class="btn btn-block btn-info btn-xs-2"> Pinjam </button>
            </a>
        </td>
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
