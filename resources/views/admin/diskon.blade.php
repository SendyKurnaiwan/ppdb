@extends('admin.layout.main')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Diskon</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin/diskon">Diskon</a></li>
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
          <tr align="left">
              <th scope="col">No</th>
              <th scope="col">Kode Pendaftaran</th>
              <th scope="col">Email</th>
              <th scope="col">Bukti Diskon</th>
              <th scope="col">Jenis Diskon</th>
              <th scope="col">Jumlah Diskon</th>
              <th scope="col">Aksi</th>
          </tr>
      </thead>
      <tbody>
        <?php $no= 1; ?>
          @foreach ($data as $row)
          <tr>
              <th>{{ $no++}}</th>
              <td>{{  $row->user->kode_pendaftaran }}</td>
              <td>{{$row->user->email}}</td>
              <td><img src="{{ asset('bukti_diskon/'.$row->bukti_diskon) }}" alt="" width="70px" height="80px"></td>
              <td>{{$row->jenis_diskon}}</td>
              <td>{{$row->jumlah_diskon}}</td>
              <td>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#EditDiskon{{$row->id}}">
                  Edit
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#HapusDiskon{{$row->id}}">
                  Hapus
                </button>
              </td>
          </tr>
  <div class="modal fade" id="EditDiskon{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Diskon </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/admin/diskon/update/id={{ $row->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id"/>
            <div class="mb-3">
              @csrf
                <label class="form-label">Bukti Diskon</label>
                <input accept="image/*" type='file' name="bukti_diskon" id="imgInp" />
                <img id="blah" alt="your image" src="{{ asset('bukti_diskon/'.$row->bukti_diskon) }}" width="450px" />
                <label class="form-label">Jenis Diskon</label>
                <select name="jenis_diskon" class="form-control">
                  <option value="{{ $row->jenis_diskon}}" selected>{{ $row->jenis_diskon}}</option>
                  <option value="Tidak Punya">Tidak Punya</option>
                  <option value="STC">STC (Rp.800.000)</option>
                  <option value="Juara Umum">Juara Umum Dari Kelas 1 Sampai Kelas 3 Dan Seringkat 1 Sampai 3 (Rp.1.200.000)</option>
                  <option value="Juara Kelas">Juara Kelas Dari Kelas 1 Sampai Kelas 3 Dan Seringkat 1 Sampai 3 (Rp.800.000)</option>
                  <option value="Daerah Kuta Selatan">Daerah Kuta Selatan (Rp.1.000.000)</option>
                </select>
                <label class="form-label">Jumlah Diskon</label>
                <input type="text" name="jumlah_diskon" class="form-control" placeholder="Isikan Jumlah Diskon Siswa" value="{{ $row->jumlah_diskon}}">
                
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
  <div class="modal fade" id="HapusDiskon{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Data Diskon </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/admin/diskon/hapus/id={{ $row->id}}" method="GET" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id"/>
              <div class="mb-3">
                <h3>Apakah anda Yakin ingin Menghapus data Ini?</h3>
                <br>
                <label class="form-label">Kode Pendaftaran : <?= $row->user->kode_pendaftaran?></label>
                <br>
                <label class="form-label">Nama Lengkap : <?= $row->user->nama_lengkap?></label>
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
<script>
  imgInp.onchange = evt => {
const [file] = imgInp.files
if (file) {
  blah.src = URL.createObjectURL(file)
}
}
</script>
  @endsection