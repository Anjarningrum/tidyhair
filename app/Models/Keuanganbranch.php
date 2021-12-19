<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuanganbranch extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'tanggal',
        'debet',
        'kredit',
        'saldo'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'branch_id');
    }
}
