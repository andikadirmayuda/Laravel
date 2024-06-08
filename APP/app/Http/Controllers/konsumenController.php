<?php

namespace App\Http\Controllers;

use App\Models\konsumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class konsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = konsumen::all();
        return view('konsumen.index', compact('data')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("konsumen.tambah");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Session::flash('nama', $request->nama);
        Session::flash('notelpon', $request->notelpon);
        Session::flash('kota', $request->kota);
        Session::flash('alamat', $request->alamat);

        $request->validate([
            'nama' => 'required|string|max:255',
            'notelpon' => 'required|string|max:15',
            'kota' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);
        $datakonsumen =  [
            "nama"=> $request->nama,
            "notelpon"=> $request->notelpon,
            "kota"=> $request->kota,
            "alamat"=> $request->alamat,

        ];

        konsumen::create($datakonsumen);
        return redirect()->to("konsumen")->with("success","Konsumen Berhasil Di Tambah");
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
