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
    <button type="submit" class="btn btn-primary" style="margin: 2rem 0"><a class="link" href="/pegawai">Kembali</a></button>


    <form class="row"action="/pegawai/store" method="post" style="margin: 0 0 4rem 0">
        {{ csrf_field() }}
    <div class="col-lg-6">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" required="required" name="nama" id="nama">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <select id="jabatan" name="jabatan" class="form-control" >
                @foreach($jabatan as $j)
                    <option value="{{ $j->nama_jabatan }}" >{{ $j->nama_jabatan  }}</option>
                 @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="number" class="form-control" required="required" name="umur" id="umur">
        </div>
        <div class="form-group">
            <label for="email">Alamat:</label>
            <textarea class="form-control" required="required" name="alamat"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </div>

    </form>

@endsection

