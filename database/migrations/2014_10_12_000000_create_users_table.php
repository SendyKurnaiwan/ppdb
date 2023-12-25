<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_pendaftaran');
            $table->enum('sumber_info', ['Brosur','Spanduk', 'Tetangga', 'Keluarga','Radio', 'Media Sosial', 'Sosialisasi', 'Website SMK TI Bali Global Jimbaran', 'Alumni SMK TI Bali Global Jimbaran']);
            $table->string('nama_lengkap');
            $table->string('asal_sekolah');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('nomor_hp')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('gelombang_pendaftaran', ['Early Bird', 'Gelombang 1', 'Gelombang 2', 'Tutup Pendaftaran' ]);
            $table->string('email_verified_at')->nullable();
            $table->boolean('is_admin')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
