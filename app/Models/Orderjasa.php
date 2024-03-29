<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderjasa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_branch',
        'id_barber',
        'id_jasa',
        'total_harga',
        'qty',
        'alamat',
        'ongkir',
        'metode_pembayaran',
        'status'
    ];

    protected $casts = [
        'waktu_pesanan' => 'date:hh:mm',
    ];

    public function jasa(){
        return $this->belongsTo(Jasa::class, 'id_jasa');
    }
    public function customer(){
        return $this->belongsToMany(Customer::class, 'customer_orderjasa', 'orderjasa_id', 'customer_id' );
    }
    public function barber(){
        return $this->belongsTo(Barber::class, 'id_barber');
    }
    public function transaksijasa(){
        return $this->hasOne(Transaksijasa::class);
    }
    public function pembatalanjasa(){
        return $this->hasOne(Pembatalanjasa::class);
    }
    public function user(){
        return $this->belongsTo(User::class, 'id_branch');
    }
}
