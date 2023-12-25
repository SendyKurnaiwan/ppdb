@extends('admin.layout.main')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Transaksi</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
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
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Bukti Transfer</th>
              <th scope="col">Bukti Diskon</th>
              <th scope="col">Jenis Diskon</th>
              <th scope="col">Jumlah Diskon</th>
              <th scope="col">Jumlah Membayar</th>
              <th scope="col">Total Membayar</th>
              <th scope="col">Jumlah Biaya</th>
              <th scope="col">Jumlah Sisa</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Aksi</th>
          </tr>
      </thead>
      <tbody>
        <?php $no= 1; ?>
          @foreach ($data as $row)
          <tr>
              <th>{{ $no++}}</th>
              <td>{{  $row->user->kode_pendaftaran }}</td>
              <td>{{$row->user->nama_lengkap}}</td>
              <td><img src="{{ asset('bukti_transfer/'.$row->bukti_transfer) }}" alt="" width="70px" height="80px"></td>
              <td><img src="{{ asset('bukti_diskon/'.$row->diskon->bukti_diskon) }}" alt="" width="70px" height="80px"></td>
              <td>{{$row->diskon->jenis_diskon}}</td>
              <td>{{$row->diskon->jumlah_diskon}}</td>
              <td>{{$row->jumlah_membayar}}</td>
              <td>{{$row->total_membayar}}</td>
              <td>{{$row->jumlah_biaya}}</td>
              <td>{{$row->jumlah_sisa}}</td>
              <td>{{$row->Keterangan}}</td>
              <td>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#EditTransaksi{{$row->id}}">
                  Edit
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#HapusTransaksi{{$row->id}}">
                  Hapus
                </button>
              </td>
          </tr>
  <div class="modal fade" id="EditTransaksi{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Transaksi </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/admin/transaksi/update/id={{ $row->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id"/>
            <div class="mb-3">
              @csrf
              <label class="form-label">Bukti Transfer</label>
              <input accept="image/*" type='file' name="bukti_transfer" id="imgInp" />
              <img id="blah" alt="your image" src="{{ asset('bukti_transfer/'.$row->bukti_transfer) }}" width="450px" />
              <label class="form-label">Jumlah Membayar</label>
              <input type="text" name="jumlah_membayar" class="form-control" placeholder="Isikan Jumlah Diskon Siswa" value="{{ $row->jumlah_membayar}}">
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
  </div>
  <div class="modal fade" id="HapusTransaksi{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Data Transaksi </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/admin/transaksi/hapus/id={{ $row->id}}" method="POST" enctype="multipart/form-data">
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
  <!-- Modal -->
  <script>
    imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
  </script>
  
  @endsection