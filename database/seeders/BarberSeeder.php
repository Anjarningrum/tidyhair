<?php

namespace Database\Seeders;

use App\Models\Barber;
use Illuminate\Database\Seeder;

class BarberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barber1 = Barber::create([
            'id_branch' => '1',
            'name' => 'barber3',
            'email' => 'barber3@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        $barber2 = Barber::create([
            'id_branch' => '1',
            'name' => 'barber4',
            'email' => 'barber4@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        $barber3 = Barber::create([
            'id_branch' => '1',
            'name' => 'barber5',
            'email' => 'barber5@mail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
