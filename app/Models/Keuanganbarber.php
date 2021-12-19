<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuanganbarber extends Model
{
    use HasFactory;

    protected $fillable = [
        'barber_id',
        'tanggal',
        'debet',
        'kredit',
        'saldo'
    ];

    public function barber(){
        return $this->belongsTo(Barber::class, 'barber_id');
    }
}
