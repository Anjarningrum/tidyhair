<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_branch',
        'name',
        'email',
        'password',
        'alamat',
        'no_telepon',
        'photo'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_branch');
    }
}
