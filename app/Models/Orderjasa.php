<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderjasa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_jasa',
        'total_harga',
        'qty',
        'alamat',
        'ongkir',
        'metode_pembayaran',
        'status'
    ];

    public function jasa(){
        return $this->belongsTo(Jasa::class, 'id_jasa');
    }
    public function customer(){
        return $this->belongsToMany(Customer::class, 'customer_orderjasa', 'orderjasa_id', 'customer_id' );
    }
}
