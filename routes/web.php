<?php
use App\Mahasiswa;
use App\Wali;
use App\Dosen;
use App\Jurusan;
use App\Matakuliah;
use App\Matkulmahasiswa;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('soal1', function() {
	$dosen = Dosen::where('nama', 'like', '%Bayu Pramayuda')->get();
	return View::make('soal1', compact('dosen'));

});

Route::get('soal2', function() {
	$wali = Wali::where('nama', 'like', '%Deni Ramdani')->get();
	return View::make('soal2', compact('wali'));

});

Route::get('soal3', function() {
	$mahasiswa = Mahasiswa::where('nama', 'like', '%Budi')->get();
	Mahasiswa::where('nama', 'like', '%Rony')->get();
	return View::make('soal3', compact('mahasiswa'));

});

Route::get('bonus', function() {
	$mahasiswa = Mahasiswa::with('dosen','wali','jurusan','matkul')->get();
	
	return View('bonus', compact('mahasiswa'));

});

		
		

	