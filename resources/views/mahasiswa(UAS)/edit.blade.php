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
    </style>
@endsection

@section('content')
    <button type="submit" class="btn btn-primary" style="margin: 2rem 0"><a class="link" href="/mahasiswa">Kembali</a></button>


    @foreach($mahasiswa as $m)
    <form action="/mahasiswa/update" method="post" class="row"style="margin: 0 0 4rem 0">
        {{ csrf_field() }}
    <div class="col-lg-6">
        <div class="form-group">
            <label for="NRP">NRP :</label>
            <input type="text" class="form-control" required="required" name="NRP" id="NRP" value="{{ $m->NRP}}">
        </div>
        <div class="form-group">
            <label for="Nama">Nama :</label>
            <input type="text" class="form-control" required="required" name="Nama" id="Nama" value="{{ $m->Nama}}">
        </div>
        <div class="form-group">
            <label for="Jurusan ">Departemen :</label>
            <input type="text" class="form-control" required="required" name="Jurusan " id="Jurusan " value="{{ $m->Jurusan }}">
        </div>
        <div class="form-group">
            <label for="IPK">IPK :</label>
            <input type="text" class="form-control" name="IPK" id="IPK" value="{{ $m->IPK }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </div>
    </form>
@endforeach
@endsection


