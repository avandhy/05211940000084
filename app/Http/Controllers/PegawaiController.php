<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{


	public function index(){
    	// mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->paginate(15);

        //$pegawai = DB::table('pegawai')->get();

    	// mengirim data pegawai ke view index
		return view('pegawai/index',['pegawai' => $pegawai]);
	}

	public function tambah(){
        $jabatan = DB::table('jabatan')->get();

        return view('pegawai/tambah',['jabatan'=> $jabatan]);
	}

	// method untuk insert data ke table pegawai
	public function store(Request $request){
		// insert data ke table pegawai
		DB::table('pegawai')->insert([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);

		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}

	// method untuk edit data pegawai
	public function edit($id){
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
        $jabatan = DB::table('jabatan')->get() ;

        // passing data pegawai yang didapat ke view edit.blade.php
	    return view('pegawai/edit',['pegawai' => $pegawai,'jabatan' => $jabatan]);

	}

	// update data pegawai
	public function update(Request $request){
		// update data pegawai
		DB::table('pegawai')->where('pegawai_id',$request->id)->update([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);

		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}

	// method untuk hapus data pegawai
	public function hapus($id){
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('pegawai')->where('pegawai_id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
    }

    // method untuk melakukan pencarian
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('pegawai_nama','like',"%".$cari."%")
        ->paginate();

    		// mengirim data pegawai ke view index
		return view('pegawai/index',['pegawai' => $pegawai]);

    }

    public function read($id){
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
        $tugas = DB::table('tugas')->get() ;

        // passing data pegawai yang didapat ke view edit.blade.php
	    return view('pegawai/read',['pegawai' => $pegawai,'tugas' => $tugas]);

	}
}
