@extends('layout/mainlayout')

@section('page_title', 'Home')



@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('content')

<!DOCTYPE html>
<head>
    <title>Tambah Data Customer</title>
</head>
<body>
    <h1>Tambah Data Customer</h1>
    <form action="/customer/insertData" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(
) ?>">
        Nama Depan : <input type="text" name="f_name"><br>
        Nama Belakang : <input type="text" name="l_name"><br>
        Telp : <input type="text" name="phone"><br>
        email : <input type="email" name="email"><br>
        Alamat : <input type="text" name="street"><br>
        kota : <input type="text" name="city"><br>
        provinsi : <input type="text" name="state"><br>
        kode pos : <input type="text" name="zip_code"><br>
        <input type="submit" value="Simpan">
    </form>

</body>
</html>

@endsection