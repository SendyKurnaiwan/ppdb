<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
class data_orangtua extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function peserta()
    {
        return $this->belongsTo(data_peserta::class, 'id_peserta');
    }
    public function lengkap()
    {
        return $this->hasOne(data_lengkap::class, 'id_orangtua');
    }

    protected $fillable = [
        'id_user',
        'id_peserta',
        'nama_ayah',
        'telepon_ayah',
        'tempat_lahir_ayah',
        'tanggal_lahir_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'nama_ibu',
        'telepon_ibu',
        'tempat_lahir_ibu',
        'tanggal_lahir_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
    ];

    protected $dates = ['tanggal_lahir_ayah', 'tanggal_lahir_ibu']; // specify date fields
}

