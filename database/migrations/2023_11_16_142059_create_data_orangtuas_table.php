<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataOrangtuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('data_orangtuas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('id_peserta');
            $table->foreign('id_peserta')->references('id')->on('data_pesertas')->onDelete('cascade');
            $table->string('nama_ayah');
            $table->integer('telepon_ayah');
            $table->string('tempat_lahir_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->enum('pendidikan_ayah', ['SD','SMP','SMA','D3', 'S1','S2','S3']);
            $table->enum('pekerjaan_ayah', ['Tidak Bekerja','Nelayan','Petani','PNS/TNI/POLRI','Karyawan Swasta', 'Pedagang Kecil','Pedagang Besar','Wiraswasta','Wirausaha','Buruh','Pensiun','Lainnya']);
            $table->enum('penghasilan_ayah', ['Kurang 500.000', '500.000 - 999.999','1.000.000 - 1.999.999', '2.000.000 - 4.999.999', '5.000.000 - 20.000.000', 'Lebih 20.000.000']);
            $table->string('nama_ibu');
            $table->integer('telepon_ibu');
            $table->string('tempat_lahir_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->enum('pendidikan_ibu',  ['SD','SMP','SMA','D3', 'S1','S2','S3']);
            $table->enum('pekerjaan_ibu', ['Tidak Bekerja','Nelayan','Petani','PNS/TNI/POLRI','Karyawan Swasta', 'Pedagang Kecil','Pedagang Besar','Wiraswasta','Wirausaha','Buruh','Pensiun','Lainnya']);
            $table->enum('penghasilan_ibu', ['Kurang 500.000', '500.000 - 999.999','1.000.000 - 1.999.999', '2.000.000 - 4.999.999', '5.000.000 - 20.000.000', 'Lebih 20.000.000']);
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
        Schema::dropIfExists('data_orangtuas');
    }
}
