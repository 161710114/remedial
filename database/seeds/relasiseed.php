<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;
use App\Wali;
use App\Dosen;
use App\Jurusan;
use App\Matakuliah;
use App\Matkulmahasiswa;

class relasiseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $dosen = Dosen::create(array(
            'nama' => 'Bayu Pramayuda',
            'nipd' => '1234567890',
            'alamat' => 'kota baru'));

        $this->command->info('Data dosen telah diisi!');

        $jurusan = Jurusan::create(array(
            'nama' => 'Rekayasa Perangkat Lunak'));

        $jr = Jurusan::create(array(
            'nama' => 'Teknik Kendaraan Ringan'));

        $jurus = Jurusan::create(array(
            'nama' => 'Teknik Sepeda Motor'));

         $this->command->info('Data Jurusan telah diisi!');

		$novay = Mahasiswa::create(array(
			'nama' => 'Deden Rohmat',
            'nis' => '1015015072',
            'dosen_id' => $dosen->id,
            'jurusan_id' => $jurusan->id));

        $a = Mahasiswa::create(array(
            'nama' => 'Rony',
            'nis' => '12345678',
            'dosen_id' => $dosen->id,
            'jurusan_id' => $jr->id));

        $b = Mahasiswa::create(array(
            'nama' => 'Budi',
            'nis' => '87654321',
            'dosen_id' => $dosen->id,
            'jurusan_id' => $jurus->id));

      $this->command->info('Mahasiswa telah diisi!');

      Wali::create(array(
            'nama'  => 'Deni Ramdani',
            'alamat' => 'jl.sampora',
            'siswa_id' => $novay->id));

        
        $this->command->info('Data mahasiswa dan wali telah diisi!');

        $matakuliah = Matakuliah::create(array(
            'nama_matkul' => 'Administrasi'));

        $this->command->info('Data matakuliah telah diisi!');

		
    }
    }

