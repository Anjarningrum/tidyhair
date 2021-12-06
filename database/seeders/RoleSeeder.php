<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'adminpusat',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'adminbranch',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'barber',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'customer',
            'guard_name' => 'web'
        ]);
    }
}
