<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaranbarang extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
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
    public function transaksibarang(){
        return $this->belongsTo(Transaksibarang::class, 'transaksi_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'branch_id');
    }
}
