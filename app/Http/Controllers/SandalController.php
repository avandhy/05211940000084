<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller{

    public function index(){
        $tugas = DB::table('sandal')->get();

        return view('sandal/index',['sandal' => $sandal]);
    }

    public function edit($id){
        $sandal = DB::table('sandal')->where('kodesandal',$id)->get();

		return view('sandal/edit',['sandal' => $sandal]);
    }

    public function update(Request $request){
		DB::table('sandal')->where('kodesandal',$request->id)->update([
			'merksandal' => $request->merek,
			'stocksandal' => $request->stok,
			'tersedia' => $request->tersedia
		]);

		return redirect('/sandal');
    }

    public function tambah(){

        return view('sandal/tambah');
    }

    public function store(Request $request){
        DB::table('sandal')->insert([
			'merksandal' => $request->merek,
			'stocksandal' => $request->stok,
			'tersedia' => $request->tersedia
		]);

		return redirect('/sandal');
	}

    public function cari(Request $request){
        $cari = $request->cari;

		$tugas = DB::table('sandal')
		->where('mereksandal','like',"%".$cari."%")
        ->paginate();

		return view('sandal/index',['sandal' => $sandal]);
    }

    public function hapus($id){
        DB::table('sandal')->where('kodesandal',$id)->delete();

		return redirect('/sandal');
    }
}
