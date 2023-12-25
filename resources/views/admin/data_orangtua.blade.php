@extends('admin.layout.main')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Orang Tua</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item active">Data Orang Tua</li>
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
              <th>No</th>
              <th>Kode Pendaftaran</th>
              <th>Nama Ayah</th>
              <th>Telepon Ayah</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Pendidikan Ayah</th>
              <th>Pekerjaan Ayah</th>
              <th>Penghasilan Ayah</th>
              <th>Nama Ibu</th>
              <th>Telepon Ibu</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Pendidikan Ibu</th>
              <th>Pekerjaan Ibu</th>
              <th>Penghasilan Ibu</th>
              <th>Aksi</th>
          </tr>
      </thead>
      <tbody>
        <?php $no= 1; ?>
          @foreach ($data as $row)
          <tr>
              <th>{{ $no++}}</th>
              <td>{{  $row->user->kode_pendaftaran }}</td>
              <td>{{$row->nama_ayah}}</td>
              <td>{{$row->telepon_ayah}}</td>
              <td>{{$row->tempat_lahir_ayah}}</td>
              <td>{{$row->tanggal_lahir_ayah}}</td>
              <td>{{$row->tanggal_lahir_ibu}}</td>
              <td>{{$row->pendidikan_ayah}}</td>
              <td>{{$row->pekerjaan_ayah}}</td>
              <td>{{$row->penghasilan_ayah}}</td>
              <td>{{$row->nama_ibu}}</td>
              <td>{{$row->telepon_ibu}}</td>
              <td>{{$row->tempat_lahir_ibu}}</td>
              <td>{{$row->pendidikan_ibu}}</td>
              <td>{{$row->pekerjaan_ibu}}</td>
              <td>{{$row->penghasilan_ibu}}</td>
              <td>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#EditOrangtua{{$row->id}}">
                  Edit
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#HapusOrangtua{{$row->id}}">
                  Hapus
                </button>
              </td>
          </tr>
  <div class="modal fade" id="EditOrangtua{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Orang Tua </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/admin/data_orangtua/update/id={{ $row->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id"/>
            <div class="mb-3">
              <label class="form-label">Nama Ayah</label>
              <input type="text" name="nama_ayah" class="form-control" placeholder="Isikan Nama Ayah Anda" value="{{ $row->nama_ayah}}">
              <label class="form-label">Telepon Ayah</label>
              <input type="text" name="telepon_ayah" class="form-control" placeholder="Isikan Telepon Ayah Anda" value="{{ $row->telepon_ayah}}">
              <label class="form-label">Tempat Lahir Ayah</label>
              <input type="text" name="tempat_lahir_ayah" class="form-control" placeholder="Isikan Tempat Lahir Ayah Anda" value="{{ $row->tempat_lahir_ayah}}">
              <label class="form-label">Pendidikan Ayah</label>
              <select name="pendidikan_ayah" class="form-control">
                <option value="SD" {{ $row->pendidikan_ayah === 'SD' ? 'selected' : '' }}>SD</option>
                <option value="SMP" {{ $row->pendidikan_ayah === 'SMP' ? 'selected' : '' }}>SMP</option>
                <option value="SMA" {{ $row->pendidikan_ayah === 'SMA' ? 'selected' : '' }}>SMA</option>
                <option value="D3" {{ $row->pendidikan_ayah === 'D3' ? 'selected' : '' }}>D3</option>
                <option value="S1" {{ $row->pendidikan_ayah === 'S1' ? 'selected' : '' }}>S1</option>
                <option value="S2" {{ $row->pendidikan_ayah === 'S2' ? 'selected' : '' }}>S2</option>
                <option value="S3" {{ $row->pendidikan_ayah === 'S3' ? 'selected' : '' }}>S3</option>
               </select>            
              <label class="form-label">Pekerjaan Ayah</label>
              <select name="pekerjaan_ayah" class="form-control">
                <option value="Tidak Bekerja" {{ $row->pekerjaan_ayah === 'Tidak Bekerja' ? 'selected' : '' }}>Tidak Bekerja</option>
                <option value="Nelayan" {{ $row->pekerjaan_ayah === 'Nelayan' ? 'selected' : '' }}>Nelayan</option>
                <option value="Petani" {{ $row->pekerjaan_ayah === 'Petani' ? 'selected' : '' }}>Petani</option>
                <option value="PNS/TNI/POLRI" {{ $row->pekerjaan_ayah === 'PNS/TNI/POLRI' ? 'selected' : '' }}>PNS/TNI/POLRI</option>
                <option value="Karyawan Swasta" {{ $row->pekerjaan_ayah === 'Karyawan Swasta' ? 'selected' : '' }}>Karyawan Swasta</option>
                <option value="Pedagang Kecil" {{ $row->pekerjaan_ayah === 'Pedagang Kecil' ? 'selected' : '' }}>Pedagang Kecil</option>
                <option value="Pedagang Besar" {{ $row->pekerjaan_ayah === 'Pedagang Besar' ? 'selected' : '' }}>Pedagang Besar</option>
                <option value="Wiraswasta" {{ $row->pekerjaan_ayah === 'Wiraswasta' ? 'selected' : '' }}>Wiraswasta</option>
                <option value="Wirausaha" {{ $row->pekerjaan_ayah === 'Wirausaha' ? 'selected' : '' }}>Wirausaha</option>
                <option value="Buruh" {{ $row->pekerjaan_ayah === 'Buruh' ? 'selected' : '' }}>Buruh</option>
                <option value="Pensiun" {{ $row->pekerjaan_ayah === 'Pensiun' ? 'selected' : '' }}>Pensiun</option>
                <option value="Lainnya" {{ $row->pekerjaan_ayah === 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
              </select>            
              <label class="form-label">Penghasilan Ayah</label>
              <select name="penghasilan_ayah" class="form-control">
                <option value="Kurang 500.000" {{ $row->penghasilan_ayah === 'Kurang 500.000' ? 'selected' : '' }}>Kurang 500.000</option>
                <option value="500.000 - 999.999" {{ $row->penghasilan_ayah === '500.000 - 999.999' ? 'selected' : '' }}>500.000 - 999.999</option>
                <option value="1.000.000 - 1.999.999" {{ $row->penghasilan_ayah === '1.000.000 - 1.999.999' ? 'selected' : '' }}>1.000.000 - 1.999.999</option>
                <option value="2.000.000 - 4.999.999" {{ $row->penghasilan_ayah === '2.000.000 - 4.999.999' ? 'selected' : '' }}>2.000.000 - 4.999.999</option>
                <option value="5.000.000 - 20.000.000" {{ $row->penghasilan_ayah === '5.000.000 - 20.000.000' ? 'selected' : '' }}>5.000.000 - 20.000.000</option>
                <option value="Lebih 20.000.000" {{ $row->penghasilan_ayah === 'Lebih 20.000.000' ? 'selected' : '' }}>Lebih 20.000.000</option>
              </select>            
              <label class="form-label">Nama Ibu</label>
              <input type="text" name="nama_ibu" class="form-control" placeholder="Isikan Nama Ibu Anda" value="{{ $row->nama_ibu}}">
              <label class="form-label">Telepon Ibu</label>
              <input type="text" name="telepon_ibu" class="form-control" placeholder="Isikan Telepon Ibu Anda" value="{{ $row->telepon_ibu}}">
              <label class="form-label">Tempat Lahir ibu</label>
              <input type="text" name="tempat_lahir_ibu" class="form-control" placeholder="Isikan Tempat Lahir ibu Anda" value="{{ $row->tempat_lahir_ibu}}">
              <label class="form-label">Pendidikan Ibu</label>
              <select name="pendidikan_ibu" class="form-control">
                <option value="SD" {{ $row->pendidikan_ibu === 'SD' ? 'selected' : '' }}>SD</option>
                <option value="SMP" {{ $row->pendidikan_ibu === 'SMP' ? 'selected' : '' }}>SMP</option>
                <option value="SMA" {{ $row->pendidikan_ibu === 'SMA' ? 'selected' : '' }}>SMA</option>
                <option value="D3" {{ $row->pendidikan_ibu === 'D3' ? 'selected' : '' }}>D3</option>
                <option value="S1" {{ $row->pendidikan_ibu === 'S1' ? 'selected' : '' }}>S1</option>
                <option value="S2" {{ $row->pendidikan_ibu === 'S2' ? 'selected' : '' }}>S2</option>
                <option value="S3" {{ $row->pendidikan_ibu === 'S3' ? 'selected' : '' }}>S3</option>
              </select>            
              <label class="form-label">Pekerjaan Ibu</label>
              <select name="pekerjaan_ibu" class="form-control">
                <option value="Tidak Bekerja" {{ $row->pekerjaan_ibu === 'Tidak Bekerja' ? 'selected' : '' }}>Tidak Bekerja</option>
                <option value="Nelayan" {{ $row->pekerjaan_ibu === 'Nelayan' ? 'selected' : '' }}>Nelayan</option>
                <option value="Petani" {{ $row->pekerjaan_ibu === 'Petani' ? 'selected' : '' }}>Petani</option>
                <option value="PNS/TNI/POLRI" {{ $row->pekerjaan_ibu === 'PNS/TNI/POLRI' ? 'selected' : '' }}>PNS/TNI/POLRI</option>
                <option value="Karyawan Swasta" {{ $row->pekerjaan_ibu === 'Karyawan Swasta' ? 'selected' : '' }}>Karyawan Swasta</option>
                <option value="Pedagang Kecil" {{ $row->pekerjaan_ibu === 'Pedagang Kecil' ? 'selected' : '' }}>Pedagang Kecil</option>
                <option value="Pedagang Besar" {{ $row->pekerjaan_ibu === 'Pedagang Besar' ? 'selected' : '' }}>Pedagang Besar</option>
                <option value="Wiraswasta" {{ $row->pekerjaan_ibu === 'Wiraswasta' ? 'selected' : '' }}>Wiraswasta</option>
                <option value="Wirausaha" {{ $row->pekerjaan_ibu === 'Wirausaha' ? 'selected' : '' }}>Wirausaha</option>
                <option value="Buruh" {{ $row->pekerjaan_ibu === 'Buruh' ? 'selected' : '' }}>Buruh</option>
                <option value="Pensiun" {{ $row->pekerjaan_ibu === 'Pensiun' ? 'selected' : '' }}>Pensiun</option>
                <option value="Lainnya" {{ $row->pekerjaan_ibu === 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
              </select>            
              <label class="form-label">Penghasilan Ibu</label>
              <select name="penghasilan_ibu" class="form-control">
                <option value="Kurang 500.000" {{ $row->penghasilan_ibu === 'Kurang 500.000' ? 'selected' : '' }}>Kurang 500.000</option>
                <option value="500.000 - 999.999" {{ $row->penghasilan_ibu === '500.000 - 999.999' ? 'selected' : '' }}>500.000 - 999.999</option>
                <option value="1.000.000 - 1.999.999" {{ $row->penghasilan_ibu === '1.000.000 - 1.999.999' ? 'selected' : '' }}>1.000.000 - 1.999.999</option>
                <option value="2.000.000 - 4.999.999" {{ $row->penghasilan_ibu === '2.000.000 - 4.999.999' ? 'selected' : '' }}>2.000.000 - 4.999.999</option>
                <option value="5.000.000 - 20.000.000" {{ $row->penghasilan_ibu === '5.000.000 - 20.000.000' ? 'selected' : '' }}>5.000.000 - 20.000.000</option>
                <option value="Lebih 20.000.000" {{ $row->penghasilan_ibu === 'Lebih 20.000.000' ? 'selected' : '' }}>Lebih 20.000.000</option>
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
  <div class="modal fade" id="HapusOrangtua{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Data Orang Tua </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/admin/data_orangtua/hapus/id={{ $row->id}}" method="GET" enctype="multipart/form-data">
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

@endsection