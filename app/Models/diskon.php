<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class diskon extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function transaksi()
    {
        return $this->hasOne(transaksi::class, 'id_diskon');
    }
    protected $fillable = [
        'id_user',
        'bukti_diskon',
        'jenis_diskon',
        'jumlah_diskon',
    ];
}
