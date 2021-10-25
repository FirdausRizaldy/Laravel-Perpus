@extends('layout/mainlayout')

@section('page_title', 'Penerimaan')

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
    <title>Halaman Penerimaan</title>
</head>
<body>
    <h1>Data Penerimaan</h1>
    <br>
    <a href="/penerimaan/tambahPenerimaan"><b>Tambah Data Penerimaan</b></a>
    <br>
    <br>
    <table id="example1" class="table table-bordered table-striped">
    <thead>

        <tr>
            <th>ID Penerimaan</th>
            <th>NIP</th>
            <th>ID Asal</th>
            <th>Tanggal Penerimaan</th>
            <th>Jumlah Buku Diterima</th>
            <th>Keterangan</th>
            <th>Opsi</th>
        </tr>
    </thead>
 @foreach($penerimaan as $data)
    <tr>
        <td>{{ $data->ID_penerimaan }}</td>
        <td>{{ $data->NIP }}</td>
        <td>{{ $data->ID_asal }}</td>
        <td>{{ $data->Tanggal_penerimaan }}</td>
        <td>{{ $data->Jumlah_buku_diterima }}</td>
        <td>{{ $data->Keterangan }}</td>
        <td><a href='/penerimaan/edit/{{ $data->ID_penerimaan }}'>
                
                 Edit &nbsp
                
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
