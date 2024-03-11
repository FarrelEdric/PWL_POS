<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>ID Level Pengguna</th> 
            <th>aksi</th>
        </tr>
            {{-- <th>jumlah pengguna</th>
      
        {{-- @foreach ($data as $d)
        <tr>
            <td>{{$data->user_id}}</td>
            <td>{{$data->username}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->level_id}}</td>
        </tr>   
        @endforeach --}}
        @foreach($data as $d)
        <tr>
            <td>{{$d->user_id}}</td>
            <td>{{$d->username}}</td>
            <td>{{$d->nama}}</td>
            <td>{{$d->level_id}}</td>
            <td><a href="/user/ubah/{{$d->user_id}}">ubah</a> | <a href="/user/hapus/{{$d->user_id}}"></a></td>
        </tr> 
        @endforeach
        {{-- <td>{{$data}}</td> --}}
    </table>
</body>
</html>