@extends('admin.layout.main')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Peserta</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item active">Data Peserta</li>
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
            <div class="mb-3">
            <label class="form-check-label">
            </label>
          </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form id="myForm" method="POST">
              @csrf
              <!-- Other form fields go here -->
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#multidelPeserta">
                Hapus
              </button>
              <button type="button" onclick="Edit()">Edit</button>
            <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr align="left">
            <th>Select</th>
            <th>No</th>
            <th>Kode Pendaftaran</th>
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
            <th>Aksi</th>
          </tr>
      </thead>
      <tbody>
        <?php $no= 1; ?>
          @foreach ($data as $row)
          <td><input type="checkbox" name="id[{{ $row->id }}]" value="{{ $row->id }}"></td>
        </form>
          <th>{{ $no++}}</th>
          <td>{{  $row->user->kode_pendaftaran }}</td>
          <td>{{$row->nama_lengkap_peserta}}</td>
          <td>{{$row->no_kk}}</td>
          <td>{{$row->nik}}</td>
          <td>{{$row->kompetensi_keahlian}}</td>
          <td>{{$row->jenis_pendaftaran}}</td>
          <td>{{$row->nisn}}</td>
          <td>{{$row->nama_prestasi}}</td>
          <td>{{$row->tingkat_prestasi}}</td>
          <td>{{$row->tahun_prestasi}}</td>
          <td>{{$row->penyelenggara}}</td>
          <td>{{$row->beasiswa}}</td>
          <td>{{$row->jenis_beasiswa}}</td>
          <td>{{$row->tempat_lahir}}</td>
          <td>{{$row->tanggal_lahir}}</td>
          <td>{{$row->agama}}</td>
          <td>{{$row->kewarganegaraan}}</td>
          <td>{{$row->alamat}}</td>
          <td>{{$row->kelurahan}}</td>
          <td>{{$row->kecamatan}}</td>
          <td>{{$row->kabupaten}}</td>
          <td>{{$row->kode_pos}}</td>
          <td>{{$row->tempat_tinggal}}</td>
          <td>{{$row->tranportasi}}</td>
          <td>{{$row->anak_keberapa}}</td>
          <td>{{$row->golongan_darah}}</td>
          <td>{{$row->penyakit}}</td>
          <td>{{$row->tinggi_badan}}</td>
          <td>{{$row->berat_badan}}</td>
          <td>{{$row->jarak_tempat_tinggal}}</td>
          <td>{{$row->waktu_tempuh_ke_sekolah}}</td>
          <td>{{$row->jumlah_saudara_kandung}}</td>
          <td>{{$row->telpon_rumah}}</td>
            <th>
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#EditPeserta{{$row->id}}">
                Edit
              </button>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#HapusPeserta{{$row->id}}">
                Hapus
              </button>
            </th>
          </tr>
                <div class="modal fade" id="EditPeserta{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Peserta </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="/admin/data_peserta/update/id={{$row->id}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                              <label class="form-label">Nama Lengkap</label>
                              <input type="text" name="nama_lengkap_peserta" class="form-control" placeholder="Isikan Nama Anda" value="{{ $row->nama_lengkap_peserta}}">
                              <label class="form-label">No KK</label>
                              <input type="text" name="no_kk" class="form-control" placeholder="Isikan No KK Anda" value="{{ $row->no_kk}}">
                              <label class="form-label">NIK</label>
                              <input type="text" name="nik" class="form-control" placeholder="Isikan NIK Anda" value="{{ $row->nik}}">
                              <label class="form-label">Kompetensi Keahlian</label>
                              <select name="kompetensi_keahlian" class="form-control">
                                <option value="Rekayasa Perangkat Lunak" {{ $row->kompetensi_keahlian == 'Rekayasa Perangkat Lunak' ? 'selected' : '' }}>Rekayasa Perangkat Lunak</option>
                                <option value="Tehnik Komputer dan jaringan" {{ $row->kompetensi_keahlian == 'Tehnik Komputer dan jaringan' ? 'selected' : '' }}>Tehnik Komputer dan Jaringan</option>
                                <option value="Multimedia" {{ $row->kompetensi_keahlian == 'Multimedia' ? 'selected' : '' }}>Multimedia</option>
                                <option value="Akuntansi" {{ $row->kompetensi_keahlian == 'Akuntansi' ? 'selected' : '' }}>Akuntansi</option>
                                <option value="Perhotelan" {{ $row->kompetensi_keahlian == 'Perhotelan' ? 'selected' : '' }}>Perhotelan</option>
                              </select>                    
                              <label class="form-label">Jenis Pendaftaran</label>
                              <select name="jenis_pendaftaran" class="form-control">
                                <option value="Siswa Baru" {{ $row->jenis_pendaftaran == 'Siswa Baru' ? 'selected' : '' }}>Siswa Baru</option>
                                <option value="Pindahan" {{ $row->jenis_pendaftaran == 'Pindahan' ? 'selected' : '' }}>Pindahan</option>
                                <option value="Kembali Sekolah" {{ $row->jenis_pendaftaran == 'Kembali Sekolah' ? 'selected' : '' }}>Kembali Bersekolah</option>
                              </select>                    
                              <label class="form-label">NISN</label>
                              <input type="text" name="nisn" class="form-control" placeholder="Isikan Asal Sekolah Anda" value="{{ $row->nisn}}">
                              <label class="form-label">Nama Prestasi</label>
                              <input type="text" name="nama_prestasi" class="form-control" placeholder="Isikan Nama Prestasi Anda" value="{{ $row->nama_prestasi}}">
                              <label class="form-label">Tingkat Prestasi</label>
                              <input type="text" name="tingkat_prestasi" class="form-control" placeholder="Isikan Tingkat Prestasi Anda" value="{{ $row->tingkat_prestasi}}">
                              <label class="form-label">Tahun Prestasi</label>
                              <input type="text" name="tahun_prestasi" class="form-control" placeholder="Isikan Tahun Prestasi Anda" value="{{ $row->tahun_prestasi}}">
                              <label class="form-label">Penyelenggara</label>
                              <input type="text" name="penyelenggara" class="form-control" placeholder="Isikan Penyelenggara Anda" value="{{ $row->penyelenggara}}">
                              <label class="form-label">Beasiswa</label>
                              <select name="beasiswa" class="form-control">
                                <option value="Tidak Dapat" {{ $row->beasiswa == 'Tidak Dapat' ? 'selected' : '' }}>Tidak Dapat</option>
                                <option value="Dapat" {{ $row->beasiswa == 'Dapat' ? 'selected' : '' }}>Dapat</option>
                              </select>                    
                              <label class="form-label">Jenis Beasiswa</label>
                              <input type="text" name="jenis_beasiswa" class="form-control" placeholder="Isikan Jenis Beasiswa Anda" value="{{ $row->jenis_beasiswa}}">
                              <label class="form-label">Tempat Lahir</label>
                              <input type="text" name="Tempat Lahir" class="form-control" placeholder="Isikan Tempat Lahir Anda" value="{{ $row->tempat_lahir}}">
                              <label class="form-label">Tanggal Lahir</label>
                              <input type="text" name="tanggal_lahir" class="form-control" placeholder="Isikan Tanggal Lahir Anda" value="{{ $row->tanggal_lahir}}">
                              <label class="form-label">Agama</label>
                              <select name="agama" class="form-control">
                                <option value="Islam" {{ $row->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ $row->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Protestan" {{ $row->agama == 'Protestan' ? 'selected' : '' }}>Protestan</option>
                                <option value="Katolik" {{ $row->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                <option value="Hindu" {{ $row->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Buddha" {{ $row->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                <option value="Konghucu" {{ $row->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                            </select>
                            
                              <label class="form-label">Kewarganegaraan</label>
                              <select name="kewarganegaraan" class="form-control">
                                  <option value="Indonesia (WNI)" {{ $row->kewarganegaraan == 'Indonesia (WNI)' ? 'selected' : '' }}>Indonesia (WNI)</option>
                                  <option value="Asing (WNA)" {{ $row->kewarganegaraan == 'Asing (WNA)' ? 'selected' : '' }}>Asing (WNA)</option>
                              </select>
                              <label class="form-label">Alamat</label>
                              <input type="text" name="alamat" class="form-control" placeholder="Isikan Alamat Anda" value="{{ $row->alamat}}">
                              <label class="form-label">Kelurahan</label>
                              <input type="text" name="kelurahan" class="form-control" placeholder="Isikan Kelurahan Anda" value="{{ $row->kelurahan}}">
                              <label class="form-label">Kecamatan</label>
                              <input type="text" name="kecamatan" class="form-control" placeholder="Isikan Kecamatan Anda" value="{{ $row->kecamatan}}">
                              <label class="form-label">Kabupaten</label>
                              <input type="text" name="kabupaten" class="form-control" placeholder="Isikan Kabupaten Anda" value="{{ $row->kabupaten}}">
                              <label class="form-label">Kode Pos</label>
                              <input type="text" name="kode_pos" class="form-control" placeholder="Isikan Kode Pos Anda" value="{{ $row->kode_pos}}">
                              <label class="form-label">Tempat Tinggal</label>
                              <select name="tempat_tinggal" class="form-control">
                                  <option value="Bersama Orang Tua" {{ $row->tempat_tinggal == 'Bersama Orang Tua' ? 'selected' : '' }}>Bersama Orang Tua</option>
                                  <option value="Bersama Wali" {{ $row->tempat_tinggal == 'Bersama Wali' ? 'selected' : '' }}>Bersama Wali</option>
                                  <option value="Kos" {{ $row->tempat_tinggal == 'Kos' ? 'selected' : '' }}>Kos</option>
                                  <option value="Asrama" {{ $row->tempat_tinggal == 'Asrama' ? 'selected' : '' }}>Asrama</option>
                                  <option value="Panti Asuhan" {{ $row->tempat_tinggal == 'Panti Asuhan' ? 'selected' : '' }}>Panti Asuhan</option>
                              </select>
                              <label class="form-label">Transportasi</label>
                              <select name="tranportasi" class="form-control">
                                  <option value="Jalan Kaki" {{ $row->tranportasi == 'Jalan Kaki' ? 'selected' : '' }}>Jalan Kaki</option>
                                  <option value="Kendaraan Pribadi" {{ $row->tranportasi == 'Kendaraan Pribadi' ? 'selected' : '' }}>Kendaraan Pribadi</option>
                                  <option value="Kendaraan Umum" {{ $row->tranportasi == 'Kendaraan Umum' ? 'selected' : '' }}>Kendaraan Umum</option>
                                  <option value="Jemputan Sekolah" {{ $row->tranportasi == 'Jemputan Sekolah' ? 'selected' : '' }}>Jemputan Sekolah</option>
                                  <option value="Kereta Api" {{ $row->tranportasi == 'Kereta Api' ? 'selected' : '' }}>Kereta Api</option>
                                  <option value="Ojek" {{ $row->tranportasi == 'Ojek' ? 'selected' : '' }}>Ojek</option>
                              </select>

                              <label class="form-label">Anak Keberapa</label>
                              <input type="text" name="anak_keberapa" class="form-control" placeholder="Isikan Anak Keberapa Anda" value="{{ $row->anak_keberapa}}">
                              <label class="form-label">Golongan Darah</label>
                              <input type="text" name="golongan_darah" class="form-control" placeholder="Isikan Golongan Darah Anda" value="{{ $row->golongan_darah}}">
                              <label class="form-label">Penyakit</label>
                              <input type="text" name="penyakit" class="form-control" placeholder="Isikan Penyakit Anda" value="{{ $row->penyakit}}">
                              <label class="form-label">Tinggi Badan</label>
                              <input type="text" name="tinggi_badan" class="form-control" placeholder="Isikan Tinggi Badan Anda" value="{{ $row->tinggi_badan}}">
                              <label class="form-label">Berat Badan</label>
                              <input type="text" name="berat_badan" class="form-control" placeholder="Isikan Berat Badan Anda" value="{{ $row->berat_badan}}">
                              <label class="form-label">Jarak Tempat Tinggal</label>
                              <select name="jarak_tempat_tinggal" class="form-control">
                                  <option value="Kurang Dari 1km" {{ $row->jarak_tempat_tinggal == 'Kurang Dari 1km' ? 'selected' : '' }}>Kurang Dari 1km</option>
                                  <option value="Lebih Dari 1km" {{ $row->jarak_tempat_tinggal == 'Lebih Dari 1km' ? 'selected' : '' }}>Lebih Dari 1km</option>
                              </select>
                              <label class="form-label">Waktu Tempuh Ke Sekolah</label>
                              <input type="text" name="waktu_tempuh_ke_sekolah" class="form-control" placeholder="Isikan Waktu Tempuh Anda Ke Sekolah" value="{{ $row->waktu_tempuh_ke_sekolah}}">
                              <label class="form-label">Jumlah Saudara Kandung</label>
                              <input type="text" name="jumlah_saudara_kandung" class="form-control" placeholder="Isikan Jumlah Saudara Kandung Anda" value="{{ $row->jumlah_saudara_kandung}}">
                              <label class="form-label">Telpon Rumah</label>
                              <input type="text" name="telpon_rumah" class="form-control" placeholder="Isikan Telpon Rumah Anda" value="{{ $row->telpon_rumah}}">



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
                
                <div class="modal fade" id="HapusPeserta{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Peserta </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form action="/admin/data_peserta/hapus/id={{ $row->id}}" method="GET" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id"/>
                            <div class="mb-3">
                              <h3>Apakah anda Yakin ingin Menghapus data Ini?</h3>
                              <br>
                              <label class="form-label">Kode Pendaftaran : {{ $row->user->kode_pendaftaran }}</label>
                              <br>
                              <label class="form-label">Nama Lengkap : {{ $row->user->nama_lengkap}}</label>
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
  function Delete() {
      var form = document.getElementById('myForm');
      
      // Submit to the first URL
      form.action = '/admin/data_peserta/multidel';
      form.submit();
      
  }
  function Edit(){
    var form = document.getElementById('myForm');
      
      // Submit to the first URL
      form.action = '/admin/data_peserta/multiedit';
      form.submit();
  }
</script>

@endsection