@extends('template')

@section('style')
    <link rel="stylesheet" href="{{asset('css/jquery.datetimepicker.min.css')}}">
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
<button type="submit" class="btn btn-primary" style="margin: 2rem 0"><a class="link" href="/tugas">Kembali</a></button>


@foreach($tugas as $t)
    <form action="/tugas/update" method="post" class="row"style="margin: 0 0 4rem 0">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $t->	ID}}"> <br/>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="pegawai">ID Pegawai:</label>
            <select id="pegawai" name="pegawai" class="form-control" >
                @foreach($pegawai as $p)
                    <option value="{{ $p->pegawai_id }}" @if($t->IDPegawai ==$p->pegawai_id ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
                 @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="waktu">Waktu:</label>
            <input type="text" class="form-control datetimepicker" required="required" name="waktu" id="waktu" value="{{ $t->Tanggal }}">
        </div>
        <div class="form-group">
            <label for="tugas">Tugas:</label>
            <input type="text" class="form-control" required="required" name="tugas" id="tugas" value="{{ $t->	NamaTugas }}">
        </div>
        <div class="form-group">
            <label for="status">Select list:</label>
            <select class="form-control" required="required" name="status" id="status" value="{{ $t->Status}}">
              <option>B</option>
              <option>S</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </div>
    </form>
@endforeach
<script src="{{asset('js/jquery.datetimepicker.full.min.js')}}"></script>
<script>
    $('#waktu').datetimepicker({
        timepicker:true,
        datepicker:true,
        format:'Y-m-d h:i:s',
        step:5
    })
</script>

@endsection
