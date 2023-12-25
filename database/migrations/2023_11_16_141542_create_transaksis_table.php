<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    public function up()
    {

        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('id_peserta');
            $table->foreign('id_peserta')->references('id')->on('data_pesertas')->onDelete('cascade');
            $table->unsignedInteger('id_diskon');
            $table->foreign('id_diskon')->references('id')->on('diskons')->onDelete('cascade');
            $table->string('bukti_transfer');
            $table->string('jumlah_membayar');
            $table->string('total_membayar');
            $table->string('jumlah_biaya');
            $table->string('jumlah_sisa');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}