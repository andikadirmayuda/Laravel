<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if(strlen($katakunci)){
            $data = mahasiswa::where("nim","like","%katakunci%")
            ->orWhere("nama","like","%katakunci%")
            ->orWhere("jurusan","like","%katakunci%")
            ->paginate($jumlahbaris);
        }else{

            $data = mahasiswa::orderBy('nim', 'desc')->paginate($jumlahbaris);
        }
        return view('mahasiswa.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   

        

        Session::flash('nim', $request->nim);
        Session::flash('nama', $request->nama);
        Session::flash('jurusan', $request->jurusan);

        $request->validate([

        'nim' => 'required|numeric|unique:mahasiswa,nim|min:4',
        'nama' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:25',
        'jurusan' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:25',
    ], [
        'nim.required' => 'NIM Wajib diisi',
        'nim.numeric' => 'NIM Wajib diisi Dengan Angka',
        'nim.unique' => 'NIM Sudah ada didatabase',
        'nim.min' => 'NIM Minimal 4 karakter',
        'nama.required' => 'Nama Wajib diisi',
        'nama.string' => 'Nama Wajib diisi dengan huruf',
        'nama.regex' => 'Nama hanya boleh berisi huruf dan spasi',
        'nama.max' => 'Nama maksimal 25 karakter',
        'jurusan.required' => 'Jurusan Wajib diisi',
        'jurusan.string' => 'Jurusan Wajib diisi dengan huruf',
        'jurusan.regex' => 'Jurusan hanya boleh berisi huruf dan spasi',
        'jurusan.max' => 'Jurusan maksimal 25 karakter',

    ]);
        $data =[
            'nim'=> $request->nim,
            'nama'=> $request->nama,
            'jurusan'=> $request->jurusan,
        ];

        mahasiswa::create($data);
        // Redirect ke halaman lain dengan pesan sukses
        return redirect()->to('mahasiswa')->with('success', 'Data Berhasil Ditambah');
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
        $data = mahasiswa::where('nim', $id)->first();
        return view('mahasiswa.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'nama' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:25',
            'jurusan' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:25',
        ], [
            
            'nama.required' => 'Nama Wajib diisi',
            'nama.string' => 'Nama Wajib diisi dengan huruf',
            'nama.regex' => 'Nama hanya boleh berisi huruf dan spasi',
            'nama.max' => 'Nama maksimal 25 karakter',
            'jurusan.required' => 'Jurusan Wajib diisi',
            'jurusan.string' => 'Jurusan Wajib diisi dengan huruf',
            'jurusan.regex' => 'Jurusan hanya boleh berisi huruf dan spasi',
            'jurusan.max' => 'Jurusan maksimal 25 karakter',
    
        ]);
            $data =[
                'nama'=> $request->nama,
                'jurusan'=> $request->jurusan,
            ];
    
            mahasiswa::where('nim', $id)->update($data);
            // Redirect ke halaman lain dengan pesan sukses
            return redirect()->to('mahasiswa')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        mahasiswa::where('nim', $id)->delete();
        return redirect()->to('mahasiswa')->with('success', 'Data Berhasil Di Delete');
        
    }
}
