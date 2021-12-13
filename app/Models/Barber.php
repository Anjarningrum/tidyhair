<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Barber extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'id_branch',
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
    public function user(){
        return $this->belongsTo(User::class, 'id_branch');
    }
}
