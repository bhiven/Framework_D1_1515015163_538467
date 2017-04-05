<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
    {
        return view('Mahasiswa.awal', ['data'=> Mahasiswa::all()]);
    }

    public function tambah()
    {
        return view('Mahasiswa.tambah');
    }

    public function simpan(Request $input)
    {
        $Mahasiswa =new Mahasiswa();
        $Mahasiswa->nama = $input->nama;
        $Mahasiswa->nim = $input->nim;
        $Mahasiswa->alamat = $input->alamat;
        $Mahasiswa->pengguna_id = $input->pengguna_id;
        $informasi = $Mahasiswa->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
        return redirect('Mahasiswa') -> with(['informasi'=>$informasi]);
    }
    
    public function edit($id)
    {
        $Mahasiswa = Mahasiswa::find($id);
        return view('Mahasiswa.edit')-> with (array('Mahasiswa'=>$Mahasiswa));
    }

    public function lihat($id)
    {
        $Mahasiswa = Mahasiswa::find($id);
        return view('Mahasiswa.lihat')-> with (array('Mahasiswa'=>$Mahasiswa));
    }

    public function update($id, Request $input)
    {
        $Mahasiswa = Mahasiswa::find($id);
        $Mahasiswa->nama = $input->nama;
        $Mahasiswa->nim = $input->nim;
        $Mahasiswa->alamat = $input->alamat;
        $Mahasiswa->pengguna_id = $input->pengguna_id;
        $informasi = $Mahasiswa->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('Mahasiswa') -> with(['informasi'=>$informasi]);
    }

    public function hapus($id)
    {
        $Mahasiswa = Mahasiswa::find($id);
        $informasi = $Mahasiswa->delete() ? 'Berhasil hapus data' : 'Gagal  data';
        return redirect('Mahasiswa') -> with(['informasi'=>$informasi]);
    }
}
