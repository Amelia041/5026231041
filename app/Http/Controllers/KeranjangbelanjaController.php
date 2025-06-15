<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangbelanjaController extends Controller
{
    //
    public function index()
	{
        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);

    	// mengirim data pegawai ke view index
		return view('Keranjangbelanja/keranjangbelanja',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah
	public function beli()
	{

		// memanggil view tambah
		return view('Keranjangbelanja/beli');

	}

	// method untuk insert data
	public function store(Request $request)
	{
		// insert data
		DB::table('keranjangbelanja')->insert([
        'KodeBarang' => $request->KodeBarang,
        'Jumlah' => $request->Jumlah,
        'Harga' => $request->Harga
    ]);
		// alihkan halaman ke halaman
		return redirect('/keranjangbelanja');

	}



	// method untuk hapus data
	public function batal($id)
	{
		// menghapus data berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman
		return redirect('/keranjangbelanja');
	}


}

