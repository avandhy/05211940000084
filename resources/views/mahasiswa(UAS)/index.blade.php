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

    <h2 style="margin: 3rem 0 0 0">Data Mahasiswa</h2>

    <table class="table table-hover" style="margin: 5rem 0">
        <tr>
            <th>NRP</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>IPK</th>
            <th>Opsi</th>
        </tr>
        @foreach($mahasiswa as $m)
        <tr>
            <td>{{ $m->NRP}}</td>
            <td>{{ $m->Nama}}</td>
            <td>{{ $m->Jurusan }}</td>
            <td>{{ $m->IPK }}</td>
            <td>
                <a href="/mahasiswa/edit/{{ $m->NRP}}">Edit</a>
                <a href="/mahasiswa/read/{{ $m->NRP }}">View</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $mahasiswa->links() }}
@endsection

