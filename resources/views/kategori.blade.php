<!-- resources/views/kategori.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kategori</title>
</head>
<body>
    <h1>Halaman Kategori</h1>

    <h2>Daftar Kategori:</h2>
    <ul>
        @foreach ($kategoris as $kategori)
            <li>{{ $kategori->kategori_nama }}</li>
        @endforeach
    </ul>

    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf
        <div>
            <label for="kategori_kode">Kode Kategori:</label>
            <input type="text" id="kategori_kode" name="kategori_kode" required>
        </div>
        <div>
            <label for="kategori_nama">Nama Kategori:</label>
            <input type="text" id="kategori_nama" name="kategori_nama" required>
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
