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


    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post" class="row"style="margin: 0 0 4rem 0">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" required="required" name="nama" id="nama" value="{{ $p->pegawai_nama }}">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
             <select id="jabatan" name="jabatan" class="form-control" >
                @foreach($jabatan as $j)
                    <option value="{{ $j->nama_jabatan }}" @if($p->pegawai_jabatan==$j->nama_jabatan) selected="selected" @endif>{{ $j->nama_jabatan  }}</option>
                 @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="number" class="form-control" required="required" name="umur" id="umur" value="{{ $p->pegawai_umur }}">
        </div>
        <div class="form-group">
            <label for="email">Alamat:</label>
            <textarea class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </div>
    </form>
@endforeach
@endsection


