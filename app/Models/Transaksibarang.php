<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksibarang extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice',
        'customer_id',
        'branch_id',
        'orderbarang_id',
        'total_bayar',
        'metode_pembayaran',
    ];

    public function user(){
        return $this->belongsTo(Userr::class, 'branch_id');
    }
    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function orderbarang(){
        return $this->belongsTo(Orderbarang::class, 'orderbarang_id');
    }
}
