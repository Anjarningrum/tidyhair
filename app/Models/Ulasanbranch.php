<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasanbranch extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'customer_id',
        'rating',
        'komentar'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'branch_id');
    }
    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
