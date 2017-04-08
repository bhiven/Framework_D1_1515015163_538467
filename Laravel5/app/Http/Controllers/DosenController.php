<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
    protected $informasi = "Gagal Melakukan Aksi";

    public function awal()
    {
        $semuaDosen = Dosen::all();
        return view('Dosen.awal', compact("semuaDosen"));
    }

    public function tambah()
    {
        return view('Dosen.tambah');
    }

    public function simpan(Request $input)
    {
        $Pengguna = new Pengguna($input->only('username','password'));

        if ($Pengguna->save()) 
        {
            $Dosen =new Dosen();
            $Dosen->nama = $input->nama;
            $Dosen->nip = $input->nip;
            $Dosen->alamat = $input->alamat;

            if($Pengguna->Dosen()->save($Dosen)) 
            {
                $this->informasi = 'Berhasil Simpan Data';
            }            
        }
        return redirect('Dosen') -> with(['informasi'=>$this->informasi]);
    }
    
    public function edit($id)
    {
        $Dosen = Dosen::find($id);
        return view('Dosen.edit')-> with (array('Dosen'=>$Mahasiswa));
    }

    public function lihat($id)
    {
        $Mahasiswa = Mahasiswa::find($id);
        return view('Dosen.lihat')-> with (array('Dosen'=>$Mahasiswa));
    }

    public function update($id, Request $input)
    {
        $Dosen = Mahasiswa::find($id);
        $Pengguna = $Dosen->Pengguna;
        $Dosen->nama = $input->nama;
        $Dosen->nip = $input->nip;
        $Dosen->alamat = $input->alamat;
        $Dosen->save(); 
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

        return redirect('Dosen') -> with(['informasi'=>$informasi]);
    }

    public function hapus($id)
    {
        $Dosen = Dosen::find($id);

        if ($Dosen->Pengguna()->delete()) 
        {
            if ($Dosen->delete()) 
            {
                $this->informasi = 'Berhasil Hapus Data';
            }
            
        }

        return redirect('Dosen') -> with(['informasi'=>$informasi]);
    }
}
