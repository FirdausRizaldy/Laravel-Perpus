@extends('layout/mainlayout')

@section('page_title', 'Edit Data')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Update Data Customer</title>
</head>
<body>
    <h1>Update Data Customer</h1>

    <form action="/customer/updateCustomer" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

        <div class="card-body">
            
            <div class="form-group">
              <label>Id Customer</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="customer_id" 
                   value ="{{ $customer[0]->customer_id }}" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>Nama Depan</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="f_name" value="{{ $customer[0]->first_name }}">
              </div>
            </div>
            <div class="form-group">
              <label>Nama Belakang</label>
              <div class="col-lg-2">
                  <input type="text" class="form-control" name="l_name" value="{{ $customer[0]->last_name }}">
              </div>
            </div>
            <div class="form-group">
              <label>Telp</label>
              <div class="col-lg-2">
                <input type="text" class="form-control" name="phone" value="{{ $customer[0]->phone }}">
              </div>
            </div>
            <div class="form-group">
              <label>Email</label>
              <div class="col-lg-2">
                <input type="Email" class="form-control" name="email" value="{{ $customer[0]->email }}">
              </div>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <div class="col-lg-2">
                <input type="text" class="form-control" name="street" value="{{ $customer[0]->street }}">
              </div>
            </div>
            <div class="form-group">
              <label>Kota</label>
              <div class="col-lg-2">
                <input type="text" class="form-control" name="city" value="{{ $customer[0]->city }}">
              </div>
            </div>
            <div class="form-group">
              <label>Provinsi</label>
              <div class="col-lg-2">
                <input type="text" class="form-control" name="state" value="{{ $customer[0]->state }}">
              </div>
            </div>
            <div class="form-group">
              <label>Kode pos</label>
              <div class="col-lg-2">
                <input type="text" class="form-control" name="zip_code" value="{{ $customer[0]->zip_code }}">
              </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>

        </div>
    </form>

</body>
</html>

@endsection
