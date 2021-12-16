<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaranjasa extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'barber_id',
        'transaksi_id',
        'branch_id',
        'metode_pembayaran',
        'status',
        'jumlah_pembayaran',
        'image',
    ];

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function transaksijasa(){
        return $this->belongsTo(Transaksijasa::class, 'transaksi_id');
    }
    public function barber(){
        return $this->belongsTo(Barber::class, 'barber_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'branch_id');
    }
}
