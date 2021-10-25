<!DOCTYPE html>
<head>
    <title>Belajar Laravel</title>
</head>
<body>
        <h3>Belajar Post Pada Laravel</h3>
        <form action="/formulir/proses" method="post">
        <input type="hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        nama: <input type="text" name="nama"><br>
        alamat: <input type="text" name="alamat"><br>
        <input type="submit" value="Simpan">
        </form>
</body>
</html>