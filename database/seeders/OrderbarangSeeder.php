<?php

namespace Database\Seeders;

use App\Models\Orderbarang;
use Illuminate\Database\Seeder;

class OrderbarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Orderbarang::create([
            'id_barang' => '9',
            'total_harga' => '50000',
            'qty' => '1',
            'alamat' => 'surabaya',
            'ongkir' => '0',
            'metode_pembayaran' => 'cash',
            'status' => 'active'
        ]);    
    }
}
