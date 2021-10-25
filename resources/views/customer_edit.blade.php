<!DOCTYPE html>
<head>
    <title>Update Data Customer</title>
</head>
<body>
    <h1>Update Data Customer</h1>

    <form action="/customer/updateCustomer" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        id customer : <input type="text" name="customer_id"
            value ="{{ $customer[0]->customer_id }}" readonly><br>
         Nama Depan : <input type="text" name="f_name"
            value="{{ $customer[0]->first_name }}"><br>
        Nama Belakang : <input type="text" name="l_name"
            value="{{ $customer[0]->last_name }}"><br>
         Telp : <input type="text" name="phone" value="{{ $customer[0]->phone }}"><br>
        email : <input type="email" name="email" value="{{ $customer[0]->email }}"><br>
        Alamat : <input type="text" name="street" value="{{ $customer[0]->street }}"><br>
         kota : <input type="text" name="city" value="{{ $customer[0]->city }}"><br>
         provinsi : <input type="text" name="state" value="{{ $customer[0]->state }}"><br>
        code pos : <input type="text" name="zip_code"
            value="{{ $customer[0]->zip_code }}"><br>
        <input type="submit" value="Update">
    </form>

</body>
</html>