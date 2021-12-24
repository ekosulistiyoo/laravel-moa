<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa=Mahasiswa::all();
       return view('mahasiswa.main', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'prodi' => $request->prodi,
            'univ' => $request->univ,
            'status' => $request->status,
            'gender' => $request->gender,
        ]);
        return redirect('/');
    }

    public function edit($mahasiswaID)
    {
        $mahasiswa=Mahasiswa::where('id', $mahasiswaID)->first();
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $mahasiswaID)
    {
        $mahasiswa=Mahasiswa::find($mahasiswaID);
        $mahasiswa->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'prodi' => $request->prodi,
            'univ' => $request->univ,
            'status' => $request->status,
            'gender' => $request->gender,
        ]);
        return redirect('/');
    }
    public function destroy($mahasiswaID)
    {
        Mahasiswa::destroy($mahasiswaID);
        return redirect('/');
    }    
}