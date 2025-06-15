<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangbelanjaController3 extends Controller
{
    public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get(); //array all record
        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10); //kalau tanpa angka dalam kurung, defaultnya itu 15
    	foreach ($keranjangbelanja as $item) {
            $item->Total = number_format($item->Jumlah * $item->Harga, 0, ',', '.'); // Total = Jumlah * Harga
        }
        // mengirim data pegawai ke view index
		return view('keranjangbelanja3/keranjangbelanja3',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('keranjangbelanja3/tambah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja3');

	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja3');
	}

}
