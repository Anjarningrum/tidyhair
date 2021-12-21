<?php

namespace Database\Seeders;

use App\Models\Ulasanbarber;
use Illuminate\Database\Seeder;

class UlasanbarberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ulasanbarber::create([
            'barber_id' => '1',
            'customer_id' => '2',
            'rating' => '5',
            'komentar' => 'Nice, besok kesini lagi'
        ]);

        Ulasanbarber::create([
            'barber_id' => '1',
            'customer_id' => '1',
            'rating' => '5',
            'komentar' => 'terimakasih mas'
        ]);

        Ulasanbarber::create([
            'barber_id' => '1',
            'customer_id' => '2',
            'rating' => '4',
            'komentar' => 'Alhamdulillah, rapi'
        ]);
    }
}
