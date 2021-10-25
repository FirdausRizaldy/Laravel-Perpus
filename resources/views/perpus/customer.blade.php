@extends('layout/mainlayout')

@section('page_title', 'Customer')

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
    <title>Halaman Customer</title>
</head>
<body>
    <h1>Data Customer</h1>
    <br>
    <a href="/customer/tambah_cust"><b>Tambah Data Customer</b></a>
    <br>
    <br>
    <table id="example1" class="table table-bordered table-striped">
    <thead>

        <tr>
            <th>Id Customer</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Provinsi</th>
            <th>Kode Pos</th>
            <th>Opsi</th>
        </tr>
    </thead>
 @foreach($customer as $data)
    <tr>
        <td>{{ $data->customer_id }}</td>
        <td>{{ $data->first_name }}</td>
        <td>{{ $data->last_name }}</td>
        <td>{{ $data->phone }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->street }}</td>
        <td>{{ $data->city }}</td>
        <td>{{ $data->state }}</td>
        <td>{{ $data->zip_code }}</td>
        <td><a href='/{{ $data->customer_id }}'>
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
