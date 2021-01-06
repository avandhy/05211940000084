<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller{

    public function indtugas(){
        $tugas = DB::table('tugas')->paginate(5);
        //$tugas = DB::table('tugas')->get();

        return view('indtugas',['tugas' => $tugas]);

    }

    public function edit($id){
        $tugas = DB::table('tugas')->where('ID',$id)->get();
        $pegawai = DB::table('pegawai')->get();

		return view('edittugas',['tugas' => $tugas,'pegawai'=> $pegawai]);
    }

    public function update(Request $request){
		DB::table('tugas')->where('tugas_id',$request->id)->update([
			'IDPegawai' => $request->pegawai,
			'Tanggal' => $request->waktu,
			'NamaTugas' => $request->tugas,
			'Status' => $request->status
		]);

		return redirect('/tugas');
    }

    public function tambah(){
        $pegawai = DB::table('pegawai')->get();

        return view('tambahtugas',['pegawai'=> $pegawai]);
    }

    public function store(Request $request){
        DB::table('tugas')->insert([
			'IDPegawai' => $request->pegawai,
			'Tanggal' => $request->waktu,
			'NamaTugas' => $request->tugas,
			'Status' => $request->status
		]);

		return redirect('/tugas');
	}

    public function cari(Request $request){
        $cari = $request->cari;

		$tugas = DB::table('tugas')
		->where('NamaTugas','like',"%".$cari."%")
        ->paginate();

		return view('indtugas',['tugas' => $tugas]);
    }

    public function hapus($id){
        DB::table('tugas')->where('ID',$id)->delete();

		return redirect('/tugas');
    }
}
