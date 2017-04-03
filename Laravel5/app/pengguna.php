<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['username','password'];

    /*public function dosen()
    {
    	return $this->hasOne(dosen::class);
    }

    public function mahasiswa()
    {
    	return $this->hasOne(mahasiswa::class);
    }

    public function peran()
    {
    	return $this->belongsToMany(Peran::class);
    }

    $pengguna = App\pengguna::find(1);

    foreach ($pengguna as $peran) 
    {
    	 $pengguna = App\pengguna::find(1)->where('peran_id','2')->get();
    }
    */
}
