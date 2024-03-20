<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;


class KategoriController extends Controller
{

    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);

        return redirect('/kategori');
    }
    public function ubah($id)
    {
        $kategori = KategoriModel::find($id);
        return view('kategori.update', ['data' => $kategori]);
    }

    public function ubah_simpan(Request $request, $id)
    {
        $request->validate([
            'kategori_kode' => 'required',
            'kategori_nama' => 'required',
        ]);

        // Temukan data kategori berdasarkan ID
        $kategori = KategoriModel::findOrFail($id);

        // Update data kategori dengan data yang dikirimkan dari formulir edit
        $kategori->update($request->all());
        return redirect('/kategori');
    }
    public function hapus($id)
    {
        $kategori = KategoriModel::find($id);
        // Hapus data kategori
        $kategori->delete();
        return redirect('/kategori')->with('success', 'Data kategori berhasil dihapus.');
    }
}
