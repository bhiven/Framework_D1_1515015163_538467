<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\MahasiswaRequest;
use App\Http\Requests;
use App\Mahasiswa;
use App\Pengguna;

class MahasiswaController extends Controller
{
    protected $informasi = "Gagal Melakukan Aksi";

    public function awal()
    {
        $semuaMahasiswa = Mahasiswa::all();
        return view('Mahasiswa.awal', compact("semuaMahasiswa"));
    }

    public function tambah()
    {
        return view('Mahasiswa.tambah');
    }

    public function simpan(MahasiswaRequest $input)
    {
        $Pengguna = new Pengguna($input->only('username','password'));

        if ($Pengguna->save()) 
        {
            $Mahasiswa =new Mahasiswa();
            $Mahasiswa->nama = $input->nama;
            $Mahasiswa->nim = $input->nim;
            $Mahasiswa->alamat = $input->alamat;

            if($Pengguna->Mahasiswa()->save($Mahasiswa)) 
            {
                $this->informasi = 'Berhasil Simpan Data';
            }            
        }
        return redirect('Mahasiswa') -> with(['informasi'=>$this->informasi]);
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

    public function update($id, MahasiswaRequest $input)
    {
        $Mahasiswa = Mahasiswa::find($id);
        $Pengguna = $Mahasiswa->Pengguna;
        $Mahasiswa->nama = $input->nama;
        $Mahasiswa->nim = $input->nim;
        $Mahasiswa->alamat = $input->alamat;
        $Mahasiswa->save(); 
        if (!is_null($input->username)) 
        {
            $Pengguna->fill($input->only('username'));
            if (!empty($input->password)) 
            {
                $Pengguna->password = $input->password;
            }

            if ($Pengguna-save()) 
            {
                $this->informasi = 'Berhasil Simpan Data';
            }
            else
            {
                $this->informasi = 'Gagal Simpan Data';   
            }
        }

        return redirect('Mahasiswa') -> with(['informasi'=>$informasi]);
    }

    public function hapus($id)
    {
        $Mahasiswa = Mahasiswa::find($id);

        if ($Mahasiswa->Pengguna()->delete()) 
        {
            if ($Mahasiswa->delete()) 
            {
                $this->informasi = 'Berhasil Hapus Data';
            }
            
        }

        return redirect('Mahasiswa') -> with(['informasi'=>$this->informasi]);
    }
}
