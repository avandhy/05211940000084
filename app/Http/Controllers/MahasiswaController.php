<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller{

    public function index(){
        $mahasiswa = DB::table('mahasiswa')->paginate(20);

        return view('mahasiswa(UAS)/index',['mahasiswa' => $mahasiswa]);
    }

    public function edit($nrp){
        $mahasiswa = DB::table('mahasiswa')->where('NRP',$nrp)->get();

		return view('mahasiswa(UAS)/edit',['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request){
		DB::table('mahasiswa')->where('NRP',$request->nrp)->update([
			'NRP' => $request->NRP,
			'Nama' => $request->Nama,
            'Jurusan' => $request->Jurusan,
            'IPK' => $request->IPK,
		]);

		return redirect('/mahasiswa');
    }
    public function read($nrp){

        $mahasiswa = DB::table('mahasiswa')->where('NRP',$nrp)->get();

	    return view('mahasiswa(UAS)/read',['mahasiswa' => $mahasiswa]);

	}

}
