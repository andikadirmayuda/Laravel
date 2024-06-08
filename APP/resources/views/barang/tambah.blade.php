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
<form action="{{ url('barang') }}" method="post">
    @csrf
    
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h2>Tambah Barang</h2>
        <div class="mb-3 row">
            <label for="kode" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kode" value="{{ Session::get('kodebarang') }}">
               
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="{{ Session::get('namabarang') }}">
               
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jenis" class="col-sm-2 col-form-label">Jenis Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jenis" value="{{ Session::get('jenisbarang') }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="merek" class="col-sm-2 col-form-label">Merek Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="merek" value="{{ Session::get('merekbarang') }}">
                
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jumlah" value="{{ Session::get('jumlahbarang') }}">
               
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </div>
    </div>
</form>
<a href="{{ url('barang') }}" class="btn btn-dark">Kembali</a>
<!-- AKHIR FORM -->    
@endsection
