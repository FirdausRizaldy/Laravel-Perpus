@extends('layout/mainlayout')

@section('page_title', 'Jenis Buku')

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
    <title>Halaman jenis Buku</title>
</head>
<body>
    <h1>Data Jenis BUku</h1>
    <br>
    <a href="/jenisBuku/tambahJenisBuku"><b>Tambah Data Jenis Buku</b></a>
    <br>
    <br>
    <table id="example1" class="table table-bordered table-striped">
    <thead>

        <tr>
            <th>ID Jenis</th>
            <th>Jenis Buku</th>
            <th>Kode Jenis Buku</th>
            <th>Opsi</th>
        </tr>
    </thead>
 @foreach($jenis_buku as $data)
    <tr>
        <td>{{ $data->ID_jenis }}</td>
        <td>{{ $data->Nama_jenisbuku }}</td>
        <td>{{ $data->Kode_jenisbuku }}</td>
        <td><a href='/jenisBuku/edit/{{ $data->ID_jenis }}'>
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
