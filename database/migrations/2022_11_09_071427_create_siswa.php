<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
        $table->id();
        // nomor_induk__siswa .. create field NIS as integer data type  
        $table->integer('nomor_induk_siswa');
        // nama ... create nama as varchar data type with lenght character  100
        $table->string('nama', 100);
        // alamat .. create alamat as varchar data type
        $table->string('alamat');
        // jenis_kelamin .. create gender as varchar data type
        $table->string('jenis_kelamin');
        $table->timestamp();
    }
}
