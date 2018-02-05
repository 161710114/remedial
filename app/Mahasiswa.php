<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mahasiswa;
use App\Wali;
use App\Dosen;
use App\Jurusan;
use App\Matakuliah;
use App\Matkulmahasiswa;
class Mahasiswa extends Model
{
    
		protected $table = 'mahasiswa';
    	protected $fillable = array('nama', 'nis','dosen_id','jurusan_id');

    	public function wali()
    	 {

		return $this->hasOne('App\Wali','siswa_id');
		
		 }

		 public function dosen()
		 {
		 	return $this->belongsTo('App\Dosen','dosen_id');
		 }

		 public function matkul()
		 {
		 	return $this->belongsToMany('App\Matakuliah','siswa_id','matkul_id');
		 }

		 public function jurusan()
		 {
		 	return $this->belongsTo('App\Jurusan','jurusan_id');
		 }
}

