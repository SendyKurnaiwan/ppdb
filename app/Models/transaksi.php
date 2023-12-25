<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class transaksi extends Model
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
    public function diskon()
    {
        return $this->belongsTo(diskon::class, 'id_diskon');
    }
    protected $fillable = [
        'id_user',
        'id_peserta',
        'id_diskon',
        'bukti_transfer',
        'jumlah_membayar',
        'total_membayar',
        'jumlah_biaya',
        'jumlah_sisa',
        'keterangan',
    ];
}
