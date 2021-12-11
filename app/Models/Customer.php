<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'alamat',
        'no_telepon',
        'photo'
    ];

    public function orderbarang(){
        return $this->belongsToMany(Orderbarang::class, 'customer_orderbarang', 'customer_id', 'orderbarang_id');
    }
}
