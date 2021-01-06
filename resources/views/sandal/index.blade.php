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

    <form class="form-group row" action="/sandal/cari" method="GET" style="margin: 2rem 0">
        <div class="col-lg-7"><button type="submit" class="btn btn-primary" ><a class="link"href="/sandal/tambah"> + Tambah Merek Baru</a></button></div>
        <div class="col-lg-4"><input type="text" class="form-control" name="cari" placeholder="Cari Merek .." value="{{ old('cari') }}"></div>
        <div class="col-lg-1"><button type="submit" class="btn btn-primary">Cari</button></div>
    </form>


    <table class="table table-hover" style="margin: 5rem 0">
        <tr>
            <th>Merek</th>
            <th>Stok</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach($sandal as $s)
        <tr>
            <td>{{ $s->merksandal}}</td>
            <td>{{ $s->stocksandal}}</td>
            <td>{{ $s->tersedia }}</td>
            <td>
                <a href="/sandal/edit/{{ $s->kodesandal}}">Edit</a>
                <a href="/sandal/hapus/{{ $s->kodesandal }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

@endsection

