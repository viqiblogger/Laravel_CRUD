<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data_mahasiswa = \App\Mahasiswa::all();
        return view('mahasiswa.index',['data_mahasiswa' => $data_mahasiswa]);
    }

    public function create(Request $request)
    {
        
        \App\Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('Sukses','Data berhasil di input');
      
    }
    public function edit($id)
    {
        $data_mahasiswa = \App\Mahasiswa::find($id);
        return view('mahasiswa.edit',['data_mahasiswa' => $data_mahasiswa]);
        
    }
    public function update(Request $request,$id)
    {
        $data_mahasiswa = \App\Mahasiswa::find($id);
        $data_mahasiswa ->update($request->all());
        return redirect('/mahasiswa')->with('sukses','Data berhasil di update');
    }
    public function delete($id)
    {
        $data_mahasiswa = \App\Mahasiswa::find($id);
        $data_mahasiswa->delete($data_mahasiswa);
        return redirect('/mahasiswa')->with('sukses','Data berhasil di hapus');
    }
}

