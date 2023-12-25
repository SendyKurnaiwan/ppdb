<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class data_lengkap extends Model
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
    public function orangtua()
    {
        return $this->belongsTo(data_orangtua::class, 'id_orangtua');
    }
}
