<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
	protected $table = 'jurusan';
    protected $fillable = array('nama');

    public function mahasiswa()
    {
    	return $this->hasMany('App\Mahasiswa','jurusan_id');
    }
}
