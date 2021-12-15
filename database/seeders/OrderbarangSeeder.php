<?php

namespace Database\Seeders;

use App\Models\Orderbarang;
use App\Models\Orderjasa;
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
        $ob = Orderbarang::create([
            'id_barang' => '2',
            'id_branch' => '2',
            'total_harga' => '30000',
            'qty' => '1',
            'alamat' => 'surabaya',
            'ongkir' => '0',
            'metode_pembayaran' => 'cash',
            'status' => 'active'
        ]);   
        $ob->customer()->attach(1);
        
        $ob = Orderbarang::create([
            'id_barang' => '4',
            'id_branch' => '2',
            'total_harga' => '25000',
            'qty' => '1',
            'alamat' => 'surabaya',
            'ongkir' => '0',
            'metode_pembayaran' => 'cash',
            'status' => 'active'
        ]);   
        $ob->customer()->attach(2);

        $ob = Orderbarang::create([
            'id_barang' => '2',
            'id_branch' => '2',
            'total_harga' => '30000',
            'qty' => '1',
            'alamat' => 'surabaya',
            'ongkir' => '0',
            'metode_pembayaran' => 'cash',
            'status' => 'active'
        ]);   
        $ob->customer()->attach(3);

        $oj = Orderjasa::create([
            'id_jasa' => '1',
            'id_branch' => '2',
            'id_barber' => '2',
            'total_harga' => '10000',
            'qty' => '1',
            'alamat' => 'surabaya',
            'ongkir' => '0',
            'metode_pembayaran' => 'cash',
            'status' => 'active'
        ]);   
        $oj->customer()->attach(2);

        $oj = Orderjasa::create([
            'id_jasa' => '1',
            'id_branch' => '2',
            'id_barber' => '3',
            'total_harga' => '10000',
            'qty' => '1',
            'alamat' => 'surabaya',
            'ongkir' => '0',
            'metode_pembayaran' => 'cash',
            'status' => 'active'
        ]);   
        $oj->customer()->attach(3);

        $oj = Orderjasa::create([
            'id_jasa' => '1',
            'id_branch' => '2',
            'id_barber' => '5',
            'total_harga' => '10000',
            'qty' => '1',
            'alamat' => 'surabaya',
            'ongkir' => '0',
            'metode_pembayaran' => 'cash',
            'status' => 'active'
        ]);   
        $oj->customer()->attach(4);
    }
}
