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
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();
            
            // $table->unsignedBigInteger('id_siswa');
            // $table->foreign('id_siswa')->references('id')->on('siswas')
            // ->onDelete('cascade');

            // $table->unsignedBigInteger('id_jurusan');
            // $table->foreign('id_jurusan')->references('id')->on('jurusans')
            // ->onDelete('cascade');

            // $table->unsignedBigInteger('id_absensiswa');
            // $table->foreign('id_absensiswa')->references('id')->on('absen_siswas')
            // ->onDelete('cascade');
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
            
            $table->enum('status', ['Hadir', 'Sakit', 'Izin', 'Alpha', 'Terlambat']);
            // $table->string('kelas');
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
        Schema::dropIfExists('absensis');
    }
};
