<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ubah Data</title>
</head>
<body>
    <h1>Form ubah Data User</h1>
    <a href="/user">kembali</a>
    <br><br>

    <form metotd="post" action="/user/ubah_simpan/{{$data->user_id}}">
        {{csrf_field()}}

        <label>"Username"</label>
        <input type="text" name="username" placeholder= "masukkan username">
        <br>
        <label>"Nama"</label>
        <input type="text" name="nama" placeholder= "masukkan nama">
        <br>
        <label>"password"</label>
        <input type="password" name="password" placeholder= "masukkan password">
        <br>
        <label>"Level ID"</label>
        <input type="number" name="level_id" placeholder= "masukkan ID level">
        <br><br>
        <input type="submit" class="btn btn-success" value= "simpan">

    </form>
</body>
</html>

