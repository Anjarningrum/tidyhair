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
}
