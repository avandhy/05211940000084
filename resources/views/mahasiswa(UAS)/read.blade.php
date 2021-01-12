@extends('template')

@section('content')
<button type="submit" class="btn btn-primary" style="margin: 2rem 0"><a class="link" href="/mahasiswa">Kembali</a></button>
@foreach($mahasiswa as $m)
<div style="font-size:1.25rem">
    <h2>Data Mahasiswa</h2>

    <div class="row">
        <div class="col-lg-4">Nama :</div>
        <div class="col-lg-4">{{ $m->NRP}}</div>
    </div>
    <div class="row">
        <div class="col-lg-4">Jabatan :</div>
        <div class="col-lg-4">{{ $s->Nama}}</div>
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
