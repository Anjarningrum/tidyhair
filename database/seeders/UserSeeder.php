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
       // $admin = User::create([
       //     'name' => 'adminpusat',
       //     'email' => 'adminpusat@mail.com',
       //     'password' => bcrypt('12345678'),
       // ]);

       // $admin->assignRole('adminpusat');

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
    }
}
