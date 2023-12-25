<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasOne;

    
class User extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;

//     public function dataPeserta()
// {
//     return $this->hasOne(data_peserta::class, 'id_user');
// }
    
    public function peserta()
    {
        return $this->hasOne(data_peserta::class, 'id_user');
    }
    public function orangtua()
    {
        return $this->hasOne(data_orangtua::class, 'id_user');
    }
    public function lengkap()
    {
        return $this->hasOne(data_lengkap::class, 'id_user');
    }
    public function diskon()
    {
        return $this->hasOne(diskon::class, 'id_user');
    }
    public function transaksi()
    {
        return $this->hasOne(transaksi::class, 'id_user');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kode_pendaftaran',
        'sumber_info',
        'nama_lengkap',
        'asal_sekolah',
        'jenis_kelamin',
        'nomor_hp',
        'email',
        'password',
        'gelombang_pendaftaran',
        'is_admin'
    ];
    protected $guarded = ['id'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $guard = 'web';
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
