@extends('template')

@section('content')
<button type="submit" class="btn btn-primary" style="margin: 2rem 0"><a class="link" href="/pegawai">Kembali</a></button>


@foreach($pegawai as $p)
    <div hidden name="id">{{ $p->pegawai_id }}</div><br>
    <div for="nama">Nama:{{ $p->pegawai_nama }}</div><br>
    <div for="jabatan">Jabatan:{{ $p->pegawai_jabatan }}</div><br>
    <div for="umur">Umur:{{ $p->pegawai_umur }}</div><br>
    <div for="alamat">Alamat:{{ $p->pegawai_alamat }}</div><br>
@endforeach

<h3>Daftar Tugas</h3>
<table class="table table-hover" style="margin: 5rem 0">
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
