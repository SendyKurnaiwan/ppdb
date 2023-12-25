@extends('dashboard.halaman.main')
<div class="content">
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                <img src="assets/img/Logo-sekolah.png" height="50" width="50">
        </a>
        <a href="#" class="sidebar-toggler d-flex ">
            <i class="fa fa-bars"></i>
        </a>
    </nav>

    @if(session()->has('siap'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('Sukses') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif


        @if(session()->has('dataError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('dataError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
   
    {{-- formulir  --}}
    <div class="login-wrap p-4 p-md-5">
        <div class="d-flex">
            <div class="w-100">
                <h3 class="mb-4">Registrasi Peserta</h3>
            </div>
        </div>
              <form action="/siswa" method="POST" class="signin-form">
                  @csrf
      <div class="form-group mb-3">
        <h6>Data Siswa</h6>
          <label  class="form-control bg-warning text-white" value="{{ auth()->user()->kode_pendaftaran }}">{{ auth()->user()->kode_pendaftaran }}</label>
      </div>

      <div class="form-group mb-3">
        <input type="hidden" class="form-control @error('id_user')is-invalid @enderror" name="id_user" value="{{ auth()->user()->id }}"  required value="{{ old('id_user') }}">
        @error('id_user')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="form-group mb-3">
        <h6>Nama Lengkap</h6>
        <input type="text" class="form-control @error('nama_lengkap_peserta')is-invalid @enderror" name="nama_lengkap_peserta" placeholder="Nama lengkap" required value="{{ old('nama_lengkap_peserta') }}">
        @error('nama_lengkap_peserta')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>No. KK</h6>
        <input type="text" class="form-control @error('no_kk')is-invalid @enderror" name="no_kk" placeholder="Nomor Kartu Keluarga" required value="{{ old('no_kk') }}">
        @error('no_kk')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>NIK</h6>
        <input type="text" class="form-control @error('nik')is-invalid @enderror" name="nik" placeholder="Nomor NIK" required value="{{ old('nik') }}">
       @error('nik')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Kompetensi Keahlian</h6>
        <select  class="form-control @error('kompetensi_keahlian')is-invalid @enderror" name="kompetensi_keahlian"  required value="{{ old('kompetensi_keahlian') }}">
            <option value="">Kompetensi Keahlian</option>
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="Tehnik Komputer dan jaringan">Tehnik Komputer dan jaringan</option>
            <option value="Multimedia">Multimedia</option>
            <option value="Akuntansi">Akuntansi</option>
            <option value="Perhotelan">Perhotelan/option>
        </select>
        @error('kompetensi_keahlian')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Jenis Pendaftaran</h6>
        <select  class="form-control @error('jenis_pendaftaran')is-invalid @enderror" name="jenis_pendaftaran"  required value="{{ old('jenis_pendaftaran') }}">
            <option value="">Jenis Pendaftaran</option>
            <option value="Siswa Baru">Siswa Baru</option>
            <option value="Pindahan">Pindahan</option>
            <option value="Kembali Sekolah">Kembali Sekolah</option>
        </select>
        @error('jenis_pendaftaran')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>NISN</h6>
        <input type="text" class="form-control @error('nisn')is-invalid @enderror" name="nisn" placeholder="NISN" required value="{{ old('nisn') }}">
        @error('nisn')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Nama Prestasi</h6>
        <input type="text" class="form-control @error('nama_prestasi')is-invalid @enderror" name="nama_prestasi" placeholder="Nama Prestasi" required value="{{ old('nama_prestasi') }}">
        @error('nama_prestasi')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Tingkat Prestasi</h6>
        <input type="text" class="form-control @error('tingkat_prestasi')is-invalid @enderror" name="tingkat_prestasi" placeholder="Tingkat Prestasi" required value="{{ old('tingkat_prestasi') }}">
        @error('tingkat_prestasi')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Tahun Prestasi</h6>
        <input type="text" class="form-control @error('tahun_prestasi')is-invalid @enderror" name="tahun_prestasi" placeholder="Tahun Prestasi" required value="{{ old('tahun_prestasi') }}">
        @error('tahun_prestasi')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Penyelenggara</h6>
        <input type="text" class="form-control @error('penyelenggara')is-invalid @enderror" name="penyelenggara" placeholder="Penyelenggara Lomba" required value="{{ old('penyelenggara') }}">
        @error('penyelenggara')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Beasiswa yang didapatkan SMP</h6>
        <select  class="form-control @error('beasiswa')is-invalid @enderror" name="beasiswa" placeholder="Beasiswa yang didapatkan SMP" required value="{{ old('beasiswa') }}">
            <option value="">Beasiswa yang didapatkan SMP</option>
            <option value="Tidak Dapat">Tidak Dapat</option>
            <option value="Dapat">Dapat</option>
        </select>
        @error('beasiswa')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>


      <div class="form-group mb-3">
        <h6>Jenis Beasiswa</h6>
        <input type="text" class="form-control @error('jenis_beasiswa')is-invalid @enderror" name="jenis_beasiswa" placeholder="Jenis Beasiswa Yang Didapatkan di SMP" required value="{{ old('jenis_beasiswa') }}">
        @error('jenis_beasiswa')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Tempat Lahir</h6>
        <input type="text" class="form-control @error('empat_lahir')is-invalid @enderror" name="tempat_lahir" placeholder="Tempat Lahir" required value="{{ old('tempat_lahir') }}">
        @error('tempat_lahir')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Tanggal Lahir</h6>
        <input type="date" class="form-control @error('tanggal_lahir')is-invalid @enderror" name="tanggal_lahir" placeholder="Tanggal Lahir" required value="{{ old('tanggal_lahir') }}">
        @error('tanggal_lahir')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Agama Kepercayaan</h6>
        <select class="form-control @error('agama')is-invalid @enderror" name="agama" placeholder="Tanggal Lahir" required value="{{ old('agama') }}">
            <option value="">Agama Kepercayaan</option>
            <option value="Islam">Islam</option>
            <option value="Kristen Protestan">Kristen Protestan</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
        </select>
        @error('agama')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Kewarganegaraan</h6>
        <select class="form-control @error('kewarganegaraan')is-invalid @enderror" name="kewarganegaraan" placeholder="Tanggal Lahir" required value="{{ old('kewarganegaraan') }}">
            <option value="">Kewarganegaraan</option>
            <option value="Indonesia (WNI)">Indonesia (WNI)</option>
            <option value="Asing (WNA)">Asing (WNA)</option>
        </select>
        @error('kewarganegaraan')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-grup mb-3">
        <h6>Alamat Jalan</h6>
        <input type="text" class="form-control @error('alamat')is-invalid @enderror" name="alamat" placeholder="Alamat Jalan" required value="{{ old('alamat') }}">
        @error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-grup mb-3">
        <h6>Nama Kelurahan/Desa</h6>
        <input type="text" class="form-control @error('kelurahan')is-invalid @enderror" name="kelurahan" placeholder="Nama Kelurahan/Desa" required value="{{ old('kelurahan') }}">
        @error('kelurahan')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-grup mb-3">
        <h6>Kecamatan</h6>
        <input type="text" class="form-control @error('kecamatan')is-invalid @enderror" name="kecamatan" placeholder="Kecamatan" required value="{{ old('kecamatan') }}">
        @error('kecamatan')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-grup mb-3">
        <h6>Kabupaten</h6>
        <input type="text" class="form-control @error('kabupaten')is-invalid @enderror" name="kabupaten" placeholder="Kabupaten" required value="{{ old('kabupaten') }}">
        @error('kabupaten')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-grup mb-3">
        <h6>Kode Pos</h6>
        <input type="text" class="form-control @error('kode_pos')is-invalid @enderror" name="kode_pos" placeholder="Kode Pos" required value="{{ old('kode_pos') }}">
        @error('kode_pos')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-grup mb-3">
        <h6>Tempat Tinggal</h6>
        <select class="form-control @error('tempat_tinggal')is-invalid @enderror" name="tempat_tinggal" placeholder="Tanggal Lahir" required value="{{ old('tempat_tinggal') }}">
            <option value="">Tempat Tinggal</option>
            <option value="Bersama Orang Tua">Bersama Orang Tua</option>
            <option value="Bersama Wali">Bersama Wali</option>
            <option value="Kos">Kos</option>
            <option value="Asrama">Asrama</option>
            <option value="Panti Asuhan">Panti Asuhan</option>
        </select>
        @error('tempat_tinggal')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-grup mb-3">
        <h6>Mode Tranportasi</h6>
        <select class="form-control @error('tranportasi')is-invalid @enderror" name="tranportasi" placeholder="Tanggal Lahir" required value="{{ old('tranportasi') }}">
            <option value="">Mode Tranportasi</option>
            <option value="Jalan Kaki">Jalan Kaki</option>
            <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
            <option value="Kendaraan Umum">Kendaraan Umum</option>
            <option value="Jemputan Sekolah">Jemputan Sekolah</option>
            <option value="Kereta Api">Kereta Api</option>
            <option value="Ojek">Ojek</option>
        </select>
        @error('tranportasi')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-grup mb-3">
        <h6>Anak Keberapa</h6>
        <input type="text" class="form-control @error('anak_keberapa')is-invalid @enderror" name="anak_keberapa" placeholder="Anak Keberapa" required value="{{ old('anak_keberapa') }}">
        @error('anak_keberapa')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-grup mb-3">
        <h6>Golongan Darah</h6>
        <input type="text" class="form-control @error('golongan_darah')is-invalid @enderror" name="golongan_darah" placeholder="Golongan Darah" required value="{{ old('golongan_darah') }}">
        @error('golongan_darah')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-grup mb-3">
        <h6>Penyakit Yang Pernah Diderita</h6>
        <input type="text" class="form-control @error('penyakit')is-invalid @enderror" name="penyakit" placeholder="Penyakit Yang Pernah Diderita" required value="{{ old('penyakit') }}">
        @error('penyakit')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-grup mb-3">
        <h6>Tinggi Badan(cm)</h6>
        <input type="text" class="form-control @error('tinggi_badan')is-invalid @enderror" name="tinggi_badan" placeholder="Tinggi Badan" required value="{{ old('tinggi_badan') }}">
        @error('tinggi_badan')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-grup mb-3">
        <h6>Berat Badan(kg)</h6>
        <input type="text" class="form-control @error('berat_badan')is-invalid @enderror" name="berat_badan" placeholder="Berat Badan" required value="{{ old('berat_badan') }}">
        @error('berat_badan')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-grup mb-3">
        <h6>Jarak Tempat Tinggal Ke Sekolah</h6>
        <select class="form-control @error('jarak_tempat_tinggal')is-invalid @enderror" name="jarak_tempat_tinggal"  required value="{{ old('jarak_tempat_tinggal') }}">
            <option value="">Jarak Tempat Tinggal Ke Sekolah</option>
            <option value="Kurang Dari 1km">Kurang Dari 1km</option>
            <option value="Lebih Dari 1km">Lebih Dari 1km</option>
        </select>
        @error('jarak_tempat_tinggal')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-grup mb-3">
        <h6>Waktu Tempuh Ke Sekolah</h6>
        <input type="text" class="form-control @error('waktu_tempuh_ke_sekolah')is-invalid @enderror" name="waktu_tempuh_ke_sekolah" placeholder="Waktu Tempuh Ke Sekolah" required value="{{ old('waktu_tempuh_ke_sekolah') }}">
        @error('waktu_tempuh_ke_sekolah')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-grup mb-3">
        <h6>Jumlah Saudara Kandung</h6>
        <input type="text" class="form-control @error('jumlah_saudara_kandung')is-invalid @enderror" name="jumlah_saudara_kandung" placeholder="Jumlah Saudara Kandung" required value="{{ old('jumlah_saudara_kandung') }}">
        @error('jumlah_saudara_kandung')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-grup mb-3">
        <h6>Nomor Telephone Rumah</h6>
        <input type="text" class="form-control @error('telpon_rumah')is-invalid @enderror" name="telpon_rumah" placeholder="Nomor Telephone Rumah" required value="{{ old('telpon_rumah') }}">
        @error('telpon_rumah')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-grup mb-3">
        <h6>Email Peserta: (tidak bisa diubah)</h6>
        <label type="text" class="form-control bg-warning text-white">{{ auth()->user()->email }}</label>    
      </div>

      <div class="form-group">
          <button type="submit" class="form-control btn btn-primary rounded submit px-3">Registrasi</button>
      </div>
    </form>
  </div>
        
</div>




