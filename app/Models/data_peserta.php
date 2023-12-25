<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use illuminate\Database\Eloquent\Relations\BelongsTo;

class data_peserta extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function transaksi()
    {
        return $this->hasOne(transaksi::class, 'id_peserta');
    }
    public function orangtua()
    {
        return $this->hasOne(data_orangtua::class, 'id_peserta');
    }
    public function lengkap()
    {
        return $this->hasOne(data_lengkap::class, 'id_peserta');
    }


    protected $fillable = [
        'id_user',
        'nama_lengkap_peserta',
        'no_kk',
        'nik',
        'kompetensi_keahlian',
        'jenis_pendaftaran',
        'nisn',
        'nama_prestasi',
        'tingkat_prestasi',
        'tahun_prestasi',
        'penyelenggara',
        'beasiswa',
        'jenis_beasiswa',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'kewarganegaraan',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'kode_pos',
        'tempat_tinggal',
        'tranportasi',
        'anak_keberapa',
        'golongan_darah',
        'penyakit',
        'tinggi_badan',
        'berat_badan',
        'jarak_tempat_tinggal',
        'waktu_tempuh_ke_sekolah',
        'jumlah_saudara_kandung',
        'telpon_rumah'
    ];

    protected $guarded = ['id', 'id_user'];

}
