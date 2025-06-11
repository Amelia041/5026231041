<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KertasController extends Controller
{
    //
    public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $kertas = DB::table('kertas')->paginate(10);

    	// mengirim data pegawai ke view index
		return view('kertas',['kertas' => $kertas]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahkertas');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('kertas')->insert([
			'ID' => $request->id,
			'merkkertas' => $request->merkkertas,
			'hargakertas' => $request->hargakertas,
			'tersedia' => $request->tersedia,
            'berat' => $request->berat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/kertas');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$kertas = DB::table('kertas')->where('ID',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editkertas',['kertas' => $kertas]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('kertas')->where('ID',$request->id)->update([
			'ID' => $request->id,
			'merkkertas' => $request->merek,
			'hargakertas' => $request->harga,
			'tersedia' => $request->tersedia,
            'berat' => $request->berat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/kertas');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('kertas')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/kertas');
	}

    public function cari(Request $request)
{
	// menangkap data pencarian
	$cari = $request->cari;

 	// mengambil data dari table pegawai sesuai pencarian data
	$kertas = DB::table('kertas')
	->where('merkkertas','like',"%".$cari."%")
	->paginate();

    	// mengirim data pegawai ke view index
	return view('kertas',['kertas' => $kertas,'cari' => $cari]);

}
}
