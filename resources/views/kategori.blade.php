<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data kategori Barang</title>
</head>
<body>
    <h1>Data kategori Barang</h1>
    <table>
      
        <tr>
            <th>ID</th>
            <th>kode Level</th>
            <th>Nama level</th>
            <tr>
                @foreach ($data as $d)
            </tr>
            <td>{{$d->kategori_id}}</td>
            <td>{{$d->kategori_kode}}</td>
            <td>{{$d->kategori_nama}}</td> 
            </tr>
            @endforeach    
    </table>
</body>
</html>