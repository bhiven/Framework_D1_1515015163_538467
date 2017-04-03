<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'Dosen';
    protected $fillable = ['nama','nip','alamat','pengguna_id'];

    /*public function pengguna()
    {
    	return $this->belongTo(pengguna::class);
    }

    public function dosen_matakuliah()
    {
    	return $this->hasMany(dosen_matakuliah::class);
    }

    $dosen_mengajar = App\Dosen::find(1)->dosen_matakuliah;

    foreach ($dosen_mengajar as $mengajar) 
    {
    	$dosen_mengajar = App\Dosen::find(1)->dosen_matakuliah()->where('title','foo')->first();

    	return $this->hasMany(dosen_matakuliah::class,'foreign key');
    	return $this->hasMany(dosen_matakuliah::class,'foreign key','localkey');    	
    }
    */
}
