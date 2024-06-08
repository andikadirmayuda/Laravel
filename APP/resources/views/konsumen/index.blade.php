@extends('layout.template')

@section('konten')

<div class="my-3 p-3 bg-body rounded shadow-sm">
    
    <!-- TOMBOL TAMBAH DATA KONSUMEN-->
    <div class="pb-3">
        <h2>DATA KONSUMEN</h2>
    <a href='{{ url('konsumen/create') }}' class="btn btn-primary">+ Tambah Konsumen</a>
    </div>

    <table class="table table-striped">
    <thead>
        <tr>
            <th class="col-md-2">Nama Konsumen</th>
            <th class="col-md-2">No Telpon</th>
            <th class="col-md-2">Kota</th>
            <th class="col-md-2">Alamat</th>
            <th class="col-md-2">Aksi</th>
        </tr>
    </thead>
    <tbody>

        
        @foreach ($data as $item)
            
        <tr>
            <td>{{ $item->Nama}}</td>
            <td>{{ $item->NoTelpon}}</td>
            <td>{{ $item->Kota}}</td>
            <td>{{ $item->Alamat}}</td>
            
        <td>
            <a href='' class="btn btn-warning btn-sm">Lihat</a>
            <a href='' class="btn btn-warning btn-sm">edit</a>
        {{-- <form onsubmit="return confirm('Tekan OK Untuk Menghapus Data')" class="d-inline" action="{{ url('mahasiswa/'. $item->nim) }}" method="post">
            @csrf
            @method('DELETE') --}}
            {{-- <form action="" class="d-inline">

                <button type="submit" name="submit" class="btn btn-danger btn-sm">Edit</button>
            </form> --}}
        {{-- </form> --}}
        </td>
        </tr>
        
        @endforeach
        <!-- Add this line to verify the loop runs -->
    
    </tbody>
    </table>
    {{-- {{ $data->links() }} --}}
</div>

@endsection
