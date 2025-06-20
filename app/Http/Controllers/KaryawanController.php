<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
	public function index5()
	{
    		// mengambil data dari table pegawai
		$karyawan = DB::table('karyawan')->get();

    		// mengirim data karyawan ke view index
		return view('Karyawan/karyawan',['karyawan' => $karyawan]);

	}

	public function tambah()
    {

        return view('Karyawan/tambahkaryawan');
    }

	public function store(Request $request)
	{
        DB::table('karyawan')->insert([
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

		return redirect('/karyawan');
    }


    public function hapus($id)
	{
		DB::table('karyawan')->where('divisi', $id)->delete();
		return redirect('/karyawan');
	}
}
