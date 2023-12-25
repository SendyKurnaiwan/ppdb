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

    @if(session()->has('gass'))
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
                <h3 class="mb-4">Transaksi</h3>
            </div>
        </div>
              <form action="/transaksi" method="POST" class="signin-form">
                  @csrf
      {{-- <div class="form-group mb-3">
        <input type="hidden" class="form-control @error('id_user')is-invalid @enderror" name="id_user" value="{{ auth()->user()->id }}"  required value="{{ old('id_user') }}">
        @error('id_user')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="form-group mb-3">
        <input type="hidden" class="form-control @error('id_peserta')is-invalid @enderror" name="id_peserta" value="{{ auth()->user()->peserta->id }}"  required value="{{ old('id_peserta') }}">
        @error('id_peserta')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div> --}}

      <div class="form-group mb-21">
        <h6>Jenis Potongan</h6>
        <select  class="form-control @error('jenis_diskon')is-invalid @enderror" name="jenis_diskon"  required value="{{ old('jenis_diskon') }}">
            <option value="">Jenis Potongan</option>
            <option value="Tidak Punya">Tidak Punya</option>
            <option value="STC">STC (Rp. 800.000)</option>
            <option value="Juara Umum">Juara Umum Dari Kelas 1 sampai Kelas 3 dan Peringkat 1 sampai 3 (Rp. 1.200.000)</option>
            <option value="Juara Kelas">Juara Kelas Dari Kelas 1 sampai Kelas 3 dan Peringkat 1 sampai 3 (Rp. 800.000)</option>
            <option value="Daerah Kuta Selatan">Daerah Kuta Selatan (Rp. 1000.000)</option>
        </select>
        @error('jenis_diskon')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <h6>*) Bukti Foto Surat Keterangan dari domisili Kuta Selatan <br>
        *) Bukti Foto Voucher STC <br>
        *) Bukti Foto Piagam Prestasi Juara Umum selama 3 tahun dijadikan satu gambar <br>
        *) Bukti Foto Piagam Prestasi Juara Kelas selama 3 tahun dijadikan satu gambar</h6>
      <input class="form-control @error('bukti_diskon')is-invalid @enderror" type="file"  name="bukti_diskon" />
      @error('jenis_diskon')<div class="invalid-feedback">{{ $message }}</div>@enderror

      <div class="form-group mb-3 mt-4">
        <h6>Bukti Transfer</h6>
        <input type="file" class="form-control @error('bukti_transfer')is-invalid @enderror" name="bukti_transfer" required value="{{ old('bukti_transfer') }}">
        @error('bukti_transfer')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Gelombang Pendaftaran</h6>
        <label class="form-control bg-warning text-white" value="{{ auth()->user()->gelombang_pendaftaran }}"> {{ auth()->user()->gelombang_pendaftaran }} </label>
      </div>

      <div class="form-group mb-3">
        <h6>Tanggal Lahir Ayah</h6>
        <label type="text" class="form-control @error('tanggal_lahir_ayah')is-invalid @enderror" name="tanggal_lahir_ayah" placeholder="Tanggal Lahir Ayah" required value="{{ old('tanggal_lahir_ayah') }}">
       @error('tanggal_lahir_ayah')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group">
          <button type="submit" class="form-control btn btn-primary rounded submit px-3">Registrasi</button>
      </div>
    </form>
  </div>
        
</div>




