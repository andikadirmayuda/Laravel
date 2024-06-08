@extends('layout.template')

@section('konten')
<!-- START FORM -->
@if ($errors->any())
<div class="pt-3">
   <div class="alert alert-danger">
       <ul>
       @foreach ($errors->all() as $item)
       <li>{{ $item }}</li>
       @endforeach
   </ul>
</div>
</div>
@endif
<form action="{{ url('konsumen') }}" method="post">
    @csrf
    
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h2>Tambah Konsumen</h2>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Konsumen</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="notelpon" class="col-sm-2 col-form-label">No Telpon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="notelpon" value="">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kota" class="col-sm-2 col-form-label">Kota</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kota" value="">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="alamat" value="">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </div>
    </div>
</form>
<a href="{{ url('konsumen') }}" class="btn btn-dark">Kembali</a>
<!-- AKHIR FORM -->    
@endsection
