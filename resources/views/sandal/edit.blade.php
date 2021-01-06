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


    @foreach($sandal as $s)
    <form action="/sandal/update" method="post" class="row"style="margin: 0 0 4rem 0">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $s->kodesandal }}"> <br/>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="merek">Merek :</label>
            <input type="text" class="form-control" required="required" name="merek" id="merek" value="{{ $s->merksandal }}">
        </div>
        <div class="form-group">
            <label for="stok">Stok :</label>
            <input type="number" class="form-control" required="required" name="stok" id="stok" value="{{ $s->stocksandal }}">
        </div>
        <div class="form-group">
            <label for="tersedia">Tersedia :</label>
            <input type="text" class="form-control" required="required" name="tersedia" id="tersedia" value="{{ $s->tersedia }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </div>
    </form>
@endforeach
@endsection


