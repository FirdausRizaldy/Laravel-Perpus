@extends('layout/mainsiswa')
@section('page_title','Home')
@section('PERPUSTAKAAN', '')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/my_blank_page">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')
<!-- Default box -->
<div class="container">
<div class="card" styles="width:auto; height:auto" >
    
        <div class="card-header">
          <h3 class="card-title">PERPUSTAKAAN AKSARA</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
         Selamat datang <b>{{ Auth::user()->name }}</b>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
          
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection
