<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Customer::create([
            'name' => 'cus1',
            'email' => 'cus1@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        Customer::create([
            'name' => 'cus2',
            'email' => 'cus2@mail.com',
            'password' => bcrypt('12345678'),
        ]);
        
        $admin = User::create([
            'name' => 'adminpusat',
            'email' => 'adminpusat@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('adminpusat');
        
        $admin = User::create([
            'name' => 'adminbranch',
            'email' => 'adminbranch@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('adminbranch');
        
    }
}
