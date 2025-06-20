<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MykaryawanController extends Controller
{
    //
    public function index6()
	{
    	// mengambil data dari table
        $mykaryawan = DB::table('mykaryawan')->paginate();

    	// mengirim data ke view index
		return view('Mykaryawan/mykaryawan', ['mykaryawan' => $mykaryawan]);

	}



	// method untuk edit data
	public function editkaryawan($kodepegawai)
	{
		// mengambil data berdasarkan id yang dipilih
		$mykaryawan = DB::table('mykaryawan')->where('kodepegawai',$kodepegawai)->get();
		// passing data  yang didapat ke view edit.blade.php
		return view('Mykaryawan/editkaryawan',['mykaryawan' => $mykaryawan]);

	}

	// update data
	public function update(Request $request)
	{
		// update data
		DB::table('mykaryawan')->where('kodepegawai',$request->kodepegawai)->update([
			'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman
		return redirect('/mykaryawan');
	}

    //view
    // method untuk menampilkan view form
	public function view($kodepegawai)
{
    $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
    return view('Mykaryawan/view', ['mykaryawan' => $mykaryawan]);
}
}

