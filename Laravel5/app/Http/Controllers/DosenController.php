<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
    public function awal()
    {
    	return "Hello dari Dosen Controller";
    }

    public function tambah()
    {
    	return $this->simpan();
    }

    public function simpan()
    {
    	$Dosen =new Dosen();
    	$Dosen->nama = 'john';
    	$Dosen->nip = '1979757';
		$Dosen->alamat = 'jl suryanata';
		$Dosen->pengguna_id = '2';
    	$Dosen->save();
    	return "data dengan nama {$Dosen->nama} telah disimpan";
    }
}
