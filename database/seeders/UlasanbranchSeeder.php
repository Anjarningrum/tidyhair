<?php

namespace Database\Seeders;

use App\Models\Ulasanbranch;
use Illuminate\Database\Seeder;

class UlasanbranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ulasanbranch::create([
            'branch_id' => '6',
            'customer_id' => '2',
            'rating' => '5',
            'komentar' => 'puas'
        ]);

        Ulasanbranch::create([
            'branch_id' => '6',
            'customer_id' => '1',
            'rating' => '4',
            'komentar' => 'Tokonya bersih dan rapi'
        ]);

        Ulasanbranch::create([
            'branch_id' => '6',
            'customer_id' => '2',
            'rating' => '5',
            'komentar' => 'terima kasih, barangnya bagus'
        ]);
    }
}
