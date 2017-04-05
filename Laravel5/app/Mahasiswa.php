<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'Mahasiswa';
    protected $fillable = ['nama','nim','alamat','pengguna_id'];

    public function mahasiswa()
    {
    	return $this->belongTo(pengguna::class);
    }

    public function jadwalmatakuliah()
	{
		return $this->hasMany(jadwalmatakuliah::class,'mahasiswa_id');
	}
    
}
