<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Customer;
use App\Models\Barber;
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
            'id' => '1',
            'name' => 'Tidy Hair Surabaya',
            'email' => 'tidyhairsby@mail.com',
            'password' => bcrypt('12345678'),
            'alamat' => 'karah indah 1 surabaya',
            'no_telepon' => '081553567372',
            'latitude' =>'-7.311329', 
            'longtitude' =>'112.720139',
        ]);

        $admin->assignRole('adminpusat');

        $branch = User::create([
            'id' => '2',
            'name' => 'Tidy Hair Mjokerto',
            'email' => 'tidyhairmjk@mail.com',
            'password' => bcrypt('12345678'),
            'alamat' => 'Mergelo, Balongsari, Magersari, Mojokerto',
            'no_telepon' => '08815007588',
            'latitude' => '-7.467601',
            'longtitude' => ' 112.440343',
        ]);

        $branch->assignRole('adminbranch');

        $branch = User::create([
            'id' => '3',
            'name' => 'Tidy Hair Malang',
            'email' => 'tidyhairmlg@mail.com',
            'password' => bcrypt('12345678'),
            'alamat' => 'bululawang Malang',
            'no_telepon' => '082199437469',
            'latitude' => '-8.090951',
            'longtitude' => '112.636133',
        ]);

        $branch->assignRole('adminbranch');

        $branch = User::create([
            'id' => '4',
            'name' => 'Tidy Hair Sidoarjo',
            'email' => 'tidyhairsda@mail.com',
            'password' => bcrypt('12345678'),
            'alamat' => 'Rame, Pilang, Kec. Wonoayu, Kabupaten Sidoarjo',
            'no_telepon' => '082199437469',
            'latitude' => '-7.44860',
            'longtitude' => '112.65944',
        ]);

        $branch->assignRole('adminbranch');

        $barber = Barber::create([
            'id' => '1',
            'id_branch' => '2',
            'name' => 'zidan nurdin',
            'email' => 'zidan@mail.com',
            'password' => bcrypt('12345678'),
            'alamat' => 'karah indah 1 surabaya',
            'no_telepon' => '085704232504',
            'latitude' =>'-7.311329', 
            'longtitude' =>'112.720139',
        ]);

        $barber = Barber::create([
            'id' => '2',
            'id_branch' => '2',
            'name' => 'rizky rafi ',
            'email' => 'ricky@mail.com',
            'password' => bcrypt('12345678'),
            'alamat' => 'karah indah 1 surabaya',
            'no_telepon' => '081553567372',
            'latitude' =>'-7.311329', 
            'longtitude' =>'112.720139',
        ]);

        $barber = Barber::create([
            'id' => '3',
            'id_branch' => '3',
            'name' => 'risma novianti',
            'email' => 'risma@mail.com',
            'password' => bcrypt('12345678'),
            'alamat' => 'Mergelo, Balongsari, Magersari, Mojokerto',
            'no_telepon' => '08815007588',
            'latitude' => '-7.467601',
            'longtitude' => '112.440343',
        ]);

        $barber = Barber::create([
            'id' => '4',
            'id_branch' => '3',
            'name' => 'nungki magfiroh',
            'email' => 'nungki@mail.com',
            'password' => bcrypt('12345678'),
            'alamat' => 'Mergelo, Balongsari, Magersari, Mojokerto',
            'no_telepon' => '082261337655',
            'latitude' => '-7.467601',
            'longtitude' => '112.440343',
        ]);

        $barber = Barber::create([
            'id' => '5',
            'id_branch' => '4',
            'name' => 'achmad asrori',
            'email' => 'achmad@mail.com',
            'password' => bcrypt('12345678'),
            'alamat' => 'bululawang Malang',
            'no_telepon' => '082199437469',
            'latitude' => '-8.090951',
            'longtitude' => '112.636133',
        ]);

        $barber = Barber::create([
            'id' => '6',
            'id_branch' => '4',
            'name' => 'anjar septia',
            'email' => 'anjar@mail.com',
            'password' => bcrypt('12345678'),
            'alamat' => 'bululawang Malang',
            'no_telepon' => '085546316976',
            'latitude' => '-8.090951',
            'longtitude' => '112.636133',
        ]);

    }
}
