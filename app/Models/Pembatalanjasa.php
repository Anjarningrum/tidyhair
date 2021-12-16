<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembatalanjasa extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice',
        'customer_id',
        'branch_id',
        'barber_id',
        'orderjasa_id',
        'total_bayar',
        'metode_pembayaran',
    ];

    public function user(){
        return $this->belongsTo(Userr::class, 'branch_id');
    }
    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function barber(){
        return $this->belongsTo(Barber::class, 'barber_id');
    }
    public function orderjasa(){
        return $this->belongsTo(Orderjasa::class, 'orderjasa_id');
    }
}
