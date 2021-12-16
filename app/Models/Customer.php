<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'name',
        'email',
        'password',
        'alamat',
        'no_telepon',
        'photo'
    ];
    protected $hidden = [
        'password',
    ];
    public function orderbarang(){
        return $this->belongsToMany(Orderbarang::class, 'customer_orderbarang', 'customer_id', 'orderbarang_id');
    }
    public function orderjasa(){
        return $this->belongsToMany(Orderjasa::class, 'customer_orderjasa', 'customer_id', 'orderjasa_id');
    }
    public function transaksibarang(){
        return $this->hasMany(Transaksibarang::class);
    }
    public function transaksijasa(){
        return $this->hasMany(Transaksijasa::class);
    }
    public function pembatalanbarang(){
        return $this->hasMany(Pembatalanbarang::class);
    }
    public function pembatalanjasa(){
        return $this->hasMany(Pembatalanjasa::class);
    }
    public function pembayaranbarang(){
        return $this->hasMany(Pembayaranbarang::class);
    }
    public function pembayaranjasa(){
        return $this->hasMany(Pembayaranjasa::class);
    }
}
