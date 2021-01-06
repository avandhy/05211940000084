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

    <form class="form-group row" action="/pegawai/cari" method="GET" style="margin: 2rem 0">
        <div class="col-lg-7"><button type="submit" class="btn btn-primary" ><a class="link"href="/pegawai/tambah"> + Tambah Pegawai Baru</a></button></div>
        <div class="col-lg-4"><input type="text" class="form-control" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}"></div>
        <div class="col-lg-1"><button type="submit" class="btn btn-primary">Cari</button></div>
    </form>


    <table class="table table-hover" style="margin: 5rem 0">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach($pegawai as $p)
        <tr>
            <td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->pegawai_jabatan }}</td>
            <td>{{ $p->pegawai_umur }}</td>
            <td>{{ $p->pegawai_alamat }}</td>
            <td>
                <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>


    {{ $pegawai->links() }}

@endsection

