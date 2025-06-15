<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class keranjangbelanjaController2 extends Controller
{
    //
    public function index4()
    {
        //mengambil data dari tabel
        $keranjangbelanja2 = DB::table('keranjangbelanja')->paginate(10);
        ;
        // menggirim data pke view index
        return view('Keranjangbelanja2/keranjangbelanja2', ['keranjangbelanja' => $keranjangbelanja2]);



    }

    public function keranjangtambah()
    {
        // memanggil view tambah
        return view('Keranjangbelanja2/keranjang-tambah');
    }
    // method untuk insert data ke table
    public function store(Request $request)
    {
        // insert data ke tabel
        DB::table('keranjangbelanja')->insert(
            [
                'kodebarang' => $request->kodebarang,
                'jumlah' => $request->jumlah,
                'harga' => $request->harga,
            ]
        );
        return redirect('/keranjangbelanja2');
    }

    public function hapus($id) // pegawai/hapus/{pegawai_id}
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('keranjangbelanja')
            ->where('ID', $id)
            ->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/keranjangbelanja2');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table karyawan sesuai pencarian data
        $keranjangbelanja2 = DB::table('keranjangbelanja2')
            ->where('kodebarang', 'like', "%" . $cari . "%")
            ->get();

        // mengirim data karyawan ke view index
        return view('keranjang_belanja/keranjang-tambah', ['keranjangbelanja2' => $keranjangbelanja2], ['cari' => $cari]);

    }
}
