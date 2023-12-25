{{--  --}}
<link rel="stylesheet" href="assets/css/registrasi.css">
{{--  --}}


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="img" style="background-image: url(assets/img/vander-fix.jpg);">
              </div>
                    <div class="login-wrap p-4 p-md-5">
                  <div class="d-flex">
                      <div class="w-100">
                          <h3 class="mb-4">Registrasi Peserta</h3>
                      </div>
                  </div>
                        <form action="/registrasi" method="POST" class="signin-form">
                            @csrf
                <div class="form-group mb-3">
                    <select name="sumber_info" class="form-control @error('sumber_info')is-invalid @enderror" required value="{{ old('sumber_info') }}">
                        <option value="">Sumber Informasi</option>
                        <option value="Brosur">Brosur</option>
                        <option value="Spanduk">Spanduk</option>
                        <option value="Tetangga">Tetangga</option>
                        <option value="Keluarga">Keluarga</option>
                        <option value="Radio">Radio</option>
                        <option value="Media Sosial">Media Sosial</option>
                        <option value="Sosialisasi">Sosialisasi</option>
                        <option value="Website SMK TI Bali Global Jimbaran">Website SMK TI Bali Global Jimbaran</option>
                        <option value="Alumni SMK TI Bali Global Jimbaran">Alumni SMK TI Bali Global Jimbaran</option>
                    </select>
                    @error('sumber_info')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control @error('nama_lengkap')is-invalid @enderror" name="nama_lengkap" placeholder="Nama lengkap" required value="{{ old('nama_lengkap') }}">
                  @error('nama_lengkap')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control @error('nomor_hp')is-invalid @enderror" name="nomor_hp" placeholder="Nomor telepon" required value="{{ old('nomor_hp') }}">
                  @error('nomor_hp')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group mb-3">
                 <select name="jenis_kelamin" class="form-control @error('jenis_kelamin')is-invalid @enderror" required value="{{ old('jenis_kelamin') }}">
                    <option value="">Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                 </select>
                 @error('jenis_kelamin')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control @error('asal_sekolah')is-invalid @enderror" name="asal_sekolah" placeholder="Asal sekolah" required value="{{ old('asal_sekolah') }}">
                  @error('asal_sekolah')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control @error('email')is-invalid @enderror" name="email" placeholder="Email" required value="{{ old('email') }}">
                  @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group mb-3">
                  <input type="password" class="form-control @error('password')is-invalid @enderror" name="password" placeholder="Password" required value="{{ old('password') }}">
                  @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                @php
                $tanggalSekarang = now()->toDateString();

                 // Gelombang Early Bird (22-30 November)
                $tanggalMulaiEarlyBird = "2023-12-01" ;
                $tanggalSelesaiEarlyBird ="2023-12-30" ;

                // Gelombang 1 (setelah tanggal 30 November)
                $tanggalMulaiGelombang1 = "2023-01-01"  ; // Mulai dari awal bulan berikutnya
                $tanggalSelesaiGelombang1 = "2023-01-30"  ; // Sampai dengan tanggal 15 bulan berikutnya

                // Gelombang 2 (setelah tanggal 5 Januari)
                $tanggalMulaiGelombang2 = "2024-02-01"  ; // Mulai dari awal bulan ke-3 berikutnya
                $tanggalSelesaiGelombang2 = "2024-02-30" ; // Sampai dengan tanggal 15 bulan ke-3 berikutnya
                @endphp

                @if ($tanggalSekarang >= $tanggalMulaiEarlyBird && $tanggalSekarang <= $tanggalSelesaiEarlyBird)
                    <input type="hidden" name="gelombang_pendaftaran" value="Early Bird">
                @elseif ($tanggalSekarang > $tanggalSelesaiEarlyBird && $tanggalSekarang <= $tanggalSelesaiGelombang1)
                    <input type="hidden" name="gelombang_pendaftaran" value="Gelombang 1">
                @elseif ($tanggalSekarang > $tanggalSelesaiGelombang1 && $tanggalSekarang <= $tanggalSelesaiGelombang2)
                    <input type="hidden" name="gelombang_pendaftaran" value="Gelombang 2">
                @else
                    <input type="hidden" name="gelombang_pendaftaran" value="Tutup Pendaftaran">
                @endif

                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Registrasi</button>
                </div>
              </form>
              <p class="text-center">Sudah Memiliki Akun ? <a data-toggle="tab" href="/login">Login</a></p>
            </div>
          </div>
            </div>
        </div>
    </div>
</section>