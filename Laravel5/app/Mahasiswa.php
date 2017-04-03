<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'Mahasiswa';
    protected $fillable = ['nama','nim','alamat','pengguna_id'];

    /*$mahasiswa = Pengguna::find(1)->Mahasiswa;

    public function mahasiswa()
    {
    	return $this->belongTo(pengguna::class);
    }
    */
}
