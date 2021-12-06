<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hairstyle extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'nama',
        'deskripsi',
        'image',
        'status',
    ];

    function user(){
        $this->belongsTo(User::class, 'admin_id');
    }
}
