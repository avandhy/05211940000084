@extends('template')

@section('content')
<button type="submit" class="btn btn-primary" style="margin: 2rem 0"><a class="link" href="/pegawai">Kembali</a></button>
@foreach($pegawai as $p)
<div style="font-size:1.25rem">
    <h3>Data Pegawai</h3>
    <div hidden name="id">{{ $p->pegawai_id }}</div><br>
    <div class="row">
        <div class="col-lg-4">Nama :</div>
        <div class="col-lg-4">{{ $p->pegawai_nama }}</div>
    </div>
    <div class="row">
        <div class="col-lg-4">Jabatan :</div>
        <div class="col-lg-4">{{ $p->pegawai_jabatan }}</div>
    </div>
    <div class="row">
        <div class="col-lg-4">Umur :</div>
        <div class="col-lg-4">{{ $p->pegawai_umur }}</div>
    </div>
    <div class="row">
        <div class="col-lg-4">Alamat :</div>
        <div class="col-lg-4">{{ $p->pegawai_alamat }}</div>
    </div>
</div>
@endforeach

<div style="margin: 5rem 0">
    <h3>Daftar Tugas</h3>
    <table class="table table-hover" style="margin: 2rem 0">
        <tr>
            <th>Waktu</th>
            <th>Tugas</th>
            <th>Status</th>
        </tr>
        @foreach($tugas as $t)
            @if($p->pegawai_id==$t->IDPegawai)
            <tr>
                <td>{{ $t->	Tanggal }}</td>
                <td>{{ $t->NamaTugas }}</td>
                <td>{{ $t->	Status }}</td>
            </tr>
            @endif
        @endforeach
    </table>
</div>
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
