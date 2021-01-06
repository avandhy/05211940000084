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
<button type="submit" class="btn btn-primary" style="margin: 2rem 0"><a class="link" href="/sandal">Kembali</a></button>



    <form action="/sandal/store" method="post" class="row" style="margin: 0 0 4rem 0">
        {{ csrf_field() }}
    <div class="col-lg-6">
        <div class="form-group">
            <label for="merek">Merek :</label>
            <input type="text" class="form-control" required="required" name="merek" id="merek" >
        </div>
        <div class="form-group">
            <label for="stok">Stok :</label>
            <input type="number" class="form-control" required="required" name="stok" id="stok" >
        </div>
        <div class="form-group">
            <label for="tersedia">Tersedia :</label>
            <input type="text" class="form-control" required="required" name="tersedia" id="tersedia" >
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </div>
    </form>

@endsection
