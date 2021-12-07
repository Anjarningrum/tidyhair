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
        $admin = Customer::create([
            'name' => 'cus1',
            'email' => 'cus1@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin = Customer::create([
            'name' => 'cus2',
            'email' => 'cus2@mail.com',
            'password' => bcrypt('12345678'),
        ]);
        /*
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
        
        $usersatu = User::create([
            'name' => 'barbersatu',
            'email' => 'barbersatu@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        $usersatu->assignRole('barber');

        $userdua = User::create([
            'name' => 'barberdua',
            'email' => 'barberdua@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        $userdua->assignRole('barber');

        $userdua = User::create([
            'name' => 'customer',
            'email' => 'customer@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        $userdua->assignRole('customer');
        */
    }
}
