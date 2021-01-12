@extends('template')

@section('content')
<button type="submit" class="btn btn-primary" style="margin: 2rem 0"><a class="link" href="/mahasiswa">Kembali</a></button>
@foreach($mahasiswa as $m)
<h2 style="margin: 3rem 0">Data Mahasiswa</h2>
<div style="font-size:1.25rem; margin: 0 0 10rem 0">
    <div class="row">
        <div class="col-lg-4">Nama :</div>
        <div class="col-lg-4">{{ $m->NRP}}</div>
    </div>
    <div class="row">
        <div class="col-lg-4">Jabatan :</div>
        <div class="col-lg-4">{{ $m->Nama}}</div>
    </div>
    <div class="row">
        <div class="col-lg-4">Umur :</div>
        <div class="col-lg-4">{{ $m->Jurusan }}</div>
    </div>
    <div class="row">
        <div class="col-lg-4">Alamat :</div>
        <div class="col-lg-4">{{ $m->IPK }}</div>
    </div>
</div>
@endforeach


@endsection

@section('style')
    <style>
        .link{
            text-decoration: none;
            color:white;
        }
        .link:hover{
            color:white !important;
            text-decoration: none !important;
        }
    </style>
@endsection
