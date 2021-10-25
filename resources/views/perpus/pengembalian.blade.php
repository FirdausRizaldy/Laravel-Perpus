@extends('layout.mainlayout')
    @section ('tittle','Pengembalian')

    <!DOCTYPE html>
    <head>
     <title>Pengembalian</title>
     @section('custom_css')
     <!-- DataTables -->
     
    <link rel="stylesheet" href="{{URL::to('/')}}/asset/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/asset/datatables-responsive/css/responsive.bootstrap4.min.css">
    @endsection
    </head>
    
    
    <body>
        @section ('breadcrumb')
        <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item">Pengembalian</li>
        @endsection
       @section('content')
        <!-- route -->
        <!--<div class="row">
            <div class="col-lg-7">
              <div class="p-5">
                <div class="text-center">
                   
                </div>
            </div>
            </div>
        </div>---->
      <h1>Pengembalian</h1>
        <br>
        <div class="card-body">
        <!-- SEARCH FORM -->
        <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
        <th style="width: 10px">No</th>
        <th>NO ISBN</th>
        <th>Judul Buku</th>
        <th>id_peminjaman</th>
        <th>status peminjaman</th>
        <th>denda perbuku</th>
        <th>tanggal harus kembali</th>
        <th>tanggal kembali</th>
        <th>status verifikasi</th>
        <th>verifikasi</th>
        </tr>
        </thead>
        <tbody>
            @foreach($anggota as $ag)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$ag->No_ISBN}}</td> 
                <td>{{$ag->Judul_buku}}</td> 
                <td>{{$ag->ID_peminjaman}}</td> 
                <td>{{$ag->Status_peminjaman}}</td>
                <td>{{$ag->Denda_perbuku}}</td>
                <td>{{$ag->Tgl_haruskembali}}</td>
                <td>{{$ag->Tgl_kembali}}</td>
                <td>{{$ag->Status_verifikasi}}</td>
                <td><a href='/pengembalian/edit/{{ $ag->ID_peminjaman }}/{{ $ag->Kode_buku}}'>
                <p class="mb-1">
                 Edit
                </p>
                </a></td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
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
    </body>
    </html>