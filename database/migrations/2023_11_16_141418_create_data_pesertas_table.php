    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateDataPesertasTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('data_pesertas', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('id_user');
                $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
                $table->string('nama_lengkap_peserta');
                $table->string('no_kk');
                $table->string('nik');
                $table->enum('kompetensi_keahlian', ['Rekayasa Perangkat Lunak', 'Tehnik Komputer dan jaringan', 'Multimedia', 'Akuntansi', 'Perhotelan']);
                $table->enum('jenis_pendaftaran', ['Siswa Baru', 'Pindahan', 'Kembali Sekolah']);
                $table->string('nisn');
                $table->string('nama_prestasi');
                $table->string('tingkat_prestasi');
                $table->string('tahun_prestasi');
                $table->string('penyelenggara');
                $table->enum('beasiswa', ['Tidak Dapat', 'Dapat']);
                $table->string('jenis_beasiswa');
                $table->string('tempat_lahir');
                $table->date('tanggal_lahir');
                $table->enum('agama', ['Islam', 'Kristen ','Protestan', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']);
                $table->enum('kewarganegaraan', ['Indonesia (WNI)', 'Asing (WNA)']);
                $table->string('alamat');
                $table->string('kelurahan');
                $table->string('kecamatan');
                $table->string('kabupaten');
                $table->string('kode_pos');
                $table->enum('tempat_tinggal', ['Bersama Orang Tua', 'Bersama Wali', 'Kos', 'Asrama', 'Panti Asuhan']);
                $table->enum('tranportasi', ['Jalan Kaki', 'Kendaraan Pribadi', 'Kendaraan Umum', 'Jemputan Sekolah', 'Kereta Api', 'Ojek']);
                $table->string('anak_keberapa');
                $table->string('golongan_darah');
                $table->string('penyakit');
                $table->string('tinggi_badan');
                $table->string('berat_badan');
                $table->enum('jarak_tempat_tinggal', ['Kurang Dari 1km', 'Lebih Dari 1km']);
                $table->string('waktu_tempuh_ke_sekolah');
                $table->string('jumlah_saudara_kandung');
                $table->string('telpon_rumah');
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
            Schema::dropIfExists('data_pesertas');
        }
    }
