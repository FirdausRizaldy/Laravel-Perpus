@extends('layout/mainlayout')

@section('page_title', 'Penerbit')

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
    <title>Halaman Penerbit</title>
</head>
<body>
    <h1>Data Penerbit</h1>
    <br>
    <a href="/penerbit/tambahPenerbit"><b>Tambah Data Penerbit</b></a>
    <br>
    <br>
    <table id="example1" class="table table-bordered table-striped">
    <thead>

        <tr>
            <th>ID Penerbit</th>
            <th>Nama Penerbit</th>
            <th>Alamat Penerbit</th>
            <th>No Telp</th>
            <th>Email</th>
            <th>Opsi</th>
        </tr>
    </thead>
 @foreach($penerbit as $data)
    <tr>
        <td>{{ $data->ID_penerbit }}</td>
        <td>{{ $data->Nama_penerbit }}</td>
        <td>{{ $data->Alamat_penerbit }}</td>
        <td>{{ $data->No_telp_penerbit }}</td>
        <td>{{ $data->Email_penerbit }}</td>
        <td><a href='/penerbit/edit/{{ $data->ID_penerbit }}'>
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
