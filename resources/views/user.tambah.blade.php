<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tambah_user</title>
</head>
<body>
    <h1>Form Tambah Data User</h1>
    <form metotd="post" action="/user/tambah_simpan">
        {{@csrf_field()}}

        <label>"Username"</label>
        <input type="text" name="username" placeholder= "masukkan username">
        <br>
        <label>"Nama"</label>
        <input type="text" name="nama" placeholder= "masukkan nama">
        <br>
        <label>"Username"</label>
        <input type="password" name="pasword" placeholder= "masukkan password">
        <br>
        <label>"Username"</label>
        <input type="number" name="level_id" placeholder= "masukkan ID level">
        <br><br>
        <label>"Username"</label>
        <input type="submit" class="btn btn-success" value= "simpan">

    </form>
</body>
</html>