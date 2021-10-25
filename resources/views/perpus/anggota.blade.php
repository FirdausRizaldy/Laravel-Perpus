@extends('layout/mainlayout')

@section('page_title', 'Anggota')

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
    <title>Halaman Anggota</title>
</head>
<body>
    <h1>Data Anggota</h1>
    <br>
    <a href="/anggota/tambahAnggota"><b>Tambah Data Anggota</b></a>
    <br>
    <br>
    <table id="example1" class="table table-bordered table-striped">
    <thead>

        <tr>
            <th>NIS</th>
            <th>Nama Anggota</th>
            <th>Tahun Masuk</th>
            <th>Kelas</th>
            <th>username Anggota</th>
            <th>Password Anggota</th>
            <th>Status Anggota</th>
            <th>Opsi</th>
        </tr>
    </thead>
 @foreach($anggota as $data)
    <tr>
        <td>{{ $data->NIS_NIP }}</td>
        <td>{{ $data->Nama_anggota }}</td>
        <td>{{ $data->Tahun_masuk }}</td>
        <td>{{ $data->Kelas }}</td>
        <td>{{ $data->Password_anggota }}</td>
        <td>{{ $data->Username_anggota }}</td>
        <td>{{ $data->Status_anggota }}</td>
        
        <td><a href='/anggota/edit/{{ $data->NIS_NIP }}'>
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
