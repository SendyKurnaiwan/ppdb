@extends('admin.layout.main')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Pengguna</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item active">Data Pengguna</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Excel</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                  <th>No</th>
                  <th>Kode Pendaftaran</th>
                  <th>Sumber Info</th>
                  <th>Nama Lengkap</th>
                  <th>Asal Sekolah</th>
                  <th>Jenis Kelamin</th>
                  <th>Nomor Hp</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Gelombang Pendaftaran</th>
                  <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php $no= 1; ?>
                @foreach ($data as $row)
                <tr>
                    <th>{{ $no++}}</th>
                    <td>{{ $row->kode_pendaftaran }}</td>
                    <td>{{$row->sumber_info}}</td>
                    <td>{{$row->nama_lengkap}}</td>
                    <td>{{$row->asal_sekolah}}</td>
                    <td>{{$row->jenis_kelamin}}</td>
                    <td>{{$row->nomor_hp}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->password}}</td>
                    <td>{{$row->gelombang_pendaftaran}}</td>
                    <td>
                      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#EditUser{{$row->id}}">
                        Edit
                      </button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#HapusUser{{$row->id}}">
                        Hapus
                      </button>
                    </td>
                  </tr>
                  <div class="modal fade" id="EditUser{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Data Pengguna </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="/admin/data_user/update/id={{$row->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Sumber Info</label>
                                <select name="sumber_info" class="form-control">
                                    <option value="Brosur" {{ $row->sumber_info == 'Brosur' ? 'selected' : '' }}>Brosur</option>
                                    <option value="Spanduk" {{ $row->sumber_info == 'Spanduk' ? 'selected' : '' }}>Spanduk</option>
                                    <option value="Tetangga" {{ $row->sumber_info == 'Tetangga' ? 'selected' : '' }}>Tetangga</option>
                                    <option value="Keluarga" {{ $row->sumber_info == 'Keluarga' ? 'selected' : '' }}>Keluarga</option>
                                    <option value="Radio" {{ $row->sumber_info == 'Radio' ? 'selected' : '' }}>Radio</option>
                                    <option value="Media Sosial" {{ $row->sumber_info == 'Media Sosial' ? 'selected' : '' }}>Media Sosial</option>
                                    <option value="Sosialisasi" {{ $row->sumber_info == 'Sosialisasi' ? 'selected' : '' }}>Sosialisasi</option>
                                    <option value="Website SMK TI Bali Global Jimbaran" {{ $row->sumber_info == 'Website SMK TI Bali Global Jimbaran' ? 'selected' : '' }}>Website SMK TI Bali Global Jimbaran</option>
                                    <option value="Alumni SMK TI Bali Global Jimbaran" {{ $row->sumber_info == 'Alumni SMK TI Bali Global Jimbaran' ? 'selected' : '' }}>Alumni SMK TI Bali Global Jimbaran</option>
                                </select>

                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" placeholder="Isikan Nama Anda" value="{{ $row->nama_lengkap}}">
                                <label class="form-label">Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" class="form-control" placeholder="Isikan Asal Sekolah Anda" value="{{ $row->asal_sekolah}}">
                                <label class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                  <option value="Laki-Laki" {{ $row->jenis_kelamin === 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                  <option value="Perempuan" {{ $row->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                                <label class="form-label">Nomor Hp</label>
                                <input type="text" name="nomor_hp" class="form-control" placeholder="Isikan Nomor Hp Anda" value="{{ $row->nomor_hp}}">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Isikan Email Anda" value="{{ $row->email}}">
                                <label class="form-label">Password</label>
                                <input type="text" name="password" class="form-control" placeholder="Isikan Password Anda" value="{{ $row->password}}">
                                <label class="form-label">Gelombang Pendaftaran</label>
                                <select name="gelombang_pendaftaran" class="form-control">
                                    <option value="Early Bird" {{ $row->gelombang_pendaftaran == 'Early Bird' ? 'selected' : '' }}>Gelombang Early Bird</option>
                                    <option value="Gelombang 1" {{ $row->gelombang_pendaftaran == 'Gelombang 1' ? 'selected' : '' }}>Gelombang 1</option>
                                    <option value="Gelombang 2" {{ $row->gelombang_pendaftaran == 'Gelombang 2' ? 'selected' : '' }}>Gelombang 2</option>
                                </select>
                                <div class="form-text"></div>
                                <div class="form-text"></div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="HapusUser{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Hapus Data Pengguna </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/admin/data_user/hapus/id={{ $row->id}}" method="GET" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="id"/>
                              <div class="mb-3">
                                <h3>Apakah anda Yakin ingin Menghapus data Ini?</h3>
                                <br>
                                <label class="form-label">Kode Pendaftaran : <?= $row->kode_pendaftaran?></label>
                                <br>
                                <label class="form-label">Nama Lengkap : <?= $row->nama_lengkap?></label>
                            </div>
                            <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Hapus</button>
                      </div>
                    </form>
                  </div>
                 @endforeach
              </tbody>
            </table>
          </div>
<!-- /.card-body -->
        </div>
<!-- /.card -->
      </div>
<!-- /.col -->
    </div>
<!-- /.row -->
  </section>
<!-- /.content -->
</div>
  
  @endsection