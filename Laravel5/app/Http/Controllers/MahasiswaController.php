<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
    {
    	return "Hello dari Mahasiswa Controller";
    }

    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$Mahasiswa =new Mahasiswa();
    	$Mahasiswa->nama = 'jon doe';
    	$Mahasiswa->nim = '1515015163';
		$Mahasiswa->alamat = 'jl antasari';
		$Mahasiswa->pengguna_id = '1';
    	$Mahasiswa->save();
    	return "data dengan nama {$Mahasiswa->nama} telah disimpan";
    }
}
