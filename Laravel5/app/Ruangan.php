<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'Ruangan';
    protected $fillable = ['title'];

    public function jadwal_matakuliah()
	{
		return $this->hasMany(jadwal_matakuliah::class); 
	}
}
