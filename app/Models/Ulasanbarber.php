<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasanbarber extends Model
{
    use HasFactory;

    protected $fillable = [
            'barber_id',
            'customer_id',
            'rating',
            'komentar'
    ];

    public function barber(){
        return $this->belongsTo(Barber::class, 'barber_id');
    }
    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
