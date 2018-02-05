<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelMatkulmahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('matkulmahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('siswa_id');
            $table->foreign('siswa_id')->references('id')->on('mahasiswa')->onDelete('CASCADE');
            $table->unsignedInteger('matkul_id');
            $table->foreign('matkul_id')->references('id')->on('matakuliah')->onDelete('CASCADE');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matkulmahasiswa');
    }
}
