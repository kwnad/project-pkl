<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_absensis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_absensi');
            // membuat fk id_kelas yang mengacu kpd field id di table
            // kelas
            $table->foreign('id_absensi')->references('id')->on('absensis')
                ->onDelete('cascade');

            $table->unsignedBigInteger('id_siswa');
            // membuat fk id_kelas yang mengacu kpd field id di table
            // kelas
            $table->foreign('id_siswa')->references('id')->on('siswas')
                ->onDelete('cascade');

            $table->unsignedBigInteger('id_kelas');
            // membuat fk id_kelas yang mengacu kpd field id di table
            // kelas
            $table->foreign('id_kelas')->references('id')->on('kelas')
                ->onDelete('cascade');

            $table->unsignedBigInteger('id_jurusan');
            // membuat fk id_kelas yang mengacu kpd field id di table
            // kelas
            $table->foreign('id_jurusan')->references('id')->on('jurusans')
                ->onDelete('cascade');
            $table->enum('status', ['hadir', 'sakit', 'izin', 'terlambat', 'alpha']);
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
        Schema::dropIfExists('detail_absensis');
    }
};
