@extends('layout.template')

@section('konten')

<div class="my-3 p-3 bg-body rounded shadow-sm">
    
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <h2>DATA BARANG</h2>
    <a href='{{ url('barang/create') }}' class="btn btn-primary">+ Tambah Barang</a>
    </div>

    <table class="table table-striped">
    <thead>
        <tr>
            <th class="col-md-2">Kode Barang</th>
            <th class="col-md-2">Nama Barang</th>
            <th class="col-md-2">Jenis Barang</th>
            <th class="col-md-2">Merek Barang</th>
            <th class="col-md-2">Jumlah Barang</th>
            <th class="col-md-2">Aksi</th>
        </tr>
    </thead>
    <tbody>

        
        @foreach ($data as $item)
            
        <tr>
            <td>{{ $item->kodebarang }}</td>
            <td>{{ $item->namabarang }}</td>
            <td>{{ $item->jenisbarang }}</td>
            <td>{{ $item->merekbarang }}</td>
            <td>{{ $item->jumlahbarang }}</td>
            
        <td>
            <a href='' class="btn btn-warning btn-sm">Edit</a>
        {{-- <form onsubmit="return confirm('Tekan OK Untuk Menghapus Data')" class="d-inline" action="{{ url('mahasiswa/'. $item->nim) }}" method="post">
            @csrf
            @method('DELETE') --}}
            <form action="" class="d-inline">

                <button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
            </form>
        {{-- </form> --}}
        </td>
        </tr>
        
        @endforeach
    </tbody>
    </table>
    {{-- {{ $data->links() }} --}}
</div>

@endsection


            
    
    
    
    
    
    
    
    
    
    
    
    
    