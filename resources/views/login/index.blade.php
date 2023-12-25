{{--  --}}
<link rel="stylesheet" href="assets/css/registrasi.css">
<link href="assets/img/icon/LOGO STIBAJRA NEW.PNG" rel="icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
{{--  --}}
@if(session()->has('Sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('Sukses') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif


        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="img" style="background-image: url(assets/img/Logo-sekolah.png); height:550px;">
              </div>
                    <div class="login-wrap p-4 p-md-5">
                  <div class="d-flex">
                      <div class="w-100">
                          <h3 class="mb-4">Login Peserta</h3>
                      </div>
                  </div>
                        <form action="/login" method="POST" class="signin-form">
                            @csrf
                <div class="form-group mb-3">
                  <input type="text" class="form-control @error('email')is-invalid @enderror" name="email" placeholder="Email"  required value="{{ old('email') }}">
                  @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group mb-3">
                  <input type="password" class="form-control @error('password')is-invalid @enderror" name="password" placeholder="Password"  required value="{{ old('password') }}">
                  @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
                </div>
              </form>
              <p class="text-center">Tidak Memiliki Akun ? <a data-toggle="tab" href="/registrasi">Registrasi</a></p>
            </div>
          </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>