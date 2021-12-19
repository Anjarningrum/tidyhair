<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Malhal\Geographical\Geographical;

class Barber extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, Geographical;

    protected $fillable = [
        'id_branch',
        'name',
        'email',
        'password',
        'alamat',
        'no_telepon',
        'photo',
        'longitude',
        'latitude'
    ];
    protected $hidden = [
        'password',
    ];
    public function user(){
        return $this->belongsTo(User::class, 'id_branch');
    }
    public function orderjasa(){
        return $this->hasMany(Orderjasa::class);
    }
    public function transaksijasa(){
        return $this->hasMany(Transaksijasa::class);
    }
    public function pembatalanjasa(){
        return $this->hasMany(Pembatalanjasa::class);
    }
    public function pembayaranjasa(){
        return $this->hasMany(Pembayaranjasa::class);
    }
    public function keuangan(){
        return $this->hasMany(Keuanganbarber::class);
    }
}
