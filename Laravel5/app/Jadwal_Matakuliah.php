<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Matakuliah extends Model
{
    protected $table = 'Jadwal_Matakuliah';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];

    public function mahasiswa()
  {
  	return $this->belongsTo(mahasiswa::class);
  }

  public function ruangan()
  {
  	return $this->belongsTo(ruangan::class);
  }

  public function dosen_matakuliah()
  {
  	return $this->belongsTo(dosen_matakuliah::class);
  }

  public function listDosenDanMatakuliah()
   {
      $out = [];
      foreach ($this->all() as $dsnMtk) {
         $out[$dsnMtk->id] = "{$dsnMtk->dosen->nama} (matakuliah{$dsnMtk->matakuliah->title})";
      }
      return $out;
   }
}
