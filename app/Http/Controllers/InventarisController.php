<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventaris;

class InventarisController extends Controller
{
    public function index()
    {
        $inventaris = Inventaris::all();
        return view('inventaris.index', compact('inventaris'));
    }

    public function add()
    {
        return view('inventaris.add');
    }

    public function barang(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'tahun' => 'required|date',
            'kode' => 'required',
            'nama' => 'required',
            'jumlah' => 'required|numeric',
            'harga' => 'required|numeric',
            'sumberDana' => 'required',
        ]);

        // Simpan data ke dalam database menggunakan model Inventaris
        Inventaris::create([
            'tahun_pengadaan' => $request->tahun,
            'kode_barang' => $request->kode,
            'nama_barang' => $request->nama,
            'jumlah_barang' => $request->jumlah,
            'harga_beli' => $request->harga,
            'sumber_dana' => $request->sumberDana,
        ]);

        // Redirect ke halaman yang tepat setelah penyimpanan berhasil
        return redirect()->route('inventaris.index')->with('success', 'Data inventaris berhasil disimpan.');
    }

    public function edit($id)
    {
        $inventaris = Inventaris::findOrFail($id);
        return view('inventaris.edit', compact('inventaris'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'tahun' => 'required|date',
            'kode' => 'required',
            'nama' => 'required',
            'jumlah' => 'required|numeric',
            'harga' => 'required|numeric',
            'sumberDana' => 'required',
        ]);
    
        // Temukan data inventaris yang akan diperbarui
        $inventaris = Inventaris::findOrFail($id);
    
        // Perbarui data inventaris dengan data baru dari formulir
        $inventaris->tahun_pengadaan = $request->tahun;
        $inventaris->kode_barang = $request->kode;
        $inventaris->nama_barang = $request->nama;
        $inventaris->jumlah_barang = $request->jumlah;
        $inventaris->harga_beli = $request->harga;
        $inventaris->sumber_dana = $request->sumberDana;
    
        // Simpan perubahan ke dalam database
        $inventaris->save();
    
        // Redirect ke halaman yang tepat setelah pembaruan berhasil
        return redirect()->route('inventaris.index')->with('success', 'Data inventaris berhasil diperbarui.');
    }
        
    public function delete($id)
    {
        // Temukan data inventaris yang akan dihapus
        $inventaris = Inventaris::findOrFail($id);

        // Hapus data inventaris
        $inventaris->delete();

        // Redirect kembali ke halaman inventaris setelah penghapusan berhasil
        return redirect()->route('inventaris.index')->with('success', 'Data inventaris berhasil dihapus.');
    }
}
