<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderbarang extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_branch',
        'id_barang',
        'total_harga',
        'qty',
        'alamat',
        'ongkir',
        'metode_pembayaran',
        'status'
    ];

    public function barang(){
        return $this->belongsTo(Barang::class, 'id_barang');
    }
    public function customer(){
        return $this->belongsToMany(Customer::class, 'customer_orderbarang', 'orderbarang_id', 'customer_id' );
    }
    public function transaksibarang(){
        return $this->hasOne(Transaksibarang::class);
    }
    public function user(){
        return $this->belongsTo(User::class, 'id_branch');
    }
}
