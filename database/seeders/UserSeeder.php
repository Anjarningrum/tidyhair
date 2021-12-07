<?php

namespace Database\Seeders;

use App\Models\User;
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
        $admin = User::create([
            'name' => 'adminbranchdua',
            'email' => 'adminbranchdua@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('adminbranch');

        $admin = User::create([
            'name' => 'adminbranchtiga',
            'email' => 'adminbranchtiga@mail.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('adminbranch');
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
