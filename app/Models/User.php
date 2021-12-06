<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'no_telepon',
        'alamat',
        'photo',
        'id_branch'
    ];
    //protected $guard_name = 'api';
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function barangs(){
        return $this->belongsToMany(Barang::class, 'barang_user', 'user_id', 'barang_id');
    }

    public function jasas(){
        return $this->belongsToMany(Jasa::class, 'jasa_user', 'user_id', 'jasa_id');
    }

    public function hairstyle(){
        return $this->hasMany(Hairstyle::class);
    }

    public function artikel(){
        return $this->hasMany(Artikel::class);
    }
}
