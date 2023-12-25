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
                <h3 class="mb-4">Data Ayah</h3>
            </div>
        </div>
              <form action="/ortu" method="POST" class="signin-form">
                  @csrf
      <div class="form-group mb-3">
        <input type="hidden" class="form-control @error('id_user')is-invalid @enderror" name="id_user" value="{{ auth()->user()->id }}"  required value="{{ old('id_user') }}">
        @error('id_user')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="form-group mb-3">
        <input type="hidden" class="form-control @error('id_peserta')is-invalid @enderror" name="id_peserta" value="{{ auth()->user()->peserta->id }}"  required value="{{ old('id_peserta') }}">
        @error('id_peserta')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Nama Lengkap Ayah</h6>
        <input type="text" class="form-control @error('nama_ayah')is-invalid @enderror" name="nama_ayah" placeholder="Nama Lengkap Ayah" required value="{{ old('nama_ayah') }}">
        @error('nama_ayah')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>No Telepon Ayah</h6>
        <input type="text" class="form-control @error('telepon_ayah')is-invalid @enderror" name="telepon_ayah" placeholder="Nomor Telepon Ayah" required value="{{ old('telepon_ayah') }}">
        @error('telepon_ayah')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Tempat Lahir Ayah</h6>
        <input type="text" class="form-control @error('tempat_lahir_ayah')is-invalid @enderror" name="tempat_lahir_ayah" placeholder="Tempat Lahir Ayah" required value="{{ old('tempat_lahir_ayah') }}">
       @error('tempat_lahir_ayah')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="form-group mb-3">
        <h6>Tanggal Lahir Ayah</h6>
        <input type="date" class="form-control @error('tanggal_lahir_ayah')is-invalid @enderror" name="tanggal_lahir_ayah" placeholder="Tanggal Lahir Ayah" required value="{{ old('tanggal_lahir_ayah') }}">
       @error('tanggal_lahir_ayah')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Pendidikan Ayah</h6>
        <select  class="form-control @error('pendidikan_ayah')is-invalid @enderror" name="pendidikan_ayah"  required value="{{ old('pendidikan_ayah') }}">
            <option value="">Pendidikan Ayah</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="D3">D3</option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
        </select>
        @error('pendidikan_ayah')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Pekerjaan Ayah</h6>
        <select  class="form-control @error('pekerjaan_ayah')is-invalid @enderror" name="pekerjaan_ayah"  required value="{{ old('pekerjaan_ayah') }}">
            <option value="">Pekerjaan Ayah </option>
            <option value="Tidak Bekerja">Tidak Bekerja</option>
            <option value="Nelayan">Nelayan</option>
            <option value="Petani">Petani</option>
            <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
            <option value="Karyawan Swasta">Karyawan Swasta</option>
            <option value="Pedagang Kecil">Pedagang Kecil</option>
            <option value="Pedagang Besar">Pedagang Besar</option>
            <option value="Wiraswasta">Wiraswasta</option>
            <option value="Wirausaha">Wirausaha</option>
            <option value="Buruh">Buruh</option>
            <option value="Pensiun">Pensiun</option>
            <option value="Lainnya">Lainnya</option>
        </select>
        @error('pekerjaan_ayah')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Penghasilan Ayah</h6>
        <select  class="form-control @error('penghasilan_ayah')is-invalid @enderror" name="penghasilan_ayah"  required value="{{ old('penghasilan_ayah') }}">
            <option value="">Penghasilan Ayah</option>
            <option value="Kurang 500.000">Kurang 500.000</option>
            <option value="500.000 - 999.999">500.000 - 999.999</option>
            <option value="1.000.000 - 1.999.999">1.000.000 - 1.999.999</option>
            <option value="2.000.000 - 4.999.999">2.000.000 - 4.999.999</option>
            <option value="5.000.000 - 20.000.000">5.000.000 - 20.000.000</option>
            <option value="Lebih 20.000.000">Lebih 20.000.000</option>
        </select>
        @error('penghasilan_ayah')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="d-flex">
        <div class="w-100">
            <h3 class="mb-4">Data Ibu</h3>
        </div>
    </div>

      <div class="form-group mb-3">
        <h6>Nama Lengkap ibu</h6>
        <input type="text" class="form-control @error('nama_ibu')is-invalid @enderror" name="nama_ibu" placeholder="Nama Lengkap ibu" required value="{{ old('nama_ibu') }}">
        @error('nama_ibu')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>No Telepon ibu</h6>
        <input type="text" class="form-control @error('telepon_ibu')is-invalid @enderror" name="telepon_ibu" placeholder="Nomor Telepon ibu" required value="{{ old('telepon_ibu') }}">
        @error('telepon_ibu')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Tempat Lahir ibu</h6>
        <input type="text" class="form-control @error('tempat_lahir_ibu')is-invalid @enderror" name="tempat_lahir_ibu" placeholder="Tempat Lahir ibu" required value="{{ old('tempat_lahir_ibu') }}">
       @error('tempat_lahir_ibu')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="form-group mb-3">
        <h6>Tanggal Lahir ibu</h6>
        <input type="date" class="form-control @error('tanggal_lahir_ibu')is-invalid @enderror" name="tanggal_lahir_ibu" placeholder="Tanggal Lahir ibu" required value="{{ old('tanggal_lahir_ibu') }}">
       @error('tanggal_lahir_ibu')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Pendidikan ibu</h6>
        <select  class="form-control @error('pendidikan_ibu')is-invalid @enderror" name="pendidikan_ibu"  required value="{{ old('pendidikan_ibu') }}">
            <option value="">Pendidikan ibu</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="D3">D3</option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
        </select>
        @error('pendidikan_ibu')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Pekerjaan ibu</h6>
        <select  class="form-control @error('pekerjaan_ibu')is-invalid @enderror" name="pekerjaan_ibu"  required value="{{ old('pekerjaan_ibu') }}">
            <option value="">Pekerjaan ibu </option>
            <option value="Tidak Bekerja">Tidak Bekerja</option>
            <option value="Nelayan">Nelayan</option>
            <option value="Petani">Petani</option>
            <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
            <option value="Karyawan Swasta">Karyawan Swasta</option>
            <option value="Pedagang Kecil">Pedagang Kecil</option>
            <option value="Pedagang Besar">Pedagang Besar</option>
            <option value="Wiraswasta">Wiraswasta</option>
            <option value="Wirausaha">Wirausaha</option>
            <option value="Buruh">Buruh</option>
            <option value="Pensiun">Pensiun</option>
            <option value="Lainnya">Lainnya</option>
        </select>
        @error('pekerjaan_ibu')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

      <div class="form-group mb-3">
        <h6>Penghasilan ibu</h6>
        <select  class="form-control @error('penghasilan_ibu')is-invalid @enderror" name="penghasilan_ibu"  required value="{{ old('penghasilan_ibu') }}">
            <option value="">Penghasilan ibu</option>
            <option value="Kurang 500.000">Kurang 500.000</option>
            <option value="500.000 - 999.999">500.000 - 999.999</option>
            <option value="1.000.000 - 1.999.999">1.000.000 - 1.999.999</option>
            <option value="2.000.000 - 4.999.999">2.000.000 - 4.999.999</option>
            <option value="5.000.000 - 20.000.000">5.000.000 - 20.000.000</option>
            <option value="Lebih 20.000.000">Lebih 20.000.000</option>
        </select>
        @error('penghasilan_ibu')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>

     

      <div class="form-group">
          <button type="submit" class="form-control btn btn-primary rounded submit px-3">Registrasi</button>
      </div>
    </form>
  </div>
        
</div>




