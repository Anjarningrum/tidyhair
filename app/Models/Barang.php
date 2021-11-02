<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'harga',
        'image',
        'stok',
        'diskon',
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'barang_user', 'barang_id', 'user_id');
    }
}
