<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\User;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = Barang::create([
            'id' => '1',
            'nama' => 'Pomade Hijau',
            'harga' => '10000',
            'stok' => '20',
            'diskon' => '5'
        ]);
        $barang->users()->attach('2');

        $barang = Barang::create([
            'id' => '2',
            'nama' => 'Pomade Biru',
            'harga' => '30000',
            'stok' => '20',
            'diskon' => '5'
        ]);
        $barang->users()->attach('2');

        $barang = Barang::create([
            'id' => '3',
            'nama' => 'Pomade Merah',
            'harga' => '25000',
            'stok' => '20',
            'diskon' => '5'
        ]);
        $barang->users()->attach('2');

        $barang = Barang::create([
            'id' => '4',
            'nama' => 'Pomade Merah',
            'harga' => '25000',
            'stok' => '20',
            'diskon' => '5'
        ]);
        $barang->users()->attach('2');
    }
}
