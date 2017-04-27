<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{
    protected $table = 'Dosen_Matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];

    public function dosen()
   {
   	return $this->belongsToMany(dosen::class);
   }

   public function jadwal_matakuliah()
   {
   	return $this->hasMany(jadwal_matakuliah::class);
   }

   public function matakuliah()
   {
   	return $this->belongsToMany(matakuliah::class);
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
