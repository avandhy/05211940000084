@extends('template')


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
        .pagination{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 3rem 0;
        }
    </style>
@endsection

@section('content')


    <form class="form-group row" action="/tugas/cari" method="GET" style="margin: 2rem 0">
        <div class="col-lg-7"><button type="submit" class="btn btn-primary" ><a class="link"href="/tugas/tambah"> + Tambah Tugas Baru</a></button></div>
        <div class="col-lg-4"><input type="text" class="form-control" name="cari" placeholder="Cari Tugas .." value="{{ old('cari') }}"></div>
        <div class="col-lg-1"><button type="submit" class="btn btn-primary">Cari</button></div>
    </form>

    <table class="table table-hover" style="margin: 5rem 0">
        <tr>
            <th>ID Pegawai</th>
            <th>Waktu</th>
            <th>Tugas</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
        @foreach($tugas as $t)
        <tr>
            <td>{{ $t->IDPegawai }}</td>
            <td>{{ $t->	Tanggal }}</td>
            <td>{{ $t->NamaTugas }}</td>
            <td>{{ $t->	Status }}</td>
            <td>
                 <a href="/tugas/edit/{{ $t->ID }}">Edit</a>
                 <a href="/tugas/hapus/{{ $t->ID }}">Hapus</a>
            </td>
         </tr>
             @endforeach
    </table>

    {{$tugas->links()}}

@endsection
