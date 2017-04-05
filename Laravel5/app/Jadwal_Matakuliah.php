<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Matakuliah extends Model
{
    protected $table = 'Jadwal_Matakuliah';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];

    public function mahasiswa()
  {
  	return $this->belongsToMany(mahasiswa::class);
  }

  public function ruangan()
  {
  	return $this->belongsToMany(ruangan::class);
  }

  public function dosen_matakuliah()
  {
  	return $this->belongsToMany(dosen_matakuliah::class);
  }
}
