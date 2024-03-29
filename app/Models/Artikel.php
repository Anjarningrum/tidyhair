<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'judul',
        'isi',
        'slug',
        'image',
    ];

    function user(){
        $this->belongsTo(User::class, 'admin_id');
    }
}
