@extends('admin.layout.main')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Lengkap</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item active">Data Lengkap</li>
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
              <th>Sumber Info</th>
              <th>Asal Sekolah</th>
              <th>Jenis Kelamin</th>
              <th>Nomor Hp</th>
              <th>Email</th>
              <th>Password</th>
              <th>Gelombang Pendaftaran</th>
              <th>Nama Lengkap</th>
              <th>No KK</th>
              <th>NIK</th>
              <th>Kompetensi Keahlian</th>
              <th>Jenis Pendaftaran</th>
              <th>NISN</th>
              <th>Nama Prestasi</th>
              <th>Tingkat Prestasi</th>
              <th>Tahun Prestasi</th>
              <th>Penyelenggara</th>
              <th>Beasiswa</th>
              <th>Jenis Beasiswa</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Agama</th>
              <th>Kewarganegaraan</th>
              <th>Alamat</th>
              <th>Kelurahan</th>
              <th>Kecamatan</th>
              <th>Kabupaten</th>
              <th>Kode Pos</th>
              <th>Tempat Tinggal</th>
              <th>Transportasi</th>
              <th>Anak Keberapa</th>
              <th>Golongan Darah</th>
              <th>Penyakit</th>
              <th>Tinggi Badan</th>
              <th>Berat Badan</th>
              <th>Jarak Tempat Tinggal</th>
              <th>Waktu Tempuh Ke Sekolah</th>
              <th>Jumlah Saudara Kandung</th>
              <th>Telepon Rumah</th>
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
          </tr>
      </thead>
      <tbody>
        <?php $no= 1; ?>
          @foreach ($data as $row)
          <tr>
              <th>{{ $no++}}</th>
              <td>{{$row->user->kode_pendaftaran}}</td>
              <td>{{$row->user->sumber_info}}</td>
              <td>{{$row->user->asal_sekolah}}</td>
              <td>{{$row->user->jenis_kelamin}}</td>
              <td>{{$row->user->nomor_hp}}</td>
              <td>{{$row->user->email}}</td>
              <td>{{$row->user->password}}</td>
              <td>{{$row->user->gelombang_pendaftaran}}</td>
              <td>{{$row->peserta->nama_lengkap_peserta}}</td>
              <td>{{$row->peserta->no_kk}}</td>
              <td>{{$row->peserta->nik}}</td>
              <td>{{$row->peserta->kompetensi_keahlian}}</td>
              <td>{{$row->peserta->jenis_pendaftaran}}</td>
              <td>{{$row->peserta->nisn}}</td>
              <td>{{$row->peserta->nama_prestasi}}</td>
              <td>{{$row->peserta->tingkat_prestasi}}</td>
              <td>{{$row->peserta->tahun_prestasi}}</td>
              <td>{{$row->peserta->penyelenggara}}</td>
              <td>{{$row->peserta->beasiswa}}</td>
              <td>{{$row->peserta->jenis_beasiswa}}</td>
              <td>{{$row->peserta->tempat_lahir}}</td>
              <td>{{$row->peserta->tanggal_lahir}}</td>
              <td>{{$row->peserta->agama}}</td>
              <td>{{$row->peserta->kewarganegaraan}}</td>
              <td>{{$row->peserta->alamat}}</td>
              <td>{{$row->peserta->kelurahan}}</td>
              <td>{{$row->peserta->kecamatan}}</td>
              <td>{{$row->peserta->kabupaten}}</td>
              <td>{{$row->peserta->kode_pos}}</td>
              <td>{{$row->peserta->tempat_tinggal}}</td>
              <td>{{$row->peserta->transportasi}}</td>
              <td>{{$row->peserta->anak_keberapa}}</td>
              <td>{{$row->peserta->golongan_darah}}</td>
              <td>{{$row->peserta->penyakit}}</td>
              <td>{{$row->peserta->tinggi_badan}}</td>
              <td>{{$row->peserta->berat_badan}}</td>
              <td>{{$row->peserta->jarak_tempat_tinggal}}</td>
              <td>{{$row->peserta->waktu_tempuh_ke_sekolah}}</td>
              <td>{{$row->peserta->jumlah_saudara_kandung}}</td>
              <td>{{$row->peserta->telpon_rumah}}</td>  
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
          </tr>
        </tbody>
      </table>
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