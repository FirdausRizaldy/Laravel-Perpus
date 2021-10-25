<!DOCTYPE html>
<head>
    <title>Halaman Customer</title>
</head>
<body>
    <h1>Data Customer</h1>
    <br>
    <a href="/customer/tambahCustomer"><b>Tambah Data Customer</b></a>
    <br>
    <br>
    <table border="1" width="100%">
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
 </tr>
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
        <td><a href='/customer/editCustomer/{{ $data->customer_id }}'>
                <button> edit </button>
            </a>
        </td>
        <td><a href='/customer'>
                <button> delete </button>
            </a>
        </td>
    </tr>
 @endforeach
 </table>

</body>
</html>