@extends('layout/mainlayout')

@section('page_title', 'Eksemplar')

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
    <title>Halaman Eksemplar</title>
</head>
<body>
    <h1>Data Eksemplar</h1>
    <br>
    <a href="/eksemplar/tambahEksemplar"><b>Tambah Data Eksemplar</b></a>
    <br>
    <br>
    <table id="example1" class="table table-bordered table-striped">
    <thead>

        <tr>
            <th>Kode Buku</th>
            <th>No ISBN</th>
            <th>Judul Buku</th>
            <th>Status Eksemplar</th>
            <th>Kondisi Eksemplar</th>
            <th>Action</th>
        </tr>
    </thead>
 @foreach($kode as $data)
    <tr>
        <td>{{ $data->Kode_buku }}</td>
        <td>{{ $data->No_ISBN }}</td>
        <td>{{ $data->Judul_buku }}</td>
        <td>{{ $data->Status_eksemplar }}</td>
        <td>{{ $data->Kondisi_eksemplar }}</td>
        <td><a href='/eksemplar/edit/{{ $data->Kode_buku }}'>
                <p class="mb-1">
                 Edit
                </p>
                
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
