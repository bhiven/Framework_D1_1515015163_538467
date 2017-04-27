<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'Mahasiswa';
    protected $fillable = ['nama','nim','alamat','pengguna_id'];

    public function pengguna()
    {
    	return $this->belongsTo(pengguna::class);
    }

    public function jadwalmatakuliah()
	{
		return $this->hasMany(jadwalmatakuliah::class,'mahasiswa_id');
	}

    public function getUsernameAttribute()
    {
        return $this->pengguna->username;
    }
    
    public function listMahasiswaDanNim()
    {
        $out = [];
        foreach ($this->all() as $mhs) {
            $out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
        }
        return $out;
    }
    
}
