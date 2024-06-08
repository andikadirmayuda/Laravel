<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Barang::orderBy('kodebarang','desc')->get();
        return view('barang.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.tambah');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        Session::flash('kodebarang', $request->kodebarang);
        Session::flash('namabaranag', $request->namabarang);
        Session::flash('jenisbarang', $request->jenisbarang);
        Session::flash('merekbarang', $request->merekbarang);
        Session::flash('jumlahbarang', $request->jumlahbarang);

        // $request->validate([

        // 'kodebarang' => 'required|unique:barang,kodebarang',
        // 'namabarang' => 'required',
        // 'jenisbarang' => 'required',
        // 'merekbarang' => 'required',
        // 'jumlahbarang' => 'required',

        // ],[
        //     'kodebarang.required' => 'Kode Barang Wajib Diisi',
        //     'kodebarang.unique' => 'Kode Barang Sudah Ada Di Database',
        //     'namabarang.required' => 'nama Barang Wajib Diisi',
        //     'jenisbarang.required' => 'jenis Barang Wajib Diisi',
        //     'merekbarang.required' => 'merek Barang Wajib Diisi',
        //     'jumlahbarang.required' => 'jumlah Barang Wajib Diisi',
        // ]);

        $data =[
            'kodebarang'=> $request->kode,
            'namabarang'=> $request->nama,
            'jenisbarang'=> $request->jenis,
            'merekbarang'=> $request->merek,
            'jumlahbarang'=> $request->jumlah,
        ];

        barang::create($data);
        return redirect()->to('barang')->with('success','Barang Berhasil Ditambah');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
