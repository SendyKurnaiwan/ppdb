<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\data_peserta;

class SiswaController extends Controller
{
    public function index()
    {
        return view('dashboard.data.siswa');
    }


public function simpan(Request $request)
    {
        $validatedData = $request->validate([
            'id_user' => 'required',
            'nama_lengkap_peserta' => 'required',
            'no_kk' => 'required',
            'nik' => 'required',
            'kompetensi_keahlian' => 'required',
            'jenis_pendaftaran' => 'required',
            'nisn' => 'required',
            'nama_prestasi' => 'required',
            'tingkat_prestasi' => 'required',
            'tahun_prestasi' => 'required',
            'penyelenggara' => 'required',
            'beasiswa' => 'required',
            'jenis_beasiswa' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'kode_pos' => 'required',
            'tranportasi' => 'required',
            'tempat_tinggal' => 'required',
            'anak_keberapa' => 'required',
            'golongan_darah' => 'required',
            'penyakit' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'jarak_tempat_tinggal' => 'required',
            'waktu_tempuh_ke_sekolah' => 'required',
            'jumlah_saudara_kandung' => 'required',
            'telpon_rumah' => 'required'
        
        ]);
        // Simpan data ke database
        data_peserta::create($validatedData);
    
        // Redirect atau tampilkan pesan sukses
        return redirect()->route('siswa')->with('siap', 'Data berhasil disimpan');
    }

}


