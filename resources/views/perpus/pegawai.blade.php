@extends('layout/mainlayout')

@section('page_title', 'Pegawai')

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
    <title>Halaman Pegawai</title>
</head>
<body>
    <h1>Data Pegawai</h1>
    <br>
    <a href="/pegawai/tambah_peg"><b>Tambah Data Pegawai</b></a>
    <br>
    <br>
    <table id="example1" class="table table-bordered table-striped">
    <thead>

        <tr>
            <th>NIP</th>
            <th>Nama Pegawai</th>
            <th>Username</th>
            <th>Password</th>
            <th>Status Pegawai</th>
            <th>Opsi</th>
        </tr>
    </thead>
 @foreach($pegawai as $data)
    <tr>
        <td>{{ $data->NIP }}</td>
        <td>{{ $data->Nama_pegawai }}</td>
        <td>{{ $data->Username }}</td>
        <td>{{ $data->Password }}</td>
        <td>{{ $data->Status_pegawai }}</td>
        <td><a href='/pegawai/edit/{{ $data->NIP }}'>
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
