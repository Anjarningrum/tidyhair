<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name' => 'customer1',
            'email' => 'customer1@mail.com',
            'password' => bcrypt('12345678'),
        ]);
        Customer::create([
            'name' => 'customer2',
            'email' => 'customer2@mail.com',
            'password' => bcrypt('12345678'),
        ]);
        Customer::create([
            'name' => 'customer3',
            'email' => 'customer3@mail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
