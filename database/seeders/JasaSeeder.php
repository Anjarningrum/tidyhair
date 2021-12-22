<?php

namespace Database\Seeders;

use App\Models\Jasa;
use Illuminate\Database\Seeder;

class JasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jasa = Jasa::create([
            'id' => '1',
            'nama' => 'Pangkas Rambut',
            'harga' => '10000',
            'diskon' => '5'
        ]);
        $jasa->users()->attach('2');

        $jasa = Jasa::create([
            'id' => '2',
            'nama' => 'Semir Rambut',
            'harga' => '50000',
            'diskon' => '5'
        ]);
        $jasa->users()->attach('2');
    
        $jasa = Jasa::create([
            'id' => '3',
            'nama' => 'Bleching Rambut',
            'harga' => '35000',
            'diskon' => '5'
        ]);
        $jasa->users()->attach('2');
    }
}
